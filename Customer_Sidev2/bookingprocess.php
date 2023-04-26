<?php

session_start(); // start a session to store the logged-in user's information

    // Initialize the total accommodation fee to 0
    $total_accommodation_fee = 0.00;

    // Check if there are booked villas in the session
    if (!empty($_SESSION['booked_villas'])) {
        // Loop through the booked villas and add up their subtotal
        foreach ($_SESSION['booked_villas'] as $booked_villa) {
            // Add the villa's price to the total accommodation fee
            $total_accommodation_fee += $booked_villa['price'];
        }
    }
    
    require_once '../classes/entrance.class.php';
    // Create a new instance of the Entrance class
    $entrance = new Entrance();
    
    // Call the e_price() function to retrieve the entrance fees
    $entranceFees = $entrance->e_price();
    
    // Pass the entrance fees to the JavaScript code
    echo '<script>var entranceFees = ' . json_encode($entranceFees) . ';</script>';
    
    require_once '../classes/time_frame.class.php';
    // Create a new instance of the Entrance class
    $tframe = new Time_frame();
    
    $time_frames = $tframe->get_time_frames();
    
    echo '<script>var timeFrames = ' . json_encode($time_frames) . ';</script>';
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Check Availability</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


    <!-- AOS RESOURCES TRANSITION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="swiper.css">
    <link rel="stylesheet" href="css/login-reg.css">


    <!-- login and register JS -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/login-register.js" type="text/javascript"></script>



</head>

