<?php
    require_once 'database.php';

    class Reservation{

        public $booking_number;
        public $customer_id;
        public $customer_fname;
        public $customer_email;
        public $customer_contact;
        public $total_adult_fee;
        public $total_child_fee;
        public $discount;
        public $total;
        public $status;

        protected $db;

        function __construct(){
            $this->db = new Database;
        // Generate random order number with 'AZURA' prefix
            $this->booking_number = 'AZURA' . uniqid();
        }

        function place_reservation($reservationDetails) {

            // Insert reservation information into 'reservations' table
            $sql = "INSERT INTO reservation (booking_number, customer_id, customer_fname, customer_email, customer_contact, total_adult_fee, total_child_fee, total, status)
                    VALUES (:booking_number, :customer_id, :customer_fname, :customer_email, :customer_contact, :total_adult_fee, :total_child_fee, :total, :status)";
        
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':booking_number', $this->booking_number);
            $query->bindParam(':customer_id', $this->customer_id);
            $query->bindParam(':customer_fname', $this->customer_fname);
            $query->bindParam(':customer_email', $this->customer_email);
            $query->bindParam(':customer_contact', $this->customer_contact);
            $query->bindParam(':total_adult_fee', $this->total_adult_fee);
            $query->bindParam(':total_child_fee', $this->total_child_fee);
            $query->bindParam(':total', $this->total);
            $query->bindParam(':status', $this->status);
        
            if ($query->execute()) {
                    // Loop through reservation details and insert into the database
                    foreach ($reservationDetails as $detail) {
                        // Loop through reservation details and insert into the 'reservation_accommodation' table
                    $sql = "INSERT INTO reservation_accommodation (booking_number, accommodation_id, type, start_date, end_date, timeframe_name, time_in, time_out, adult_qty, child_qty, adult_total_efee, child_total_efee, subtotal)
                    VALUES (:booking_number, :accommodation_id, :type, :start_date, :end_date, :timeframe_name, :time_in, :time_out, :adult_qty, :child_qty, :adult_total_efee, :child_total_efee, :subtotal)";
                    $query = $this->db->connect()->prepare($sql);

                    $query->bindParam(':booking_number', $this->booking_number);
                    $query->bindParam(':accommodation_id', $detail['id']);
                    $query->bindParam(':type', $detail['acc_type']);
                    $query->bindParam(':start_date', $detail['checked_in']);
                    $query->bindParam(':end_date', $detail['checked_out']);
                    $query->bindParam(':timeframe_name', $detail['time_frame']);
        
                    // Convert time in and time out to database format
                    $time_in = date("H:i:s", strtotime($detail['timein']));
                    $time_out = date("H:i:s", strtotime($detail['timeout']));
        
                    $query->bindParam(':time_in', $time_in);
                    $query->bindParam(':time_out', $time_out);
                    $query->bindParam(':child_qty', $detail['children']);
                    $query->bindParam(':adult_qty', $detail['adult']);
                    $query->bindParam(':adult_total_efee', $detail['adult_fee']);
                    $query->bindParam(':child_total_efee', $detail['child_fee']);
                    $query->bindParam(':subtotal', $detail['subtotal_fee']);
        
                    if (!$query->execute()) {
                        return false;
                    }
        
                    // Update accommodation status to "unavailable"
                    $sql = "UPDATE accommodations SET status = 'Unavailable' WHERE id = :id";
                    $query = $this->db->connect()->prepare($sql);
                    $query->bindParam(':id', $detail['id']);
                    if (!$query->execute()) {
                        return false;
                    }
                }
                return true;
            } else {
                return false;
            }
        }            
        
    }

?>