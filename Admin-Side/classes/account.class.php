<?php

require_once 'database.php';

class Account{

    public $id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $cp_no;
    public $email;
    public $password;
    public $user_type;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //customer login
    function sign_in(){
        $sql = "SELECT * FROM account WHERE email = :email AND password = :password";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

    //admin login
    function sign_in_admin(){
        $sql = "SELECT * FROM account WHERE email = :email AND password = :password AND user_type != 'cust';";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

    //forgot password
    function get_account_info($id=0){
        if($id == 0){
            $sql = "SELECT * FROM account WHERE email = :email AND password = :password;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':email', $this->email);
            $query->bindParam(':password', $this->password);
        }else{
            $sql = "SELECT * FROM account WHERE id = :id;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
        }
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function sign_add(){
        $sql = "INSERT INTO account (first_name, middle_name, last_name, cp_no, email, password, user_type) VALUES 
        (:first_name, :middle_name, :last_name, :cp_no, :email, :password, :user_type);";
    
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':first_name', $this->first_name);
        $query->bindParam(':middle_name', $this->middle_name);
        $query->bindParam(':last_name', $this->last_name);
        $query->bindParam(':cp_no', $this->cp_no);
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
}

?>