<?php
session_start();

if(isset($_GET['villa_id']) && !empty($_GET['villa_id'])){
    $villa_id = $_GET['villa_id'];

    // remove product from cart
    if(isset($_SESSION['booked_amenity'][$villa_id])){
        unset($_SESSION['booked_amenity'][$villa_id]);
    }

    // redirect back to cart page
    header("Location: bookingprocess.php");
    exit();
}
?>