<?php

require_once 'database.php';

class Customer{

    public $id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $cp_no;
    public $age;
    public $sex;
    public $suffix;
    public $username;
    public $email;
    public $password;
    public $birth;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //customer login
    function sign_in(){
        $sql = "SELECT * FROM customer WHERE username = :username AND password = :password";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

    //forgot password
    function get_customer_info($id=0){
        if($id == 0){
            $sql = "SELECT * FROM customer WHERE username = :username AND password = :password;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':username', $this->username);
            $query->bindParam(':password', $this->password);
        }else{
            $sql = "SELECT * FROM customer WHERE id = :id;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
        }
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function sign_add(){
        $sql = "INSERT INTO customer (first_name, middle_name, last_name, cp_no, birth, email, password, user_type) VALUES 
        (:first_name, :middle_name, :last_name, :cp_no, :birth_date, :email, :password, :user_type);";
    
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':first_name', $this->first_name);
        $query->bindParam(':middle_name', $this->middle_name);
        $query->bindParam(':last_name', $this->last_name);
        $query->bindParam(':cp_no', $this->cp_no);
        $query->bindParam(':birth_date', $this->birth);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        $query->bindParam(':user_type', $this->user_type);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_acc(){
        $sql = "SELECT * FROM customer WHERE customer_id=:customer_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':customer_id', $this->customer_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_info(){
        $sql = "SELECT * FROM customer WHERE id=:id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $this->id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
}

?>