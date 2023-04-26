<?php
session_start();

if (isset($_GET['booking_id']) && !empty($_GET['booking_id'])) {
    $product_id = $_GET['booking_id'];

    // Remove the booking with the given ID and type from the session
    if (isset($_SESSION['bookings']) && is_array($_SESSION['bookings'])) {
        foreach ($_SESSION['bookings'] as $key => $booking) {
            if ($booking['id'] == $product_id) {
                unset($_SESSION['bookings'][$key]);
                // Re-index the array after removing an item
                $_SESSION['bookings'] = array_values($_SESSION['bookings']);
                break;
            }
        }
    }

    // Redirect back to the cart page
    header("Location: bookingprocess.php");
    exit();
}
?>