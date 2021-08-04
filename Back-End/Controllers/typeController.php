<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

class typeController
{

    public $type_id;
    public $type_label;
    public $type_description;

    public function __construct()
    {

        $this->database = new Database();
        $this->db = $this->database->connect();
        $this->type = new Type($this->db);
        $this->data  = json_decode(file_get_contents("php://input"));
    }

    public function create_Type()
    {

        $this->type->type_label = $this->data->type_label;
        $this->type->type_description = $this->data->type_description;



        if ($this->type->create_Type()) {
            echo json_encode(
                array(

                    'msg' => 'New Car Type has been inserted successfully.'
                )
            );
        } else {
            echo json_encode(
                array(
                    'msg' => 'No Type has been created'
                )
            );
        }
    }


    public function read_Type()
    {

        $this->resultat = $this->type->read_Type();
        $num = $this->resultat->rowCount();
        if ($num > 0) {
            $types_arr = array();

            while ($row = $this->resultat->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $types_ithem = array(
                    'type_id' => $type_id,
                    'type_label' => $type_label,
                    'type_description' => $type_description,


                );

                array_push($types_arr, $types_ithem);
            }

            echo json_encode($types_arr);
        } else {
            echo json_encode(array('message' => 'Not Found'));
        }
    }

    public function update_type()
    {

        $data = json_decode(file_get_contents("php://input"));

        $this->type->type_id = $data->type_id;
        $this->type->type_label = $data->type_label;
        $this->type->type_description = $data->type_description;
    }

    public function delete_Type()
    {

        $this->type->type_id = $this->data->type_id;

        if ($this->type->delete_Type()) {
            echo json_encode(
                array('message' => 'Type deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'Type not deleted')
            );
        }
    }
}
