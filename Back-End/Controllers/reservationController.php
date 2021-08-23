<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

class reservationController
{

    public $reservation_id;
    public $user_id;
    public $car_id;
    public $pickup_date;
    public $return_date;
    public $pickup_location;
    public $return_location;


    public function __construct()
    {
        $this->database = new Database();
        $this->db = $this->database->connect();
        $this->reservation = new Reservation($this->db);
        $this->data  = json_decode(file_get_contents("php://input"));
    }

    public function verification_car()
    {
        $result = $this->reservation->verification_car();
        $num = $result->rowCount();

        if ($num > 0) {

            $available_cars = array();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $cars_free = array(
                    'id' => $id,
                    'car_name' => $car_name,
                    'color' => $color,
                    'model' => $model,
                    'description' => $description,
                    'brand_name' => $brand_name,
                    'brand_image' => $brand_image,
                    'type_label' => $type_label,
                    'type_description' => $type_description,




                );

                array_push($available_cars, $cars_free);
            }
            echo json_encode($available_cars);
        } else {
            echo json_encode(
                array('message' => 'Car not nooononono')
            );
        }
    }


    public function Jointure_resevation()
    {

        $resultat = $this->reservation->Jointure_resevation();
        $num = $resultat->rowCount();
        if ($num > 0) {
            $reservation_arr = array();

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $reservation_ithem = array(
                    'reservation_id' => $reservation_id,
                    'car_name' => $car_name,
                    'full_name' => $full_name,
                    'pickup_date' => $pickup_date,
                    'return_date' => $return_date,
                    'pickup_location' => $pickup_location,
                    'return_location' => $return_location,


                );

                array_push($reservation_arr, $reservation_ithem);
            }

            echo json_encode($reservation_arr);
        } else {
            echo json_encode(array('message' => 'Not Found'));
        }
    }


    public function read_rservation()
    {

        $resultat = $this->reservation->read_reservation();
        $num = $resultat->rowCount();
        if ($num > 0) {
            $reservation_arr = array();

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $reservation_ithem = array(

                    'user_id ' => $user_id,
                    'car_id' => $car_id,
                    'pickup_date' => $pickup_date,
                    'return_date' => $return_date,
                    'pickup_location' => $pickup_location,
                    'return_location' => $return_location,
                    'num' => $num,


                );

                array_push($reservation_arr, $reservation_ithem);
            }

            echo json_encode($reservation_arr);
        } else {
            echo json_encode(array('message' => 'Not Found'));
        }
    }

    public function  delete_resrvation()
    {

        $this->reservation->reservation_id =   $this->data->reservation_id;

        if ($this->reservation->delete_reservation()) {
            echo json_encode(
                array('message' => 'reservation deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'reservation not deleted')
            );
        }
    }


    public function create_reservation()
    {


        $this->reservation->user_id =  $this->data->user_id;
        $this->reservation->car_id =  $this->data->car_id;
        $this->reservation->pickup_date =  $this->data->pickup_date;
        $this->reservation->return_date =  $this->data->return_date;
        $this->reservation->pickup_location =  $this->data->pickup_location;
        $this->reservation->return_location =  $this->data->return_location;




        if ($this->reservation->create_reservation()) {
            echo json_encode(
                array(

                    'msg' => 'New Reservation  has been inserted successfully.'
                )
            );
        } else {
            echo json_encode(
                array(
                    'msg' => 'Reservation has not been created'
                )
            );
        }
    }
}