<body>



    <!-- Navbar Start -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
            <img src="img/logo.png" class="logo">
            <button class="navbar-toggler" href="#offcanvasExample" role="button" data-bs-toggle="offcanvas" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExample">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-light">
                    <div class="navbar-nav m-auto mb-2 mb-lg-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Accommodation</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="accommodation/villa.php" class="dropdown-item">Villas</a>
                                <a href="accommodation/hotel.php" class="dropdown-item">Hotels</a>
                                <a href="accommodation/cottages.php" class="dropdown-item">Cottages</a>
                                <a href="accommodation/amenities.php" class="dropdown-item">Amenities</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Filters</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0 ">
                                <a href="filters/new.php" class="dropdown-item">What's new</a>
                                <a href="filters/service.php" class="dropdown-item">Services</a>
                                <a href="filters/events.php" class="dropdown-item">Events</a>
                                <a href="filters/gallery.php" class="dropdown-item">Gallery</a>
                            </div>
                        </div>
                        <a href="location.php" class="nav-item nav-link">Location</a>
                        <a href="about.php" class="nav-item nav-link">About Us</a>
                    </div>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="container-fluid justify-content-center d-flex">
                <div class="d-none d-lg-flex">
                    <div class="navbar-nav mb-2 mb-lg-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Accommodation</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="accommodation/villa.php" class="dropdown-item">Villas</a>
                                <a href="accommodation/hotel.php" class="dropdown-item">Hotels</a>
                                <a href="accommodation/cottages.php" class="dropdown-item">Cottages</a>
                                <a href="accommodation/amenities.php" class="dropdown-item">Amenities</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Filters</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0 ">
                                <a href="filters/new.php" class="dropdown-item">What's new</a>
                                <a href="filters/service.php" class="dropdown-item">Services</a>
                                <a href="filters/events.php" class="dropdown-item">Events</a>
                                <a href="filters/gallery.php" class="dropdown-item">Gallery</a>
                            </div>
                        </div>
                        <a href="location.php" class="nav-item nav-link">Location</a>
                        <a href="about.php" class="nav-item nav-link">About Us</a>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-flex">
                <!-- When user got login then alternate login and register button to comment -->
                <?php if (isset($_SESSION['fullname'])): ?>
                    <?php 
                    require_once '../classes/customer.class.php';
                    // Create a new instance of the Customer class
                    $custom = new Customer();

                    // Set the id property to the id of the logged-in customer
                    $custom->id = $_SESSION['logged_id'];

                    // Call the show_info() method to retrieve the customer information
                    $custom_info = $custom->show_info();
                    // Use a foreach loop to extract the first name, middle name, and last name of the customer
                    foreach ($custom_info as $customs) {
                        $fname = $customs['firstname'];
                        $mname = $customs['middlename'];
                        $lname = $customs['lastname'];
                        $emailed = $customs['email'];
                        $cpnos = $customs['contact_num'];
                    }
                    ?>
                <!-- when user got login success show this -->
                <div class="btn-group">
                    <button type="button" class="dropdown-toggle btn shadow-none " data-bs-display="static"data-toggle="dropdown">
                        <img src="azzura-img/cv_PHOTO.jpg"class="rounded-circle"height="50"loading="lazy"/> <span class="ml-3"style="color: #DFF6FF; font-size: 17px;"><?php echo $lname.', '.$fname.' ' .$mname ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person-lines-fill me-4"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="dashboard.php"><i class="bi bi-bell-fill me-4"></i>Notification</a></li>
                        <li><a class="dropdown-item" href="mybook.php"><i class="bi bi-card-checklist me-4"></i>My Bookings</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-left me-4"></i>Logout</a></li>
                    </ul>
                </div>
                <?php else: ?>
                <!-- else this show -->
                <div class="log-reg-btn d-flex me-2 ">
                    <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a></div>
                    <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a>
            </div>
            <?php endif; ?>
        </nav>
    </div>
    <!-- Navbar End -->




    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container mt-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="text-white-others-2  text-uppercase">CHECK AVAILABILITY</h3>
                <div class="d-inline-flex text-white">
                    <h6 style="color: #fff; font-size: 17px;">HOME | AVAILABILITY</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   

    <!-- Modal amenities start -->
    <div class="modal fade" id="amenitiesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Available Amenities</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once '../classes/accommodation.class.php';

                    $amet = new Accommodation();
                    //We will now fetch all the records in the array using loop
                    //use as a counter, not required but suggested for the table
                    //loop for each record found in the array
                    foreach ($amet->amet_show_all() as $row){ //start of loop
                    ?>
                        <div class="rounded shadow mb-5">
                            <div class="bg-light p-2 mb-2 rounded">
                                <h4 Class="text-uppercase" style="color: #DFF6FF;"><?php echo $row['acc_name']; ?></h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../Admin-Side/image/photos/<?php echo $row['images']; ?>" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-between border-bottom py-3 px-lg-0 px-2">
                                        <form action="addamenity.php" method="post">
                                            <div class="input-group quantity" style="width: 100px;">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-sm btn-primary btn-minus" >
                                                    <i class="fa fa-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="number" name="ameqty" class="form-control form-control-sm bg-secondary border-0 text-center" min="1" value="1">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-sm btn-primary btn-plus">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <input type="hidden" name="villa_id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="acc_name" value="<?php echo $row['acc_name']; ?>">
                                            <input type="hidden" name="inclusions[]" value="<?php echo $row['inclusion']; ?>">
                                            <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                                            <input type="hidden" name="description" value="<?php echo $row['description']; ?>">
                                            <input type="hidden" name="images" value="<?php echo $row['images']; ?>">
                                            <button type="submit" class="btn btn-primary px-3 rounded px-lg-5">Add</button>
                                        </form>
                                    </div>
                                    <div class="d-flex justify-content-between px-lg-4 ">
                                        <div class="text-dark mt-3 mt-lg-5 p-3 p-lg-0">
                                            <h5>Price</h5>
                                            <h5>Description</h5>
                                            <h5>Inclusion</h5>
                                        </div>
                                        <div class="text-dark mt-3 mt-lg-5 mb-3 p-3 p-lg-0">
                                            <h5><?php echo $row['price']; ?></h5>
                                            <h5><?php echo $row['description']; ?></h5>
                                            <h5><?php echo $row['inclusion']; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal amenities end -->


    <div class="container">
        <div class="bg-white rounded shadow mt-5 p-3 p-lg-4">
            <form action="add_booking.php" method="post">
                <div class="title-header text-center mt-4 bg-light rounded shadow p-lg-4">
                    <h2 class="text-uppercase"style="letter-spacing: 7px; color: #DFF6FF">Reservation Form</h2>
                </div>
                <div class="customer-info mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-header mb-3 px-lg-5 px-0">
                                <h4 class="text-dark">Customer Information</h4>
                            </div>
                            <form action="" class="px-lg-5 px-0">
                                <div class="form-floating mb-3 ">
                                    <input type="text" class="form-control " id="floatingInput" placeholder="Name" value="<?php echo $lname.', '.$fname.' ' .$mname ?>">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3 ">
                                    <input type="email" class="form-control " id="floatingPassword" placeholder="Email" value="<?php echo $emailed ?>">
                                    <label for="floatingPassword">Email</label>
                                </div>
                                <div class="form-floating ">
                                    <input type="number" class="form-control " id="floatingPassword" placeholder="Mobile Number" value="<?php echo $cpnos ?>">
                                    <label for="floatingPassword">Mobile Number</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Accomomodation Start -->
                <div class="mt-4 p-lg-2 mb-3 px-lg-5 px-0">
                    <h4 class="text-dark ">ACCOMMODATION</h4>
                    <hr>
                    <div class="row">
                        <?php 
                        if(!empty($_SESSION['booked_villas'])){

                            require_once '../classes/accommodation.class.php';
                            // Create a new instance of the Accommodation class
                            $accommodation = new Accommodation();

                            // Get the booked villas from the session
                            $booked_villas = $_SESSION['booked_villas'];

                            // Loop through the booked villas and display the information
                            $counter = 0;
                            // Loop through the booked villas and display the information
                            foreach ($booked_villas as $booked_villa) {
                                if (isset($booked_villa['id'])) {
                                // Set the id property to the id of the booked villa
                                $accommodation->id = $booked_villa['id'];
                                }
                                // Call the show_info() method to retrieve the villa information
                                $villa_info = $accommodation->show_acc_details();

                                // Use a foreach loop to extract the first name, middle name, and last name of the customer
                                foreach ($villa_info as $villa) {
                        ?>
                            <div class="col-lg-4">
                                <div class="rounded">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                                        <div class="container-fluid flex-lg-column align-items-stretch">
                                            <h4 class="mt-2"id="filter">Filters</h4>
                                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#fitlerDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="fitlerDropdown">
                                                <div class="border bg-blue p-3 rounded mb-3">
                                                    <input type="number" hidden name="acc_id[]" value="<?php echo $villa['id']; ?>">
                                                    <input type="number" hidden name="acc_type[]" value="<?php echo $villa['type']; ?>">
                                                    <h5 class="mb-3" style="font-size: 15px;">CHECK AVAILABILITY</h5>
                                                    <label class="form-label">Check-in</label>
                                                    <input min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" id="checked-in" name="checked-in[]" type="date" class="form-control shadow-none; mb-3">
                                                    <label class="form-label">Check-out</label>
                                                    <input min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" id="checked-out" name="checked-out[]" type="date" class="form-control shadow-none;">
                                                </div>
                                                <div class="border bg-blue p-3 rounded mb-3">
                                                    <!-- Time Phase -->
                                                    <div class="time">
                                                        <h5 class="mb-3" style="font-size: 15px;">TIME</h5>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <select class="form-control" name="timeframe[]" aria-label="Default select example" id="time-frame_<?php echo $counter; ?>" onchange="populateTimeInputs(<?php echo $counter; ?>)">
                                                                    <option selected>--Select--</option>
                                                                    <?php
                                                                    //We will now fetch all the records in the array using loop
                                                                    //loop for each record found in the array
                                                                    foreach ($time_frames as $time_frame): //start of loop
                                                                    ?>
                                                                    <option value="<?php echo $time_frame['name'] ?>" data-start-time="<?php echo $time_frame['start_time']; ?>" data-end-time="<?php echo $time_frame['end_time']; ?>" data-can-change="<?php echo $time_frame['can_change']; ?>"><?php echo $time_frame['name'] ?> (<?php echo date("h:i A", strtotime($time_frame['start_time'])); ?> - <?php echo date("h:i A", strtotime($time_frame['end_time'])); ?>)</option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="started-time mt-2">
                                                            <div class="row mb-2">
                                                                <div class="col">
                                                                    <label for="">Time-in</label>
                                                                    <select class="form-control" name="timein[]" aria-label="Default select example" id="time-in-<?php echo $counter; ?>">
                                                                        <option selected>--Select--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="">Time-out</label>
                                                                    <select class="form-control" name="timeout[]" aria-label="Default select example" id="time-out-<?php echo $counter; ?>">
                                                                        <option selected>--Select--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border bg-blue p-3 rounded mb-3">
                                                    <h5 class="mb-3" style="font-size: 15px;">GUESTS</h5>
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <label class="form-label">Adults</label>
                                                            <input type="number" class="form-control shadow-none" id="adult_<?php echo $counter; ?>" name="adult[]" oninput="calculateTotal(<?php echo $counter; ?>)" min="0" max="10" value="0"> 
                                                        </div>
                                                        <div>
                                                            <label class="form-label">Children</label>
                                                            <input type="number" class="form-control shadow-none" id="children_<?php echo $counter; ?>" name="children[]" oninput="calculateTotal(<?php echo $counter; ?>)" min="0" max="10" value="0"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary rounded px-lg-0 px-5 font-weight-bold">Update</button>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="">
                                    <div class="d-block justify-content-between mb-3 d-lg-flex bg-light p-3 rounded">
                                        <h5 class="p-2"style="color: #DFF6FF;">List of Expense[s] - [Accommodation]</h5>
                                        <button class="border border-warning font-weight-bold px-lg-3 px-3 rounded">View Details</button>
                                        
                                    </div>
                                    <img src="../Admin-Side/image/photos/<?php echo $villa['image']; ?>" class="w-100 h-50 mb-4">
                                    <div class="table-responsive mb-3">
                                        <table class="table table-light table-borderless table-hover text-center mb-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Inclusion</th>
                                                    <th>Accommodation</th>
                                                    <th>Type</th>
                                                    <th>Price</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle">
                                                <tr>
                                                    <td class="align-middle d-block py-lg-3">
                                                        <?php
                                                        $inclusions = explode(',', $villa['inclusion']);
                                                        foreach ($inclusions as $villa['inclusion']) {
                                                            echo "<p class='text-dark'>". $villa['inclusion'] ."</p>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="align-middle"><?php echo $villa['type']; ?></td>
                                                    <td class="align-middle"><?php echo $villa['acc_name']; ?></td>
                                                    <td class="align-middle"><?php echo $villa['price']; ?></td>
                                                    <td class="align-middle"><a href="removebook.php?villa_id=<?php echo $villa['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <h6><?php echo $villa['acc_name']; ?> Price: <span class="ml-3" id="price_<?php echo $counter; ?>"><?php echo $villa['price'];?></span></h6>
                                    <h6>Adult Entrance Fee:<span class="ml-3" id="adult-fee_<?php echo $counter; ?>"> 0.00</span></h6>
                                    <h6>Child Entrance Fee:<span class="ml-3" id="child-fee_<?php echo $counter; ?>"> 0.00</span></h6>
                                    <h4 class="mb-5">Sub-total: <span class="ml-3" id="total-fee_<?php echo $counter; ?>"> <?php echo $villa['price'];?></h4>
                                    <input type="text" hidden name="adultfee[]" id="adult-fees_<?php echo $counter; ?>" value="">
                                    <input type="text" hidden name="childfee[]" id="child-fees_<?php echo $counter; ?>" value="">
                                    <input type="text" hidden name="subtotalfee[]" id="total-fees_<?php echo $counter; ?>" value="">
                                </div>
                            </div>
                        <?php } $counter++;} } ?>
                        <script>
                            // Add this line after the calculateTotal function
                            updateTotalFees();
                        </script>
                    </div>
                </div>
                <!-- Accommodation End -->


                <!-- Amenities Start -->
                <div class=" p-lg-2 mb-2 px-lg-5 px-0">
                    <h4 class="text-dark ">Amenities</h4>
                    <hr>
                    <div class="text-center mb-3 bg-light p-3 rounded">
                        <h5 class="p-2"style="color: #DFF6FF;">List of Expense[s] - [Amenities]</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 table-responsive ">
                            <table class="table table-light table-borderless table-hover text-center mb-3 mb-lg-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Amenities</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <?php 
                                    if(!empty($_SESSION['booked_amenity'])){

                                        require_once '../classes/accommodation.class.php';
                                        // Create a new instance of the Accommodation class
                                        $accommodation = new Accommodation();

                                        // Get the booked villas from the session
                                        $booked_amenitys = $_SESSION['booked_amenity'];

                                        $acounter = 0;
                                        // Loop through the booked villas and display the information
                                        foreach ($booked_amenitys as $booked_amenity) {
                                            if (isset($booked_amenity['id'])) {
                                            // Set the id property to the id of the booked villa
                                            $accommodation->id = $booked_amenity['id'];
                                            }
                                            // Call the show_info() method to retrieve the villa information
                                            $amenity_info = $accommodation->show_acc_details();

                                            // Use a foreach loop to extract the first name, middle name, and last name of the customer
                                            foreach ($amenity_info as $amenity) {
                                    ?>
                                        <tr>
                                            <input type="number" hidden name="aacc_id[]" value="<?php echo $amenity['id']; ?>">
                                            <input type="number" hidden name="aacc_type[]" value="<?php echo $amenity['type']; ?>">
                                            <input type="hidden" name="achecked-in[]" value="2023-04-02">
                                            <input type="hidden" name="achecked-out[]" value="2023-04-02">
                                            <input type="hidden" name="atimeframe[]" value="same">
                                            <input type="hidden" name="atimein[]" value="10:00">
                                            <input type="hidden" name="atimeout[]" value="11:00">
                                            <input type="hidden" name="aadult[]" value="0">
                                            <input type="hidden" name="achildren[]" value="0">
                                            <input type="hidden" name="aadultfee[]" value="0">
                                            <input type="hidden" name="achildfee[]" value="0">
                                            <td class="align-middle"><img src="../Admin-Side/image/photos/<?php echo $amenity['images']; ?>" alt="" style="width: 80px; height: 80px;"><?php echo $amenity['acc_name']; ?></td>
                                            <td class="align-middle" id="aprice_<?php echo $acounter; ?>"><?php echo $amenity['price']; ?></td>
                                            <td class="align-middle">
                                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-primary btn-minus" >
                                                        <i class="fa fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center qty-input" id="qty_<?php echo $acounter; ?>" name="amenity[]" oninput="calculateTotaled()" min="0" max="10" value="<?php echo $booked_amenity['qty']; ?>">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-primary btn-plus">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle" id="amenity-fee_<?php echo $acounter; ?>">0</td>
                                            <td class="align-middle"><a href="removeamenity.php?villa_id=<?php echo $amenity['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    <?php } $acounter++;} } ?>
                                    <script>
                                        // Call the calculateTotaled function for each booked amenity when the page loads
                                        calculateTotaled(<?php echo $acounter-1; ?>);
                                    </script>

                                </tbody>
                            </table>
                            <script>
                                // Call the calculateTotaled function for each booked amenity when the page loads
                                <?php 
                                if(!empty($_SESSION['booked_amenity'])){
                                    $amenityCounter = 0;
                                    foreach ($_SESSION['booked_amenity'] as $booked_amenity) {
                                        $amenity_id = 'amenity-' . $amenityCounter;
                                ?>
                                    calculateTotaled(<?php echo $amenityCounter; ?>);
                                <?php 
                                        $amenityCounter++;
                                    }
                                }
                                ?>
                            </script>
                        </div>
                        <div class="col-lg-4">
                            <div class="bg-light p-2 mb-2 rounded mt-3">
                                <h5 class="text-center"style="color: #DFF6FF;">Amenities Summary</h5>
                            </div>
                            <div class="shadow rounded p-2">
                                <div class="bg-white p-30 mb-5">
                                    <div class="border-bottom pb-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h6>Number of amenities</h6>
                                            <h6 id="numAmenities">0</h6>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-weight-medium">Subtotal</h6>
                                            <h6 class="font-weight-medium" id="subtotal">0.00</h6>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="d-flex justify-content-between mt-2">
                                            <h5>Total</h5>
                                            <h5 id="totalCost">0.00</h5>
                                        </div>
                                        <button class="border border-warning btn-block font-weight-bold my-3 py-3 rounded">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- if aminities is not displayed yet then this comment -->

                    <!-- <div class="text-center">
                        <p>There's no amenities added yet</p>
                    </div> -->
                    <hr>
                </div>
                <!-- Amenities End -->


                <!-- Button for accommodation and Amenities  start -->
                <div class=" p-lg-2 mb-3 px-lg-5 px-0">
                    <p>Do you want to add more Amenities or Accommodation?</p>
                    <div class="d-lg-flex d-block ">
                        <a href="check.php" class="btn btn-primary rounded me-0 me-lg-3 px-lg-3 px-0 p-2 mb-3 mb-lg-0 font-weight-bold">Add accommodation</a>
                        <button class="btn btn-primary rounded px-lg-5 px-2 p-2 font-weight-bold" type="button" data-bs-toggle="modal" data-bs-target="#amenitiesModal">Add amenities</button>
                    </div>
                </div>
                <!-- Button for accommodation and Amenities  end -->


                <!-- total Start -->
                <div class="p-lg-2 mb-3 px-lg-5 px-0">
                    <div class="shadow rounded bg-white mt-4 ">
                        <div class="bg-light p-3 rounded">
                            <h4 class="text-uppercase text-start " style="color: #DFF6FF">TOTAL Expenses</h4>
                        </div>
                        <div class="d-flex justify-content-center border-bottom mt-3 p-lg-2 p-0">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="total-name">
                                        <p class=" text-dark">Accommodation Fee</p>
                                        <p class=" text-dark">Amenities Fee</p>
                                        <p class=" text-dark">Adult Entrance Fee</p>
                                        <p class=" text-dark">Children Entrance Fee</p>
                                        <p class=" text-dark ">Discount Fee</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="total-amount">
                                        <p class=" text-dark"><?php echo $total_accommodation_fee; ?>.00</p>
                                        <p class=" text-dark" id="totalCosts">0.00</p>
                                        <p class=" text-dark" id="total-adult-fee">0.00</p>
                                        <p class=" text-dark" id="total-child-fee">0.00</p>
                                        <p class=" text-dark ">0.00</p>
                                        <input type="text" hidden name="totaladult_fee" id="total-adult-fees" value="">
                                        <input type="text" hidden name="totalchild_fee" id="total-child-fees" value="">
                                        <input type="text" hidden name="totalamenity_fee" id="total-amenity-fees" value="">
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-2 ">
                            <div class="row">
                                <div class="col-auto">
                                    <h4>Grand-Total</h4>
                                </div>
                                <div class="col mb-3">
                                    <h5><span class="ml-5" id="grand-total"> <?php echo $total_accommodation_fee; ?>.00</span></h5>
                                    <input type="text" hidden name="grandtotal" id="grand-totals" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- total End -->

                <!-- Button for accommodation and Amenities  start -->
                <div class=" p-lg-2 mb-3 px-lg-5 px-0">
                    <div class="d-lg-flex justify-content-center text-center">
                        <button class="border border-warning rounded me-0 me-lg-3 px-lg-5 px-0 p-2 mb-3 mb-lg-0 font-weight-bold">Cancel</button>
                        <input type="submit" name="submit_booking" class="btn btn-primary rounded px-lg-5 p-2 font-weight-bold" value="Submit">
                    </div>
                </div>
                <!-- Button for accommodation and Amenities  end -->
            </form>
        </div>
    </div>







    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-6 col-md-6 mb-4">
                   <h1 class="footer-text">GET IN TOUCH</h1>
                <p class="content-text-title">Azzura Hotel & Beach Resort</p>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="text-white-others-1 text-uppercase mb-4" style="letter-spacing: 5px; font-size: 30px;">Contact Us</h5>
                <p class="text-white-others"><i class="fa fa-map-marker-alt mr-2"></i>Barangay Bolong, Zamboanga City Mindanao 7000 Philippines</p>
                <p class="text-white-others"><i class="fa fa-phone-alt mr-2"></i>0995 569 2857</p>
                <p class="text-white-others"><i class="fa fa-envelope mr-2"></i>Azzurabeachresort@gmail.com</p>
        </div>
        <h6 class="text-white-others-1 text-uppercase mb-4" style="letter-spacing: 5px; font-size: 30px; margin-left: 13px;">Others</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-0 ml-3" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-0 ml-3" href="#"><i class="fab fa-google"></i></a>
                </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center mb-3 mb-md-10">
                <p class="text-white-others">Copyright &copy; 2022 <a href="#"class="text-white-others-link">Azzura Beach Resort</a>.
                    <p class="text-white-others">All Rights Reserved. Powered by ROTCorp.
                        <a href="#" class="text-white-others">Terms and Condition.</a>
                    </p>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>



<!-- add button changer -->
<script>
    // Get all the "Add" buttons
    const addButtons = document.querySelectorAll('.button-add button');

    // Loop through each "Add" button
    addButtons.forEach(addButton => {
    // Add a click event listener to the button
    addButton.addEventListener('click', () => {
        // Check the current label of the button
        if (addButton.innerText === 'Add') {
        // If the label is "Add", change it to "Cancel"
        addButton.innerText = 'Cancel';
        } else {
        // If the label is not "Add", change it back to "Add"
        addButton.innerText = 'Add';
        }
    });
    });
</script>

<script>
    function calculateTotal(counter) {
    // Get the values entered for adults and children
    var adultValue = document.getElementById("adult_" + counter).value;
    var childValue = document.getElementById("children_" + counter).value;
    var accpriceValue = parseFloat(document.getElementById("price_" + counter).innerHTML);

    // Get the selected time frame
    var timeFrameSelect = document.getElementById("time-frame_" + counter);
    var selectedTimeFrame = timeFrameSelect.options[timeFrameSelect.selectedIndex].value;

    // Find the entrance fees for the selected time frame
    var adultFee = 0;
    var childFee = 0;
    for (var i = 0; i < entranceFees.length; i++) {
        if (entranceFees[i].entrance_type_name == 'Adult' && entranceFees[i].time_frame_name == selectedTimeFrame) {
            adultFee = parseFloat(entranceFees[i].e_fee);
        } else if (entranceFees[i].entrance_type_name == 'Child' && entranceFees[i].time_frame_name == selectedTimeFrame) {
            childFee = parseFloat(entranceFees[i].e_fee);
        }
    }

    // Calculate the total fees
    var adultTotal = adultValue * adultFee;
    var childTotal = childValue * childFee;
    var totalFees = adultTotal + childTotal + accpriceValue;

    // Display the total fees in the HTML
    document.getElementById("adult-fee_" + counter).innerHTML = adultTotal.toFixed(2);
    document.getElementById("child-fee_" + counter).innerHTML = childTotal.toFixed(2);
    document.getElementById("total-fee_" + counter).innerHTML = totalFees.toFixed(2);

    // Display the total fees in the HTML
    document.getElementById("adult-fees_" + counter).value = adultTotal.toFixed(2);
    document.getElementById("child-fees_" + counter).value = childTotal.toFixed(2);
    document.getElementById("total-fees_" + counter).value = totalFees.toFixed(2);

    // Call the function to update the total adult and child entrance fees
    updateTotalFees();
    }

    function updateTotalFees() {

    var totalAdultFee = 0;
    var totalChildFee = 0;
    for (var i = 0; i < <?php echo $counter; ?>; i++) {
        var adultFee = parseFloat(document.getElementById("adult-fee_" + i).innerHTML);
        var childFee = parseFloat(document.getElementById("child-fee_" + i).innerHTML);

        totalAdultFee += adultFee;
        totalChildFee += childFee;
    }

    document.getElementById("total-adult-fee").innerHTML = totalAdultFee.toFixed(2);
    document.getElementById("total-child-fee").innerHTML = totalChildFee.toFixed(2);
    document.getElementById("total-adult-fees").value = totalAdultFee.toFixed(2);
    document.getElementById("total-child-fees").value = totalChildFee.toFixed(2);
    
    // Get the accommodation fee total from PHP
    var accommodationFeeTotal = parseFloat('<?php echo $total_accommodation_fee; ?>');
    var amenityFeeTotal = parseFloat(document.getElementById("total-amenity-fees").value);
    // Calculate the grand total
    var grandTotal = accommodationFeeTotal + totalAdultFee + totalChildFee + amenityFeeTotal;

    // Update the grand total field in the HTML
    document.getElementById("grand-total").innerHTML = grandTotal.toFixed(2);
    document.getElementById("grand-totals").value = grandTotal.toFixed(2);
    }
    
    // The loop should go through the total number of rows in your form
    // I'm assuming you have a PHP variable named $counter that holds the number of rows
    for (var i = 0; i < <?php echo $counter; ?>; i++) {
        // Add event listener to each time-frame select element
        document.getElementById("time-frame_" + i).addEventListener('change', function (event) {
            // Get the counter value from the element's ID
            var counterValue = event.target.id.split("_")[1];
            onTimeFrameChange(counterValue);
        });
    }

    function onTimeFrameChange(counter) {
        // If there are values entered for adults or children, call the calculateTotal function
        var adultValue = document.getElementById("adult_" + counter).value;
        var childValue = document.getElementById("children_" + counter).value;

        if (adultValue || childValue) {
            calculateTotal(counter);
        }

        // Update the total fees and grand total
        updateTotalFees();
    }
</script>

<script>
    function calculateTotaled() {
    var amenities = document.getElementsByName('amenity[]');
    for (var i = 0; i < amenities.length; i++) {
        var id = i;
        var price = parseInt(document.getElementById('aprice_' + id).innerHTML);
        var qty = parseInt(document.getElementById('qty_' + id).value);
        var total = price * qty;
        document.getElementById('amenity-fee_' + id).innerHTML = total;
    }
    updateTotals();
    }

    // Function to update the totals
    function updateTotals() {
        // Calculate the subtotal of all amenities
        var subtotal = 0;
        var numAmenities = 0;
        var fee = 0;
        for (var i = 0; i < <?php echo $acounter; ?>; i++) {
            var fee = parseInt(document.getElementById('amenity-fee_' + i).innerHTML);
            if (!isNaN(fee)) {
                subtotal += fee;
                numAmenities++;
            }
        }
        // Display the subtotal and number of amenities
        document.getElementById('subtotal').innerHTML = subtotal.toFixed(2);
        document.getElementById('numAmenities').innerHTML = numAmenities;

        // Calculate the total cost (subtotal plus tax and other fees if applicable)
        var totalCost = subtotal;
        // Check if the subtotal is NaN
        if (isNaN(totalCost)) {
            totalCost = 0;
        }
        // Display the total cost
        document.getElementById('totalCost').innerHTML = totalCost.toFixed(2);
        document.getElementById('totalCosts').innerHTML = totalCost.toFixed(2);
        document.getElementById('total-amenity-fees').value = totalCost.toFixed(2);
    }

    // Call the calculateTotaled function for the first added amenity when the page loads
    calculateTotaled(0);

    // Call the updateTotals function when the page loads to calculate the totals initially
    window.onload = function() {
        updateTotals();
    };
</script>






<script>
    function populateTimeInputs(index) {
    const dayNightSelect = document.getElementById(`time-frame_${index}`);
    const selectedOption = dayNightSelect.options[dayNightSelect.selectedIndex];
    const startTime = selectedOption.getAttribute('data-start-time');
    const endTime = selectedOption.getAttribute('data-end-time');
    const canChange = selectedOption.getAttribute('data-can-change');

    const timeInSelect = document.getElementById(`time-in-${index}`);
    const timeOutSelect = document.getElementById(`time-out-${index}`);

    timeInSelect.innerHTML = '<option selected>--Select--</option>';
    timeOutSelect.innerHTML = '<option selected>--Select--</option>';
    timeInSelect.disabled = false;
    timeOutSelect.disabled = false;

    if (!startTime || !endTime) {
        return;
    }

    if (canChange === '1') {
        let currentTime = new Date(`1970-01-01 ${startTime}`);
        let end = new Date(`1970-01-01 ${endTime}`);
        const gapInMinutes = 60; // Change this value if you want a different gap

        // Adjust the end time if it's on the next day
        if (currentTime > end) {
        end.setDate(end.getDate() + 1);
        }

        while (currentTime <= end) {
        let hours = currentTime.getHours();
        let minutes = currentTime.getMinutes();
        let period = 'AM';
        if (hours >= 12) {
            period = 'PM';
            if (hours > 12) {
            hours -= 12;
            }
        }
        if (hours === 0) {
            hours = 12;
        }
        minutes = String(minutes).padStart(2, '0');
        const optionValue = `${hours}:${minutes} ${period}`;
        const optionHTML = `<option value="${optionValue}">${optionValue}</option>`;
        timeInSelect.innerHTML += optionHTML;
        timeOutSelect.innerHTML += optionHTML;
        currentTime.setMinutes(currentTime.getMinutes() + gapInMinutes);
        }
    } else {
        let startHours = startTime.substring(0, 2);
        let startMinutes = startTime.substring(3, 5);
        let startPeriod = 'AM';
        let endHours = endTime.substring(0, 2);
        let endMinutes = endTime.substring(3, 5);
        let endPeriod = 'AM';
        if (startHours >= 12) {
        startPeriod = 'PM';
        if (startHours > 12) {
            startHours -= 12;
        }
        }
        if (startHours === 0) {
        startHours = 12;
        }
        if (endHours >= 12) {
        endPeriod = 'PM';
        if (endHours > 12) {
            endHours -= 12;
        }
        }
        if (endHours === 0) {
        endHours = 12;
        }
        startMinutes = String(startMinutes).padStart(2, '0');
        endMinutes = String(endMinutes).padStart(2, '0');
        const startTimeFormatted = `${startHours}:${startMinutes} ${startPeriod}`;
        const endTimeFormatted = `${endHours}:${endMinutes} ${endPeriod}`;
        timeInSelect.innerHTML += `<option value="${startTime}" selected>${startTimeFormatted}</option>`;
        timeOutSelect.innerHTML += `<option value="${endTime}" selected>${endTimeFormatted}</option>`;
        timeInSelect.disabled = true;
        timeOutSelect.disabled = true;
    }
    }
</script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <!-- bootstrap bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>








    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <!-- AOS Javascript-->
    <script> AOS.init(); </script>

</body>
</html>
