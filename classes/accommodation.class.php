<?php
    require_once 'database.php';

    class Accommodation{

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

        function acc_add() {
            $sql = "INSERT INTO accommodations (images, type, acc_name, description, capacity, free_entrance, inclusion, price, status) 
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
          }
          
          function hotel_edit() {
            $sql = "UPDATE accommodations SET ";
            $sql .= !empty($this->images) ? "images=:images, " : "";
            $sql .= "type=:type, acc_name=:acc_name, description=:description, capacity=:capacity, free_entrance=:free_entrance, inclusion=:inclusion, price=:price, status=:status WHERE id=:id";
            
            $query = $this->db->connect()->prepare($sql);
            if (!empty($this->images)) {
              $query->bindParam(':images', $this->images);
            }
            $query->bindParam(':type', $this->type);
            $query->bindParam(':acc_name', $this->acc_name);
            $query->bindParam(':description', $this->description);
            $query->bindParam(':capacity', $this->capacity);
            $query->bindParam(':free_entrance', $this->free_entrance);
            $query->bindParam(':inclusion', $this->inclusion);
            $query->bindParam(':price', $this->price);
            $query->bindParam(':status', $this->status);
            $query->bindParam(':id', $this->id);
            
            if($query->execute()) {
              return true;
            } else {
              return false;
            }
          }
          
          function amet_show(){
            $sql = "SELECT *, SUBSTRING_INDEX(images, ',', 1) as image FROM accommodations WHERE type = 'Amenity'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

          function hotel_show(){
            $sql = "SELECT *, SUBSTRING_INDEX(images, ',', 1) as image FROM accommodations WHERE type = 'Hotel'";
            $query=$this->db->connect()->prepare($sql);
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function villa_show(){
          $sql = "SELECT *, SUBSTRING_INDEX(images, ',', 1) as image FROM accommodations WHERE type = 'Villa'";
          $query=$this->db->connect()->prepare($sql);
          if($query->execute()){
              $data = $query->fetchAll();
          }
          return $data;
      }

      function cottage_show(){
        $sql = "SELECT *, SUBSTRING_INDEX(images, ',', 1) as image FROM accommodations WHERE type = 'Cottage'";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function villa_show_all(){
      // Retrieve all the villas
      $sql = "SELECT * FROM accommodations WHERE type = 'Villa'";
      $query = $this->db->connect()->prepare($sql);
      if ($query->execute()) {
          $villas = $query->fetchAll();
      }
  
      // Retrieve the IDs of the booked villas

      $booked_villas = $_SESSION["booked_villas"] ?? [];
      session_write_close();
      $booked_villa_ids = array_keys($booked_villas);
  
      // Filter out the booked villas
      $available_villas = array_filter($villas, function ($villa) use ($booked_villa_ids) {
          return !in_array($villa["id"], $booked_villa_ids);
      });
  
      return $available_villas;
  }
  
  function amet_show_all(){
    // Retrieve all the villas
    $sql = "SELECT * FROM accommodations WHERE type = 'Amenity'";
    $query = $this->db->connect()->prepare($sql);
    if ($query->execute()) {
        $villas = $query->fetchAll();
    }

    // Retrieve the IDs of the booked villas

    $booked_villas = $_SESSION["booked_amenity"] ?? [];
    session_write_close();
    $booked_villa_ids = array_keys($booked_villas);

    // Filter out the booked villas
    $available_villas = array_filter($villas, function ($villa) use ($booked_villa_ids) {
        return !in_array($villa["id"], $booked_villa_ids);
    });

    return $available_villas;
}

  function show_acc_details(){
    $sql = "SELECT *, SUBSTRING_INDEX(images, ',', 1) as image FROM accommodations WHERE id=:id;";
    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':id', $this->id);
    if($query->execute()){
        $data = $query->fetchAll();
    }
    return $data;
}

    function hotel_show_all(){
      $sql = "SELECT * FROM accommodations WHERE type = 'Hotel'";
      $query=$this->db->connect()->prepare($sql);
      if($query->execute()){
          $data = $query->fetchAll();
      }
      return $data;
  }

  function cottage_show_all(){
    $sql = "SELECT * FROM accommodations WHERE type = 'Cottage'";
    $query=$this->db->connect()->prepare($sql);
    if($query->execute()){
        $data = $query->fetchAll();
    }
    return $data;
}

            function acc_delete_to_archived($hotel_id, $user_id) {
            // Check if the hotel exists in the accommodations table
            $sql = "SELECT * FROM accommodations WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $hotel_id);
            $query->execute();
        
            if ($query->rowCount() == 0) {
                // If no hotel was found with the given ID, return false
                return false;
            }

            // Get the hotel data from the accommodations table
            $hotel_data = $query->fetch(PDO::FETCH_ASSOC);
        
            // Insert the hotel data into the acc_archived table
            $sql = "INSERT INTO acc_archived (id, images, type, acc_name, description, capacity, free_entrance, inclusion, price, status, user_who_delete) 
                    VALUES (:id, :images, :type, :acc_name, :description, :capacity, :free_entrance, :inclusion, :price, :status, :user_who_delete)";
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
            $query->bindParam(':user_who_delete', $user_id);
            $query->execute();
        
            // Delete the hotel from the accommodations table
            $sql = "DELETE FROM accommodations WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $hotel_id);
        
            return $query->execute();
        }
        
        function hotel_get_by_id($id) {
            // Check if the hotel exists in the accommodations table
            $sql = "SELECT * FROM accommodations WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
        
            if ($query->rowCount() == 0) {
                // If no hotel was found with the given ID, return false
                return false;
            }
        
            // Return the hotel information as an array
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        

        function delete_image_name($hotelroom_id, $image_name) {
            // Check if the hotel room exists in the database
            $sql = "SELECT * FROM hotelrooms WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $hotelroom_id);
            $query->execute();
        
            if ($query->rowCount() == 0) {
                // If no hotel room was found with the given ID, return false
                return false;
            }
        
            // Update the hotel room record in the database to remove the specified image
            $sql = "UPDATE hotelrooms SET images = REPLACE(images, :images, '') WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $hotelroom_id);
            $query->bindParam(':images', $image_name);
            $result = $query->execute();
        
            return $result;
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