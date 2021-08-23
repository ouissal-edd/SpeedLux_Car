<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

class carController
{




    public function __construct()
    {
        $this->database = new Database();
        $this->db = $this->database->connect();
        $this->car = new Car($this->db);
        $this->data  = json_decode(file_get_contents("php://input"));
    }

    public function create_Car()
    {

        $this->car->brand_id = $this->data->brand_id;
        $this->car->type_id = $this->data->type_id;
        $this->car->car_name = $this->data->car_name;
        $this->car->color = $this->data->color;
        $this->car->model = $this->data->model;
        $this->car->description = $this->data->description;




        if ($this->car->create_Car()) {
            echo json_encode(
                array(

                    'msg' => 'New Car  has been inserted successfully.'
                )
            );
        } else {
            echo json_encode(
                array(
                    'msg' => 'No Car has been created'
                )
            );
        }
    }


    public function JointureCars()
    {


        $resultat = $this->car->JointureCars();
        $num = $resultat->rowCount();
        if ($num > 0) {
            $car_arr = array();

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $car_ithem = array(
                    'id' => $id,
                    'car_name' => $car_name,
                    'brand_name' => $brand_name,
                    'type_label' => $type_label,
                    'color' => $color,
                    'model' => $model,
                    'description' => $description,


                );

                array_push($car_arr, $car_ithem);
            }

            echo json_encode($car_arr);
        } else {
            echo json_encode(array('message' => 'Not Found'));
        }
    }


    public function delete_Car()
    {


        $this->car->id = $this->data->id;

        if ($this->car->delete_Car()) {
            echo json_encode(
                array('message' => 'Car deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'Car not deleted')
            );
        }
    }


    public function update_Car()
    {

        $this->car->id = $this->data->id;
        $this->car->type_id = $this->data->type_id;
        $this->car->car_name = $this->data->car_name;
        $this->car->color = $this->data->color;
        $this->car->model = $this->data->model;
        $this->car->description = $this->data->description;



        if ($this->car->update_Car()) {
            echo json_encode(
                array('message' => 'Car Updated')
            );
        } else {
            echo json_encode(
                array('message' => 'Car not updated')
            );
        }
    }


    public function read_single_car()
    {
        $this->car->id = $this->data->id;
        $this->car->read_single();

        $car_arr = array(
            'id' => $this->car->id,
            'car_name' => $this->car->car_name,
            'color' => $this->car->color,
            'model' => $this->car->model,
            'description' => $this->car->description,
        );

        print_r(json_encode($car_arr));
    }

    public function read_Car()
    {

        $resultat = $this->car->read_Car();
        $num = $resultat->rowCount();
        if ($num > 0) {
            $cars_arr = array();

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                //   Importe les variables dans la table
                extract($row);

                $cars_ithem = array(
                    'brand_id' => $brand_id,
                    'type_id' => $type_id,
                    'car_name' => $car_name,
                    'color' => $color,
                    'model' => $model,
                    'description' => $description,
                    'num' => $num,


                );

                array_push($cars_arr, $cars_ithem);
            }

            echo json_encode($cars_arr);
        } else {
            echo json_encode(array('message' => 'Not Found'));
        }
    }
}
