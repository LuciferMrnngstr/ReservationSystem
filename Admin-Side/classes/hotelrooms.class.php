<?php

require_once 'database.php';

Class Hotelrooms{
    //attributes

    public $id;
    public $roomtype;
    public $roomdescription;
    public $capacity;
    public $inclusion;
    public $price;
    public $status;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO hotelrooms (roomtype, roomdescription, capacity, inclusion, price, status) VALUES 
        (:roomtype, :roomdescription, :capacity, :inclusion, :price, :status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':roomtype', $this->roomtype);
        $query->bindParam(':roomdescription', $this->roomdescription);
        $query->bindParam(':capacity', $this->capacity);
        $query->bindParam(':inclusion', $this->inclusion);
        $query->bindParam(':price', $this->price);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE hotelrooms SET roomtype=:roomtype, roomdescription=:roomdescription, capacity=:capacity, inclusion=:inclusion, price=:price, status=:status WHERE id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':roomtype', $this->roomtype);
        $query->bindParam(':roomdescription', $this->roomdescription);
        $query->bindParam(':capacity', $this->capacity);
        $query->bindParam(':inclusion', $this->inclusion);
        $query->bindParam(':price', $this->price);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':id', $this->id);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM hotelrooms WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function delete($record_id) {
        $sql = "INSERT INTO hotelarchived (id, roomtype, roomdescription, capacity, inclusion, price, status, user, datedeleted) 
                SELECT id, roomtype, roomdescription, capacity, inclusion, price, status, '{$_SESSION['fullname']}', NOW() FROM hotelrooms WHERE id = :id;
                DELETE FROM hotelrooms WHERE id = :id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function restore($record_id) {
        $sql = "INSERT INTO hotelrooms (id, roomtype, roomdescription, capacity, inclusion, price, status)
                SELECT id, roomtype, roomdescription, capacity, inclusion, price, status
                FROM hotelarchived
                WHERE id = :id;
                DELETE FROM hotelarchived WHERE id = :id";
    
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function show(){
        $sql = "SELECT * FROM hotelrooms;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
    function shows(){
        $sql = "SELECT id, roomtype, roomdescription, capacity, inclusion, price, user, datedeleted FROM hotelarchived;";
        $query=$this->db->connect()->prepare($sql);
        if ($query->execute()) {
            $data = $query->fetchAll();
            if (is_array($data)) {
                return $data;
            } else {
                throw new Exception("Error fetching data from database.");
            }
        } else {
            throw new Exception("Error executing query.");
        }
    }
    
    function bernard_delete($record_id){
        $sql = "DELETE FROM hotelrooms WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}

?>