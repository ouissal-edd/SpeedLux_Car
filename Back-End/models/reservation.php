<?php
class Reservation
{
    private $conn;
    private $table = 'reservations';


    public $reservation_id;
    public $user_id;
    public $car_id;
    public $pickup_date;
    public $return_date;
    public $pickup_location;
    public $return_location;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function verification_car()
    {

        $query = 'SELECT * from cars, car_brands, car_types  where cars.brand_id = car_brands.brand_id and cars.type_id = car_types.type_id and cars.id not in (select car_id 
        from reservations
                 where (pickup_date=:pickup_date between pickup_date and return_date 
                     or return_date=:return_date BETWEEN pickup_date and return_date ))';
        $stmt = $this->conn->prepare($query);

        $this->pickup_date = htmlspecialchars(strip_tags($this->pickup_date));
        $this->return_date = htmlspecialchars(strip_tags($this->return_date));

        $stmt->bindParam(":pickup_date", $this->pickup_date);
        $stmt->bindParam(":return_date", $this->return_date);

        if ($stmt->execute()) {
            return $stmt;
        }
    }



    public function create_reservation()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET  user_id = :user_id, car_id = :car_id , pickup_date = :pickup_date , return_date = :return_date , pickup_location = :pickup_location , return_location = :return_location';
        $stmt = $this->conn->prepare($query);

        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->car_id = htmlspecialchars(strip_tags($this->car_id));
        $this->pickup_date = htmlspecialchars(strip_tags($this->pickup_date));
        $this->return_date = htmlspecialchars(strip_tags($this->return_date));
        $this->pickup_location = htmlspecialchars(strip_tags($this->pickup_location));
        $this->return_location = htmlspecialchars(strip_tags($this->return_location));

        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":car_id", $this->car_id);
        $stmt->bindParam(":pickup_date", $this->pickup_date);
        $stmt->bindParam(":return_date", $this->return_date);
        $stmt->bindParam(":pickup_location", $this->pickup_location);
        $stmt->bindParam(":return_location", $this->return_location);



        if ($stmt->execute()) {
            return true;
        }
    }


    public function delete_reservation()
    {

        $query = 'DELETE FROM ' . $this->table . ' WHERE reservation_id = :reservation_id';

        $stmt = $this->conn->prepare($query);
        $this->reservation_id = htmlspecialchars(strip_tags($this->reservation_id));

        $stmt->bindParam(':reservation_id', $this->reservation_id);

        if ($stmt->execute()) {
            return true;
        }
    }



    public function read_reservation()
    {
        $query = 'SELECT  user_id , car_id , pickup_date  , return_date  , pickup_location  , return_location   FROM ' . $this->table . ' ';
        $stm = $this->conn->prepare($query);
        $stm->execute();

        return $stm;
    }

    public function Jointure_resevation()
    {
        $query = 'SELECT pickup_date , reservation_id, return_date , pickup_location ,return_location , car_name , full_name FROM `reservations` INNER JOIN cars ON cars.id=cars.id INNER JOIN users ON users.user_id=users.user_id WHERE reservations.car_id = cars.id AND reservations.user_id=users.user_id ';
        $stm = $this->conn->prepare($query);
        $stm->execute();
        return $stm;
    }
}
