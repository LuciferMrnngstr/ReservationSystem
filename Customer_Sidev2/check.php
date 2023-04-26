<?php

session_start(); // start a session to store the logged-in user's information

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


    <!-- modal login and register start -->
    <div class="modal fade login" id="loginModal">
        <div class="modal-dialog login animated modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">User Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="social text-center">
                    <div class="user">
                        <i class="bi bi-person-circle user"></i>
                    </div>
                    <div class="header-text-login">
                        <h3 class="modal-header1">Login to your Account</h3> 
                        <p class="modal-header2">Sign-in using your social account</p>
                        <button class="btn btn-secondary rounded"><i class="fab fa-google"> | Continue with Google</i></button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="division">
                                <div class="line l"></div>
                                    <span>or</span>
                                <div class="line r"></div>
                            </div>
                            <div class="error"></div>
                            <div class="form loginBox">
                                <form method="post" action="logincode.php" accept-charset="UTF-8">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control " id="floatingInput" placeholder="Username" name="username">
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control " id="floatingPassword" placeholder="Password" name="password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                        <input class="btn btn-default btn-login rounded" type="submit" name="login" value="Login">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="content registerBox" style="display:none;">
                            <div class="form">
                                <form method="" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                                                <label for="floatingInput">First Name</label>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                                                <label for="floatingInput">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name">
                                                <label for="floatingInput">Middle Name</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="date" class="form-control" id="floatingInput" placeholder="Birth Date">
                                                <label for="floatingInput">Birth Date</label>
                                            </div>
                                
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Suffix">
                                                <label for="floatingInput">Suffix</label>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="Age">
                                                <label for="floatingInput">Age</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Sex</label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">Male</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="Mobile Number">
                                                <label for="floatingInput">Mobile Number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                                                <label for="floatingInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Username">
                                                <label for="floatingInput">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="password" class="form-control" id="floatingInput" placeholder="Password">
                                                <label for="floatingInput">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-floating mb-4">
                                                <input type="password" class="form-control" id="floatingInput" placeholder="Confirm Password">
                                                <label for="floatingInput">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I agree to the terms and conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input class="btn btn-default btn-register rounded" type="button" value="Create account" name="commit">
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="forgot login-footer">
                        <span>Dont have account yet
                                <a href="javascript: showRegisterForm();">create an account</a>
                        ?</span>
                        <div class="mt-3">
                            <span>forgot
                                    <a href="#">Password</a>
                            ?</span>
                        </div>
                    </div>
                    <div class="forgot register-footer" style="display:none">
                            <span>Already have an account?</span>
                            <a href="javascript: showLoginForm();">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal login and registration end -->


       


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 px-lg-2 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2"id="filter">Filters</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#fitlerDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="fitlerDropdown">
                            <div class="border bg-blue p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 15px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none; mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none;">
                            </div>
                            <div class="border bg-blue p-3 rounded mb-3">
                                <!-- Time Phase -->
                                <div class="time">
                                    <h5 class="mb-3" style="font-size: 15px;">TIME</h5>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <select class="form-control " aria-label="Default select example">
                                                <option selected>--Select--</option>
                                                <option value="day">Day (8:00 AM - 5:00 PM)</option>
                                                <option value="night">Night (6:00 PM - 7:00 AM)</option>
                                                <option value="day-night">Day/Night (8:00 AM - 7:00 AM)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="started-time mt-2">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label for="">Time-in</label>
                                                <select class="form-control " aria-label="Default select example">
                                                    <option selected>--Select--</option>
                                                    <option value="day">8:00 AM</option>
                                                    <option value="night">8:00 AM</option>
                                                    <option value="day-night">8:00 AM</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Time-out</label>
                                                <select class="form-control " aria-label="Default select example">
                                                    <option selected>--Select--</option>
                                                    <option value="day">6 Max</option>
                                                    <option value="night">15 Max</option>
                                                    <option value="day-night">20 Max</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border bg-blue p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 15px;">ACCOMMODATION</h5>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="btn  shadow-none rounded" data-bs-toggle="collapse" href="#collapsevilla" role="button" aria-expanded="false" aria-controls="collapseExample" id="villa-item">
                                                VILLA
                                            </a>
                                            <div class="collapse" id="collapsevilla">
                                                <div class="card card-body mt-2 border-none">
                                                    <label for="">Room Capacity</label>
                                                    <select class="form-control " aria-label="Default select example">
                                                        <option selected>--Select--</option>
                                                        <option value="day">15 Max</option>
                                                        <option value="night">18 Max</option>
                                                        <option value="day-night">20 Max</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a class="btn  shadow-none rounded" data-bs-toggle="collapse" href="#collapsehotel" role="button" aria-expanded="false" aria-controls="collapseExample" id="hotel-item">
                                                HOTEL
                                            </a>
                                            <div class="collapse" id="collapsehotel">
                                                <div class="card card-body mt-2 border-none">
                                                    <label for="">Room Capacity</label>
                                                    <select class="form-control " aria-label="Default select example">
                                                        <option selected>--Select--</option>
                                                        <option value="day">8:00 AM</option>
                                                        <option value="night">8:00 AM</option>
                                                        <option value="day-night">8:00 AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a class="btn  shadow-none rounded" data-bs-toggle="collapse" href="#collapsecottages" role="button" aria-expanded="false" aria-controls="collapseExample" id="cottage-item">
                                                COTTAGES
                                            </a>
                                            <div class="collapse" id="collapsecottages">
                                                <div class="card card-body mt-2 border-none">
                                                    <label for="">Capacity</label>
                                                    <select class="form-control " aria-label="Default select example">
                                                        <option selected>--Select--</option>
                                                        <option value="day">15 Max</option>
                                                        <option value="night">18 Max</option>
                                                        <option value="day-night">20 Max</option>
                                                        <option value="day-night">30 Max</option>
                                                        <option value="day-night">50 Max</option>
                                                        <option value="day-night">25 Max</option>
                                                        <option value="day-night">16 Max</option>
                                                        <option value="day-night">10 Max</option>
                                                        <option value="day-night">8 Max</option>
                                                        <option value="day-night">17 Max</option>
                                                    </select>
                                                </div>
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
                                        <input type="number" class="form-control shadow-none"> 
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Left-side content -->
            <div class="col-lg-9">
                <?php
                require_once '../classes/accommodation.class.php';

                $villa = new Accommodation();

                //We will now fetch all the records in the array using loop
                //loop for each record found in the array
                $i = 2;
                foreach ($villa->villa_show_all() as $row){ //start of loop
                    $images = explode(',', $row['images']); // get the list of image file names from the "images" column
                ?>
                <div class="content-item bg-white shadow rounded mb-5"id="villa-item">
                    <div class="title-header">
                        <div class="row">
                            <div class="col">
                                <div class="section_title">
                                    <hr class="title_line">    
                                        <h5 style="color: #FAF8F1" class="text-uppercase ">VILLA | <?php echo $row['acc_name'];?></h5> 
                                    <hr class="title_line"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="swiper-container">
                                <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper" id="swiper"
                                    thumbs-swiper=".mySwiper2" space-between="10" navigation="true" loop="true">
                                    <?php 
                                        $countimage = 1;
                                        foreach ($images as $image) {
                                        if ($countimage >= 4) {
                                            break; // stop the loop if 4 images have already been displayed
                                        }
                                    ?>
                                        <swiper-slide>
                                            <img src="../Admin-Side/image/photos/<?php echo $image; ?>"/>
                                        </swiper-slide>
                                    <?php 
                                        $countimage++;
                                        }
                                    ?>
                                </swiper-container>
                                <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
                                    watch-slides-progress="true">
                                    <?php 
                                        $countimage = 1;
                                        foreach ($images as $image) {
                                        if ($countimage >= 4) {
                                            break; // stop the loop if 4 images have already been displayed
                                        }
                                    ?>
                                        <swiper-slide>
                                            <img src="../Admin-Side/image/photos/<?php echo $image; ?>"/>
                                        </swiper-slide>
                                    <?php 
                                        $countimage++;
                                        }
                                    ?>
                                </swiper-container>
                            </div>
                            <div class="row mt-5 d-flex justify-content-between me-3 me-lg-2 text-center mb-2">
                                <div class="col mb-5">
                                    <form method="post" action="addbook.php">
                                        <input type="hidden" name="villa_id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="acc_name" value="<?php echo $row['acc_name']; ?>">
                                        <input type="hidden" name="inclusions[]" value="<?php echo $row['inclusion']; ?>">
                                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                                        <input type="hidden" name="type" value="<?php echo $row['type']; ?>">
                                        <button type="submit" class="btn btn-primary book-now mb-2 mb-lg-0">Book Now</button>
                                        <button class="btn btn-primary book-now ">View more Details</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-lg-0">
                            <!-- Inclusion Content Box  -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4 px-3 px-lg-0" style="letter-spacing: 5px;">Inclusion</h4>
                                <div class="bg-white">
                                    <ul class="list-inline m-0 px-3 px-lg-0">
                                        <?php
                                        $inclusions = explode(',', $row['inclusion']);
                                            foreach ($inclusions as $row['inclusion']) {
                                            echo "<li><p class='text-dark'><i class='fa fa-angle-right text-primary mr-2'></i>". $row['inclusion'] ."</p></li>";
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- Description Content Box -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4 px-3 px-lg-0" style="letter-spacing: 5px;">Description</h4>
                                <div class="bg-white">
                                    <ul class="list-inline m-0 px-3 px-lg-0">
                                        <?php
                                            $descriptions = explode(', ', $row['description']);
                                            foreach ($descriptions as $row['description']) {
                                            echo "<li><p class='text-dark'><i class='fa fa-angle-right text-primary mr-2'></i>". $row['description'] ."</p></li>";
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <?php $i++;} ?>


                <?php
                require_once '../classes/accommodation.class.php';

                $hotel = new Accommodation();

                //We will now fetch all the records in the array using loop
                //loop for each record found in the array
                $o = 2;
                foreach ($hotel->hotel_show_all() as $row){ //start of loop
                    $images = explode(',', $row['images']); // get the list of image file names from the "images" column
                ?>
                <!-- Second item -->
                <div class="content-item bg-white shadow rounded mb-5" id="hotel-item">
                    <div class="title-header">
                        <div class="row">
                            <div class="col">
                                <div class="section_title">
                                    <hr class="title_line">    
                                        <h5 style="color: #FAF8F1" class="text-uppercase ">VILLA | MEDIUM ROOM</h5> 
                                    <hr class="title_line"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="swiper-container">
                                <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper" id="swiper"
                                    thumbs-swiper=".mySwiper2" space-between="10" navigation="true" loop="true">
                                    <?php 
                                        $countimage = 1;
                                        foreach ($images as $image) {
                                        if ($countimage >= 4) {
                                            break; // stop the loop if 4 images have already been displayed
                                        }
                                    ?>
                                        <swiper-slide>
                                            <img src="../Admin-Side/image/photos/<?php echo $image; ?>"/>
                                        </swiper-slide>
                                    <?php 
                                        $countimage++;
                                        }
                                    ?>
                                </swiper-container>
                                <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
                                    watch-slides-progress="true">
                                    <?php 
                                        $countimage = 0;
                                        foreach ($images as $image) {
                                        if ($countimage >= 4) {
                                            break; // stop the loop if 4 images have already been displayed
                                        }
                                    ?>
                                        <swiper-slide>
                                            <img src="../Admin-Side/image/photos/<?php echo $image; ?>"/>
                                        </swiper-slide>
                                    <?php 
                                        $countimage++;
                                        }
                                    ?>
                                </swiper-container>
                            </div>
                            <div class="row mt-5 d-flex justify-content-between me-3 me-lg-2 text-center mb-2">
                                <div class="col mb-5">
                                    <form method="post" action="addbook.php">
                                        <input type="hidden" name="villa_id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="acc_name" value="<?php echo $row['acc_name']; ?>">
                                        <input type="hidden" name="inclusions[]" value="<?php echo $row['inclusion']; ?>">
                                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                                        <input type="hidden" name="type" value="<?php echo $row['type']; ?>">
                                        <button type="submit" class="btn btn-primary book-now mb-2 mb-lg-0">Book Now</button>
                                        <button class="btn btn-primary book-now ">View more Details</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-lg-0">
                            <!-- Inclusion Content Box  -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4 px-3 px-lg-0" style="letter-spacing: 5px;">Inclusion</h4>
                                <div class="bg-white">
                                    <ul class="list-inline m-0 px-3 px-lg-0">
                                        <?php
                                        $inclusions = explode(',', $row['inclusion']);
                                            foreach ($inclusions as $row['inclusion']) {
                                            echo "<li><p class='text-dark'><i class='fa fa-angle-right text-primary mr-2'></i>". $row['inclusion'] ."</p></li>";
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- Description Content Box -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4 px-3 px-lg-0" style="letter-spacing: 5px;">Description</h4>
                                <div class="bg-white">
                                    <ul class="list-inline m-0 px-3 px-lg-0">
                                        <?php
                                            $descriptions = explode(', ', $row['description']);
                                            foreach ($descriptions as $row['description']) {
                                            echo "<li><p class='text-dark'><i class='fa fa-angle-right text-primary mr-2'></i>". $row['description'] ."</p></li>";
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php $o++;} ?>

                <!-- Third item -->
                <div class="content-item bg-white shadow rounded mb-5" id="cottage-item">
                    <div class="title-header">
                        <div class="row">
                            <div class="col">
                                <div class="section_title">
                                    <hr class="title_line">    
                                        <h5 style="color: #FAF8F1" class="text-uppercase ">VILLA | MEDIUM ROOM</h5> 
                                    <hr class="title_line"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="swiper-container">
                                <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper" id="swiper"
                                    thumbs-swiper=".mySwiper2" space-between="10" navigation="true" loop="true">
                                    <swiper-slide>
                                        <img src="azzura-img/villa1-pic1.png"/>
                                    </swiper-slide>
                                    <swiper-slide>
                                        <img src="azzura-img/villa1-pic2.png" />
                                    </swiper-slide>
                                    <swiper-slide>
                                        <img src="azzura-img/villa1-pic3.jpg" />
                                    </swiper-slide>
                                    <swiper-slide>
                                        <img src="azzura-img/villa1-pic4.jpg" />
                                    </swiper-slide>
                                    
                                </swiper-container>
                                <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
                                    watch-slides-progress="true">
                                    <swiper-slide>
                                    <img src="azzura-img/villa1-pic1.png" />
                                    </swiper-slide>
                                    <swiper-slide>
                                    <img src="azzura-img/villa1-pic2.png" />
                                    </swiper-slide>
                                    <swiper-slide>
                                    <img src="azzura-img/villa1-pic3.jpg" />
                                    </swiper-slide>
                                    <swiper-slide>
                                    <img src="azzura-img/villa1-pic4.jpg" />
                                </swiper-container>
                            </div>
                            <div class="row mt-5 d-flex justify-content-between me-3 me-lg-2 text-center mb-2">
                                <div class="col mb-5">
                                    <button class="btn btn-primary book-now mb-2 mb-lg-0">Book Now</button>
                                    <button class="btn btn-primary book-now ">View more Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-lg-0">
                            <!-- Inclusion Content Box  -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4 px-3 px-lg-0" style="letter-spacing: 5px;">Inclusion</h4>
                                <div class="bg-white">
                                    <ul class="list-inline m-0 px-3 px-lg-0">
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Guest Max: 15</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Size: 50m</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Bed type: 3 Double Deck</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Price: 7,000.00 Php</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Villa number: 10</p></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Description Content Box -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4 px-3 px-lg-0" style="letter-spacing: 5px;">Description</h4>
                                <div class="bg-white">
                                    <ul class="list-inline m-0 px-3 px-lg-0">
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Guest Max: 15</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Size: 50m</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Bed type: 3 Double Deck</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Price: 7,000.00 Php</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Villa number: 10</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
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