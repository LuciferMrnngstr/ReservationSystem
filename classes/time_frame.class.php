<?php
    require_once 'database.php';

    class Time_frame{

        public $id;
        public $name;
        public $time_start;
        public $end_time;

        protected $db;

        function __construct(){
            $this->db = new Database;
        }

        function get_time_frames() {
            $sql = "SELECT * FROM time_frame";
            $query = $this->db->connect()->prepare($sql);
            $time_frames = [];
            if ($query->execute()) {
                $time_frames = $query->fetchAll();
            }
            return $time_frames;
        }
        

    }
?>