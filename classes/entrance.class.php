<?php
    require_once 'database.php';

    class Entrance{

        public $id;
        public $e_type;
        public $e_fee;

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
          

          function e_price() {
            $sql = "SELECT entrance_fee.*, entrance_type.name AS entrance_type_name, time_frame.name AS time_frame_name FROM entrance_fee JOIN entrance_type ON entrance_fee.entrance_type_id = entrance_type.id JOIN time_frame ON entrance_fee.timeframe_id = time_frame.id";
            $query = $this->db->connect()->prepare($sql);
            $data = [];
            if ($query->execute()) {
                $data = $query->fetchAll();
            }
            return $data;
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