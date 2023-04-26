<?php
    require_once 'database.php';

    class Acc_archived{

        public $id;
        public $images;
        public $type;
        public $acc_name;
        public $description;
        public $capacity;
        public $free_entrance;
        public $inclusion;
        public $price;
        public $status;
        protected $db;

        function __construct(){
            $this->db = new Database;
        }

/*         function hotel_add() {
            $sql = "INSERT INTO acc_archived (images, type, acc_name, description, capacity, free_entrance, inclusion, price, status) 
            VALUES (:images, :type, :acc_name, :description, :capacity, :free_entrance, :inclusion, :price, :status)";
          
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':images', $this->images);
            $query->bindParam(':type', $this->type);
            $query->bindParam(':acc_name', $this->acc_name);
            $query->bindParam(':description', $this->description);
            $query->bindParam(':capacity', $this->capacity);
            $query->bindParam(':free_entrance', $this->free_entrance);
            $query->bindParam(':inclusion', $this->inclusion);
            $query->bindParam(':price', $this->price);
            $query->bindParam(':status', $this->status);
          
            if($query->execute()) {
              return true;
            } else {
              return false;
            }
          } */
          
          function hotel_archived_show(){
            $sql = "SELECT *, SUBSTRING_INDEX(images, ',', 1) as image FROM acc_archived WHERE type = 'Hotel'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

            function restore_hotel_to_accommodation($hotel_id) {;
            // Check if the hotel exists in the acc_archived table
            $sql = "SELECT * FROM acc_archived WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $hotel_id);
            $query->execute();
        
            if ($query->rowCount() == 0) {
                // If no hotel was found with the given ID, return false
                return false;
            }
        
            // Get the hotel data from the acc_archived table
            $hotel_data = $query->fetch(PDO::FETCH_ASSOC);
        
            // Insert the hotel data into the acc_archived table
            $sql = "INSERT INTO accommodations (id, images, type, acc_name, description, capacity, free_entrance, inclusion, price, status) 
                    VALUES (:id, :images, :type, :acc_name, :description, :capacity, :free_entrance, :inclusion, :price, :status)";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $hotel_data['id']);
            $query->bindParam(':images', $hotel_data['images']);
            $query->bindParam(':type', $hotel_data['type']);
            $query->bindParam(':acc_name', $hotel_data['acc_name']);
            $query->bindParam(':description', $hotel_data['description']);
            $query->bindParam(':capacity', $hotel_data['capacity']);
            $query->bindParam(':free_entrance', $hotel_data['free_entrance']);
            $query->bindParam(':inclusion', $hotel_data['inclusion']);
            $query->bindParam(':price', $hotel_data['price']);
            $query->bindParam(':status', $hotel_data['status']);
            $query->execute();
        
            // Delete the hotel from the acc_archived table
            $sql = "DELETE FROM acc_archived WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $hotel_id);
        
            return $query->execute();
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