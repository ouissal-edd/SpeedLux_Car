<?php
class Brand
{
  private $conn;
  private $table = 'car_brands';


  public $brand_id;
  public $brand_name;
  public $brand_image;

  public function __construct($db)
  {
    $this->conn = $db;
  }

  // for brands
  public function create_Brand()
  {
    $query = 'INSERT INTO ' . $this->table . ' SET  brand_name = :brand_name, brand_image = :brand_image';
    $stmt = $this->conn->prepare($query);

    $this->brand_name = htmlspecialchars(strip_tags($this->brand_name));
    $this->brand_image = htmlspecialchars(strip_tags($this->brand_image));

    $stmt->bindParam(":brand_name", $this->brand_name);
    $stmt->bindParam(":brand_image", $this->brand_image);


    if ($stmt->execute()) {
      return true;
    }
  }


  public function delete_Brand()
  {

    $query = 'DELETE FROM ' . $this->table . ' WHERE brand_id = :brand_id';

    $stmt = $this->conn->prepare($query);
    $this->brand_id = htmlspecialchars(strip_tags($this->brand_id));

    $stmt->bindParam(':brand_id', $this->brand_id);

    if ($stmt->execute()) {
      return true;
    }
  }


  public function update_brand()
  {

    $query = 'UPDATE ' . $this->table . ' SET      brand_name= :brand_name , brand_image = :brand_image WHERE  brand_id = :brand_id';
    $stmt = $this->conn->prepare($query);

    $this->brand_id = htmlspecialchars(strip_tags($this->brand_id));
    $this->brand_name = htmlspecialchars(strip_tags($this->brand_name));
    $this->brand_image = htmlspecialchars(strip_tags($this->brand_image));



    $stmt->bindParam(":brand_id", $this->brand_id);
    $stmt->bindParam(":brand_name", $this->brand_name);
    $stmt->bindParam(":brand_image", $this->brand_image);



    if ($stmt->execute()) {
      return true;
    }

    return false;
  }

  public function read_brands()
  {
    $query = 'SELECT brand_id  , brand_name ,brand_image FROM ' . $this->table . ' ';
    $stm = $this->conn->prepare($query);
    $stm->execute();

    return $stm;
  }
  // end query brand




}
