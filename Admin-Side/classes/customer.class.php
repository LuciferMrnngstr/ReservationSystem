<?php

    include_once 'database.php';

    class Customer{

        public $id;
        public $lastname;
        public $firstname;
        public $middlename;
        public $birth_date;
        public $age;
        public $suffix;
        public $sex;
        public $email;
        public $username;
        public $contact_num;
        public $password;

        protected $db;

        function __construct(){
            $this->db = new Database;
        }

        function register(){
        $sql = "INSERT INTO customer (lastname, firstname, middlename, birth_date, age, suffix, sex, contact_num, username, password, email) 
            VALUES (:lastname, :firstname, :middlename, :birth_date, :age, :suffix, :sex, :contact_num, :username, :password, :email);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':birth_date', $this->birth_date);
        $query->bindParam(':age', $this->age);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':sex', $this->sex);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':contact_num', $this->contact_num);
        $query->bindParam(':password', $this->password);
        $query->bindParam(':email', $this->email);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function get_account_info($id=0){
        if($id == 0){
            $sql = "SELECT * FROM customer WHERE username = :username AND password = :password;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':username', $this->username);
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

    function fetch($record_id){
        $sql = "SELECT * FROM customer WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    /*         function check_email_dupli($email){
            $sql = 'SELECT email FROM customer WHERE email=:email;';

            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':email', $email);

            if($query->execute()){
                $data = $query->fetch();
            }
            return $data;
        } */




    function login(){
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

}
?>