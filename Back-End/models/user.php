<?php


class Users
{
    private $conn;
    private $table = 'users';

    public $user_id;
    public $user_email;
    public $full_name;
    public $password;
    public $role;



    public function __construct($db)
    {
        $this->conn = $db;
    }





    public function read_users()
    {
        $query = 'SELECT user_id , user_email ,full_name,password FROM ' . $this->table . ' ';
        $stm = $this->conn->prepare($query);
        $stm->execute();

        return $stm;
    }





    public function create_users()
    {

        $query = 'INSERT INTO ' . $this->table . ' SET  user_email = :user_email , full_name= :full_name , password = :password  ';
        $stmt = $this->conn->prepare($query);

        $this->user_email = htmlspecialchars(strip_tags($this->user_email));
        $this->full_name = htmlspecialchars(strip_tags($this->full_name));
        $this->password = htmlspecialchars(strip_tags($this->password));


        $stmt->bindParam(":user_email", $this->user_email);
        $stmt->bindParam(":full_name", $this->full_name);
        $stmt->bindParam(":password", $this->password);





        if ($stmt->execute()) {
            return true;
        }

        return false;
    }




    public function delete_user()
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE user_id = :user_id';

        $stmt = $this->conn->prepare($query);
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));

        $stmt->bindParam(':user_id', $this->user_id);

        if ($stmt->execute()) {
            return true;
        }
    }









    public function update_users()
    {
        $query = 'UPDATE ' . $this->table . ' SET      user_email = :user_email , full_name= :full_name , password = :password     WHERE  user_id = :user_id';
        $stmt = $this->conn->prepare($query);

        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->user_email = htmlspecialchars(strip_tags($this->user_email));
        $this->full_name = htmlspecialchars(strip_tags($this->full_name));
        $this->password = htmlspecialchars(strip_tags($this->password));

        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":user_email", $this->user_email);
        $stmt->bindParam(":full_name", $this->full_name);
        $stmt->bindParam(":password", $this->password);




        if ($stmt->execute()) {
            return true;
        }

        return false;
    }





    public function UserExist()
    {

        $query = 'SELECT * FROM ' . $this->table . '   WHERE user_email = :user_email';
        $stmt = $this->conn->prepare($query);

        $this->user_email = htmlspecialchars(strip_tags($this->user_email));

        $stmt->bindParam(":user_email", $this->user_email);

        $stmt->execute();
        $count = $stmt->rowCount();
        return $count;
    }


    public function Connect_users()
    {
        $query = 'SELECT * FROM ' . $this->table . '   WHERE  user_email = :user_email AND password = :password ';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_email", $this->user_email);
        $stmt->bindParam(":password", $this->password);

        $stmt->execute();
        $row   = $stmt->fetch(PDO::FETCH_ASSOC);

        $count = $stmt->rowCount();

        if ($count == 1) {
            $this->id_user = $row['user_id'];
            return  $row['user_id'];
        } else {
            return false;
        }
    }
}
