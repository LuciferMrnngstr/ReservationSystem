<?php

require_once 'database.php';

class Discount{

    public $id;
    public $dname;
    public $dtype;
    public $dvalue;
    public $start_date;
    public $end_date;
    public $status;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add(){
        $sql = "INSERT INTO discounts (dname, dtype, dvalue, start_date, end_date, status) VALUES 
        (:dname, :dtype, :dvalue, :start_date, :end_date, :status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':dname', $this->dname);
        $query->bindParam(':dtype', $this->dtype);
        $query->bindParam(':dvalue', $this->dvalue);
        $query->bindParam(':start_date', $this->start_date);
        $query->bindParam(':end_date', $this->end_date);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE discounts SET dname=:dname, dtype=:dtype, dvalue=:dvalue, start_date=:start_date, end_date=:end_date, status=:status WHERE id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':dname', $this->dname);
        $query->bindParam(':dtype', $this->dtype);
        $query->bindParam(':dvalue', $this->dvalue);
        $query->bindParam(':start_date', $this->start_date);
        $query->bindParam(':end_date', $this->end_date);
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
        $sql = "SELECT * FROM discounts WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function delete($record_id){
        $sql = "DELETE FROM discounts WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM discounts;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
}

?>