<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');



class brandController
{



    public function __construct()
    {
        $this->database = new Database();
        $this->db = $this->database->connect();
        $this->brand = new Brand($this->db);
        $this->data  = json_decode(file_get_contents("php://input"));
    }

    public function create_Brand()
    {


        $this->brand->brand_name = $this->data->brand_name;
        $this->brand->brand_image = $this->data->brand_image;



        if ($this->brand->create_Brand()) {
            echo json_encode(
                array(

                    'msg' => 'New Car Brand has been inserted successfully.'
                )
            );
        } else {
            echo json_encode(
                array(
                    'msg' => 'No brands has been created'
                )
            );
        }
    }

    public function delete_Brand()
    {

        $this->brand->brand_id = $this->data->brand_id;

        if ($this->brand->delete_Brand()) {
            echo json_encode(
                array('message' => 'brand deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'brand not deleted')
            );
        }
    }

    public function read_brands()
    {

        $resultat = $this->brand->read_brands();
        $num = $resultat->rowCount();
        if ($num > 0) {
            $brands_arr = array();

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $brands_ithem = array(
                    'brand_id' => $brand_id,
                    'brand_name' => $brand_name,
                    'brand_image' => $brand_image,
                    'num' => $num,


                );

                array_push($brands_arr, $brands_ithem);
            }

            echo json_encode($brands_arr);
        } else {
            echo json_encode(array('message' => 'Not Found'));
        }
    }

    public function update_brand()
    {

        $data = json_decode(file_get_contents("php://input"));

        $this->brand->brand_id = $data->brand_id;
        $this->brand->brand_name = $data->brand_name;
        $this->brand->brand_image = $data->brand_image;
    }
}
