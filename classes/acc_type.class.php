<?php
    require_once 'database.php';

    class Acc_type{

        public $id;
        public $acc_type_name;
        public $acc_type;

        protected $db;

        function __construct(){
            $this->db = new Database;
        }

        function acc_type_add() {
            $sql = "INSERT INTO acc_type (acc_type_name, acc_type) 
            VALUES (:acc_type_name, :acc_type)";
          
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':acc_type_name', $this->acc_type_name);
            $query->bindParam(':acc_type', $this->acc_type);
          
            if($query->execute()) {
              return true;
            } else {
              return false;
            }
          }
          
          function hotel_acc_type_show(){
            $sql = "SELECT * FROM acc_type WHERE acc_type = 'Hotel'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function villa_acc_type_show(){
            $sql = "SELECT * FROM acc_type WHERE acc_type = 'Villa'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function cottage_acc_type_show(){
            $sql = "SELECT * FROM acc_type WHERE acc_type = 'Cottage'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function hotel_inc_delete($acc_type_id){
            $sql = "DELETE FROM acc_type WHERE id = :id;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':id', $acc_type_id);
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }
        }




/*            function renderVilla(){
            $sql = 'SELECT * FROM villas;';

            $query = $this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }

            return $data;
        } */
    }
?>