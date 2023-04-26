<?php
// add_booking.php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "se_azzurabeach";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_POST['submit_booking'])) {
    $acc_id = $_POST['acc_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $checkin = $_POST['check-in'];
    $checkout = $_POST['check-out'];
    $adult_qty = $_POST['adult'];
    $child_qty = $_POST['children'];
   
    // Generate random order number with 'AZURA' prefix
    $booking_number = 'AZURA' . uniqid();

    // Check if customer_id exists
    $customer_query = "SELECT * FROM customer WHERE id=:id";
    $customer_stmt = $conn->prepare($customer_query);
    $customer_stmt->bindParam(':id', $acc_id);
    $customer_stmt->execute();

    if ($customer_stmt->rowCount() > 0) {
        // Customer exists, continue with reservation
        $query = "INSERT INTO reservation (booking_number, customer_id, customer_fname, customer_email, customer_contact, checkin_date, checkout_date, adult_qty, child_qty) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$booking_number, $acc_id, $name, $email, $contact, $checkin, $checkout, $adult_qty, $child_qty]);

        // Collect villa, hotel, and cottage IDs from session bookings
        $villa_ids = [];
        $hotel_ids = [];
        $cottage_ids = [];

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';

        foreach ($_SESSION['bookings'] as $booking) {
            if ($booking['type'] === 'villa') {
                $villa_ids[] = $booking['id'];
            } elseif ($booking['type'] === 'hotel') {
                $hotel_ids[] = $booking['id'];
            } elseif ($booking['type'] === 'cottage') {
                $cottage_ids[] = $booking['id'];
            }
        }

        $villa_id_string = implode(',', $villa_ids);
        $hotel_id_string = implode(',', $hotel_ids);
        $cottage_id_string = implode(',', $cottage_ids);

        $subtotal = $_POST['subtots'];

        // Insert reservation details
        $query = "INSERT INTO reservation_details (booking_number, villa_id, hotel_ids, cottage_id, subtotal) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$booking_number, $villa_id_string, $hotel_id_string, $cottage_id_string, $subtotal]);

        // Update the availability of the booked accommodations
        $status = 'Unavailable';

        foreach ($villa_ids as $villa_id) {
            $query = "UPDATE villas SET status=:status WHERE id=:id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':id', $villa_id);
            $stmt->execute();
            }
            foreach ($hotel_ids as $hotel_id) {
            $query = "UPDATE hotelrooms SET rstatus=:rstatus WHERE id=:id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':rstatus', $status);
            $stmt->bindParam(':id', $hotel_id);
            $stmt->execute();
            }
                foreach ($cottage_ids as $cottage_id) {
        $query = "UPDATE cottage SET status=:status WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $cottage_id);
        $stmt->execute();
    }
    
    // Redirect to a confirmation page or display a success message
    // header('Location: bookingprocess.php');
    echo "Booking was successful. Redirecting to the confirmation page...";
    header('Location: summary.php');
} else {
     // Customer does not exist
     $error_message = "The provided customer ID does not exist. Please provide a valid customer ID.";
     echo $error_message;
}
}
?>



