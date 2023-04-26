<?php
require_once '../classes/reservation.class.php';

session_start();

if (isset($_POST['submit_booking'])) {
    $order_obj = new Reservation();
    $order_obj->customer_id = $_SESSION['logged_id'];
    $order_obj->customer_fname = $_POST['name'];
    $order_obj->customer_email = $_POST['email'];
    $order_obj->customer_contact = $_POST['number'];
    $order_obj->total_adult_fee = $_POST['totaladult_fee'];
    $order_obj->total_child_fee = $_POST['totalchild_fee'];
    $order_obj->total = $_POST['grandtotal'];
    $order_obj->status = 'Pending';


    $reservationDetails = [];

    for ($i = 0; $i < count($_POST['checked-in']); $i++) {
        $detail = [
            'id' => $_POST['acc_id'][$i],
            'acc_type' => $_POST['acc_type'][$i],
            'checked_in' => $_POST['checked-in'][$i],
            'checked_out' => $_POST['checked-out'][$i],
            'time_frame' => $_POST['timeframe'][$i],
            'timein' => $_POST['timein'][$i],
            'timeout' => $_POST['timeout'][$i],
            'children' => $_POST['children'][$i],
            'adult' => $_POST['adult'][$i],
            'adult_fee' => $_POST['adultfee'][$i],
            'child_fee' => $_POST['childfee'][$i],
            'subtotal_fee' => $_POST['subtotalfee'][$i]
        ];

        $reservationDetails[] = $detail;
    }

    if ($order_obj->place_reservation($reservationDetails)) {
        // If the order was placed successfully, unset the cart session and redirect to the order confirmation page
        unset($_SESSION['booked_villas']);
        echo "<script>alert('Success!.');</script>";
        header('Location: availability.php');
    } else {
        // If the order failed, display an error message
        echo "alert('Order failed.')";
    }
}
?>
