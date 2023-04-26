<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "se_azzurabeach";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function generateUniqueNumber()
{
    // Generate a unique number based on current time in microseconds
    $book_number = 'AZURA' . uniqid();

    // Alternatively, you can generate a unique number using a combination of date, time, and random number
    // $uniqueNumber = 'NUM' . date('YmdHis') . rand(1000, 9999);

    return $book_number;
}

if(isset($_POST['booked'])) {
    $book_number = generateUniqueNumber();
    $checked_in = $_POST['checked_in'];
    $checked_out = $_POST['checked_out'];
    $adult = $_POST['adult'];
    $children = $_POST['children'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
  
    $query = "INSERT INTO reservation (booking_number, customer_fname, customer_mname, customer_lname, customer_email, customer_contact, checkin_date, checkout_date, adult_qty, child_qty) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$book_number, $fname, $mname, $lname, $email, $contact, $checked_in, $checked_out, $adult, $children]);
  
    if($stmt->rowCount() > 0) {   
      echo "<script>alert('Successfully Booked');</script>";
      header('Location: hotel.php');
    } else {
      echo "<script>alert('Not Successfully Booked');</script>";
      header('Location: hotel.php');
    }
}

?>