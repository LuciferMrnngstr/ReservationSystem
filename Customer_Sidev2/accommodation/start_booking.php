<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=se_azzurabeach';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

if (isset($_POST['book_now'])) {
    $villa_id = $_POST['villa_id'];
    $villa_type = $_POST['type'];
    
    // Fetch product details by product id and type from both villas and hotelrooms tables
    $sql = "SELECT * FROM (
                SELECT * FROM villas WHERE id = :id AND type = :type
                UNION
                SELECT * FROM hotelrooms WHERE id = :id AND type = :type
            ) AS combined_results;";
            
    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $villa_id);
    $query->bindParam(':type', $villa_type);

    if ($query->execute()) {
        $villa = $query->fetch();
        if ($villa !== false) {
            $type = $villa['type'];
            $villa_type = $villa['vill_type'];
            $villa_capacity = $villa['capacity'];
            $villa_price = $villa['price'];

            $new_booking = array(
                "id" => $villa_id,
                "type" => $type,
                "vill_type" => $villa_type,
                "price" => $villa_price,
                "capacity" => $villa_capacity
            );

            // Check if session bookings exists, otherwise create a new empty array
            if (!isset($_SESSION['bookings']) || !is_array($_SESSION['bookings'])) {
                $_SESSION['bookings'] = array();
                }
                // Add the new booking to the session
        array_push($_SESSION['bookings'], $new_booking);
        header("Location: ../bookingprocess.php");
        exit();
    }
}
}
?>