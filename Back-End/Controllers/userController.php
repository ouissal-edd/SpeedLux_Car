<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

class userController
{

    public $user_id;
    public $user_email;
    public $full_name;
    public $password;
    public $role;


    public function __construct()
    {
        $this->database = new Database();
        $this->db = $this->database->connect();
        $this->users =  new User($this->db);
        $this->data  = json_decode(file_get_contents("php://input"));
    }

    public function creat_user()
    {
        $this->users->user_email =  $this->data->user_email;
        $this->users->full_name =  $this->data->full_name;
        $this->users->password =  password_hash($this->data->password, PASSWORD_DEFAULT);
        $this->users->role =  $this->data->role = "client";

        $result = $this->users->UserExist();
        $count = $result->rowCount();

        if ($count > 0) {
            echo json_encode(
                array(
                    'msg' => 'user existe.'
                )
            );
        } else if ($count == 0) {

            $this->users->create_user();
            echo json_encode(
                array(
                    'msg' => 'Users created successfully.'
                )
            );
        }
    }

    public function read_users()
    {

        $resultat =  $this->users->read_users();
        $num = $resultat->rowCount();
        if ($num > 0) {
            $users_arr = array();

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $users_ithem = array(
                    'user_id' => $user_id,
                    'user_email' => $user_email,
                    'full_name' => $full_name,
                    'password' => $password,
                    'num' => $num,

                );

                array_push($users_arr, $users_ithem);
            }


            echo json_encode($users_arr);
        } else {
            echo json_encode(array('message' => 'Not Found'));
        }
    }


    public function update_user()
    {

        $this->users->user_id =  $this->data->user_id;
        $this->users->user_email =  $this->data->user_email;
        $this->users->full_name =  $this->data->full_name;
        $this->users->password =  $this->data->password;


        if ($this->users->update_user()) {
            echo json_encode(
                array('message' => 'useer Updated')
            );
        } else {
            echo json_encode(
                array('message' => 'user not updated')
            );
        }
    }


    public function delete_user()
    {

        $this->users->user_id =  $this->data->user_id;

        if ($this->users->delete_user()) {
            echo json_encode(
                array('message' => 'user deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'user not deleted')
            );
        }
    }

    public function Connect_user()
    {
        $this->users->user_email =  $this->data->user_email;
        $this->users->password =  $this->data->password;

        $id =  $this->users->Connect_users();

        if ($this->users->Connect_users()) {
            $arr = array('id' => $id, 'existe' => true);
            echo json_encode($arr);
        } else {
            $arr = array('id' => null, 'existe' => false);
            echo json_encode($arr);
        }
    }
}
