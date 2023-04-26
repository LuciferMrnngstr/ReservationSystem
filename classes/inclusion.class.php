<?php
    require_once 'database.php';

    class Inclusion{

        public $id;
        public $acc_inc_name;
        public $acc_type;

        protected $db;

        function __construct(){
            $this->db = new Database;
        }

        function inc_add() {
            $sql = "INSERT INTO acc_inclusion (acc_inc_name, acc_type) 
            VALUES (:acc_inc_name, :acc_type)";
          
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':acc_inc_name', $this->acc_inc_name);
            $query->bindParam(':acc_type', $this->acc_type);
          
            if($query->execute()) {
              return true;
            } else {
              return false;
            }
          }
          
          function hotel_inc_show(){
            $sql = "SELECT * FROM acc_inclusion WHERE acc_type = 'Hotel'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function villa_inc_show(){
            $sql = "SELECT * FROM acc_inclusion WHERE acc_type = 'Villa'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function cottage_inc_show(){
            $sql = "SELECT * FROM acc_inclusion WHERE acc_type = 'Cottage'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function hotel_inc_delete($inc_id){
            $sql = "DELETE FROM acc_inclusion WHERE id = :id;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':id', $inc_id);
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