<?php
class Car
{
    private $conn;
    private $table = 'cars';


    public $id;
    public $brand_id;
    public $type_id;
    public $car_name;
    public $color;
    public $model;
    public $description;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // for brands
    public function create_Car()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET  brand_id = :brand_id, type_id = :type_id , car_name = :car_name , color = :color , model = :model , description = :description';
        $stmt = $this->conn->prepare($query);

        $this->brand_id = htmlspecialchars(strip_tags($this->brand_id));
        $this->type_id = htmlspecialchars(strip_tags($this->type_id));
        $this->car_name = htmlspecialchars(strip_tags($this->car_name));
        $this->color = htmlspecialchars(strip_tags($this->color));
        $this->model = htmlspecialchars(strip_tags($this->model));
        $this->description = htmlspecialchars(strip_tags($this->description));

        $stmt->bindParam(":brand_id", $this->brand_id);
        $stmt->bindParam(":type_id", $this->type_id);
        $stmt->bindParam(":car_name", $this->car_name);
        $stmt->bindParam(":color", $this->color);
        $stmt->bindParam(":model", $this->model);
        $stmt->bindParam(":description", $this->description);



        if ($stmt->execute()) {
            return true;
        }
    }


    public function delete_Car()
    {

        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';

        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }
    }


    public function update_Car()
    {

        $query = 'UPDATE ' . $this->table . ' SET   type_id = :type_id , car_name = :car_name , color = :color , model = :model , description = :description WHERE  id = :id';
        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        // $this->brand_id = htmlspecialchars(strip_tags($this->brand_id));
        $this->type_id = htmlspecialchars(strip_tags($this->type_id));
        $this->car_name = htmlspecialchars(strip_tags($this->car_name));
        $this->color = htmlspecialchars(strip_tags($this->color));
        $this->model = htmlspecialchars(strip_tags($this->model));
        $this->description = htmlspecialchars(strip_tags($this->description));

        $stmt->bindParam(":id", $this->id);
        // $stmt->bindParam(":brand_id", $this->brand_id);
        $stmt->bindParam(":type_id", $this->type_id);
        $stmt->bindParam(":car_name", $this->car_name);
        $stmt->bindParam(":color", $this->color);
        $stmt->bindParam(":model", $this->model);
        $stmt->bindParam(":description", $this->description);



        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function read_Car()
    {
        $query = 'SELECT  type_id  , brand_id, car_name ,color , model , description FROM ' . $this->table . ' ';
        $stm = $this->conn->prepare($query);
        $stm->execute();

        return $stm;
    }
}
