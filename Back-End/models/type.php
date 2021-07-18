<?php
class Type
{
    private $conn;
    private $table = 'car_types';


    public $type_id;
    public $type_label;
    public $type_description;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // for brands
    public function create_Type()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET  type_label = :type_label, type_description = :type_description';
        $stmt = $this->conn->prepare($query);

        $this->type_label = htmlspecialchars(strip_tags($this->type_label));
        $this->type_description = htmlspecialchars(strip_tags($this->type_description));

        $stmt->bindParam(":type_label", $this->type_label);
        $stmt->bindParam(":type_description", $this->type_description);


        if ($stmt->execute()) {
            return true;
        }
    }


    public function delete_Type()
    {

        $query = 'DELETE FROM ' . $this->table . ' WHERE type_id = :type_id';

        $stmt = $this->conn->prepare($query);
        $this->type_id = htmlspecialchars(strip_tags($this->type_id));

        $stmt->bindParam(':type_id', $this->type_id);

        if ($stmt->execute()) {
            return true;
        }
    }


    public function update_Type()
    {

        $query = 'UPDATE ' . $this->table . ' SET      type_label= :type_label , type_description = :type_description WHERE  type_id = :type_id';
        $stmt = $this->conn->prepare($query);

        $this->type_id = htmlspecialchars(strip_tags($this->type_id));
        $this->type_label = htmlspecialchars(strip_tags($this->type_label));
        $this->type_description = htmlspecialchars(strip_tags($this->type_description));



        $stmt->bindParam(":type_id", $this->type_id);
        $stmt->bindParam(":type_label", $this->type_label);
        $stmt->bindParam(":type_description", $this->type_description);



        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function read_Type()
    {
        $query = 'SELECT type_id  , type_label ,type_description FROM ' . $this->table . ' ';
        $stm = $this->conn->prepare($query);
        $stm->execute();

        return $stm;
    }
}
