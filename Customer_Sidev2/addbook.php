<?php
session_start();

// Check if the villa ID was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["villa_id"])) {
    $villa_id = $_POST["villa_id"];
    $acc_name = $_POST["acc_name"];
    $inclusions = $_POST["inclusions"];
    $price = $_POST["price"];
    $type = $_POST["type"];

    // Check if the villa is already booked
    if (!isset($_SESSION["booked_villas"][$villa_id])) {
        // If the villa is not booked, mark it as booked and store the booked villa details in the session variable
        $_SESSION["booked_villas"][$villa_id] = array(
            "id" => $villa_id,
            "acc_name" => $acc_name,
            "inclusions" => $inclusions,
            "price" => $price,
            "type" => $type
        );
    }
}

// Redirect the user back to the villa page
header("Location: bookingprocess.php");
exit();

?>
