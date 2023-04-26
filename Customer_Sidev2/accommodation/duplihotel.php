<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ACCOMMODATION | HOTEL</title>
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

    <!-- AOS RESOURCES TRANSITION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/modal.css">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>Azzurabeachresort@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>0995 569 2857</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <img src="../img/logo.png" class="logo">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="../index.php" class="nav-item nav-link ">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Accommodation</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="../accommodation/villa.php" class="dropdown-item">Villas</a>
                                <a href="../accommodation/hotel.php" class="dropdown-item active">Hotels</a>
                                <a href="../accommodation/cottages.php" class="dropdown-item">Cottages</a>
                                <a href="../accommodation/amenities.php" class="dropdown-item">Amenities</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Filters</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="../filters/new.php" class="dropdown-item">What's new</a>
                                <a href="../filters/service.php" class="dropdown-item">Services</a>
                                <a href="../filters/events.php" class="dropdown-item">Events</a>
                                <a href="../filters/gallery.php" class="dropdown-item">Gallery</a>
                            </div>
                        </div>
                        <a href="../location.php" class="nav-item nav-link">Location</a>
                        <a href="../about.php" class="nav-item nav-link">About Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="text-white-others-2  text-uppercase">ACCOMMODATION</h3>
                <div class="d-inline-flex text-white">
                    <h6 style="color: #fff; font-size: 17px;">ACCOMMODATION | HOTEL </h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   <!-- Booking Start -->
   <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-5 mb-md-4">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <label for="date1">Checked-In</label>
                                        <input type="date" class="form-control p-4 "/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-5 mb-md-4">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <label for="date2">Checked-Out</label>
                                        <input type="date" class="form-control p-4 "/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-5 mb-md-4">
                                    <div class="date" id="children" data-target-input="nearest">
                                        <label for="children">Children </label>
                                        <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="0">
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="adults" data-target-input="nearest">
                                        <label for="adults">Adults</label>
                                        <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="button-82-pushable" role="button"><span class="button-82-shadow"></span><span class="button-82-edge"></span><span class="button-82-front text other-color">Check Availability</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

    <!-- Reservation Form Content -->
    <div id="id01" class="modal-reservation">
        <!-- Modal Content -->
        <div class="modal-container container-lg">
            <span onclick="document.getElementById('id01').style.display='none'"title="Close" id="close">&times;</span>
            <div class="reserve-form">
            <form method="post" action="start_booking.php">

                <div class="title-header-form">
                    <h2>Check Availability</h2>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Booking Details</span>
                            
                            </h4>

                                <div class="booking-form">
                                    <ul class="list-group mb-3 sticky-top">
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div class="col">
                                                <div class="booking-text-cart">
                                                    <div class="date" id="date1" data-target-input="nearest">
                                                        <label for="checked-out">Checked-In</label>
                                                        <input type="date" class="form-control p-4 " id="checked-in" name="checked_in" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div class="col">
                                                <div class="booking-text-cart">
                                                    <div class="date" id="date1" data-target-input="nearest">
                                                        <label for="checked-out">Checked-Out</label>
                                                        <input type="date" class="form-control p-4 " id="checked-in" name="checked_out" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div class="col">
                                                <div class="booking-text-cart">
                                                    <div class="date" id="adults" data-target-input="nearest">
                                                        <label for="children">Adult</label>
                                                        <input type="number" class="form-control p-4 " id="adult" name="adult" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div class="col">
                                                <div class="booking-text-cart">
                                                    <div class="date" id="children" data-target-input="nearest">
                                                        <label for="children">Children</label>
                                                        <input type="number" class="form-control p-4 " id="children" name="children" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            
                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Costumer Information</h4>
                                <div class="row">
                                    <div class="col">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" name="fname" required="">
                                        <div class="invalid-feedback"> Valid first name is required. </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="lastName">Last name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" name="lname" required="">
                                        <div class="invalid-feedback"> Valid last name is required. </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="lastName">Middle name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" name="mname" required="">
                                        <div class="invalid-feedback"> Valid last name is required. </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="contact">Contact</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="contact" name="contact" placeholder="+63" required>
                                        
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email<span class="text-muted"></span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                                </div>
                        </div>
                    </div>
                </div>
                <hr width="80%">
                <div class="clickbtn-availability text-center">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="enter"onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                        <div class="col">
                            <button type="submit" name="booked" class="enter">Book now</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>  
    </div>
    <!-- modal content end -->




    <!-- Hotel Barkada content Start -->
    <div class="container-fluid py-5"data-aos="zoom-in-up">
        <div class="card-content container-lg">
            <div class="card">
                <div class="container py-5">
                    <div class="section_title">
                        <hr class="title_line">    
                            <h3 style="color: #FAF8F1;">HOTEL | STANDARD</h3> 
                        <hr class="title_line"> 
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- HOTEL Detail Start -->
                            
                            <div class="pb-3"> 
                                <div class="col-md-12">
                                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                                        <!-- slides -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active slider-image">
                                                <img src="../azzura-img/barkada-room.jpg" alt="Hills" >
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/barkada-room2.jpg" alt="Hills">
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/barkada-room3.jpg" alt="Hills">
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/barkada-room4.jpg" alt="Hills">
                                            </div>
                                        </div>

                                        <!-- Left right -->
                                        <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                        </a>

                                        <!-- Thumbnails -->
                                        <ol class="carousel-indicators list-inline">
                                            <li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
                                                <img src="../azzura-img/barkada-room.jpg" class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
                                                <img src="../azzura-img/barkada-room2.jpg" class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel">
                                                <img src="../azzura-img/barkada-room3.jpg"  class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel">
                                                <img src="../azzura-img/barkada-room4.jpg"  class="img-fluid pic">
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-phase ">
                                <div class="row">
                                    <div class="booking-btn">
                                        <div class="col">
                                            <button class="btn btn-primary booknow" onclick="document.getElementById('id01').style.display='block'">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <!-- Inclusion Content Box  -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Inclusion</h4>
                                <div class="bg-white" style="padding: 30px;">
                                    <ul class="list-inline m-0">
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
                                <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Description</h4>
                                <div class="bg-white" style="padding: 30px;">
                                    <ul class="list-inline m-0">
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
    <!-- Hotel Barkada content End -->

    <!-- Hotel Family content Start -->
    <div class="container-fluid py-5"data-aos="zoom-in-up">
        <div class="card-content container-lg">
            <div class="card">   
                <div class="container py-5">
                    <div class="section_title">
                        <hr class="title_line">    
                            <h3 style="color: #FAF8F1">HOTEL | FAMILY</h3> 
                        <hr class="title_line"> 
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <!-- Inclusion Content Box  -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Inclusion</h4>
                                <div class="bg-white" style="padding: 30px;">
                                    <ul class="list-inline m-0">
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
                                <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Description</h4>
                                <div class="bg-white" style="padding: 30px;">
                                    <ul class="list-inline m-0">
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Guest Max: 15</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Size: 50m</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Bed type: 3 Double Deck</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Price: 7,000.00 Php</p></li>
                                        <li><p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Villa number: 10</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- HOTEL Detail Start -->
                            <div class="pb-3"> 
                                <div class="col-md-12">
                                    <div id="custCarousel-2" class="carousel slide" data-ride="carousel" align="center">
                                        <!-- slides -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active slider-image">
                                                <img src="../azzura-img/family-room.jpg" alt="Hills">
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/family-room2.jpg" alt="Hills">
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/family-room3.jpg" alt="Hills">
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/family-room4.jpg" alt="Hills">
                                            </div>
                                        </div>

                                        <!-- Left right -->
                                        <a class="carousel-control-prev" href="#custCarousel-2" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#custCarousel-2" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                        </a>

                                        <!-- Thumbnails -->
                                        <ol class="carousel-indicators list-inline">
                                            <li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel-2">
                                                <img src="../azzura-img/family-room.jpg" class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel-2">
                                                <img src="../azzura-img/family-room2.jpg" class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel-2">
                                                <img src="../azzura-img/family-room3.jpg"  class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-3" data-slide-to="3" data-target="#custCarousel-2">
                                                <img src="../azzura-img/family-room4.jpg"  class="img-fluid pic">
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-phase ">
                                <div class="row">
                                    <div class="booking-btn">
                                        <div class="col">
                                            <button class="btn btn-primary booknow" onclick="document.getElementById('id01').style.display='block'">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!-- Hotel Family content End -->

   <!-- Hotel Standard content Start -->
   <div class="container-fluid py-5"data-aos="zoom-in-up">
        <div class="card-content container-lg">
            <div class="card">
                <div class="container py-5">
                    <div class="section_title">
                        <hr class="title_line">    
                            <h3 style="color: #FAF8F1">HOTEL | BARKADA</h3> 
                        <hr class="title_line"> 
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Hotel Detail Start -->
                            <div class="pb-3"> 
                                <div class="col-md-12 ">
                                    <div id="custCarousel-3" class="carousel slide" data-ride="carousel" align="center">
                                        <!-- slides -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active slider-image">
                                                <img src="../azzura-img/standard-room.jpg" alt="Hills" >
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/standard-room2.jpg" alt="Hills">
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/standard-room3.jpg" alt="Hills">
                                            </div>
                                            <div class="carousel-item slider-image">
                                                <img src="../azzura-img/standard-room4.jpg" alt="Hills">
                                            </div>
                                        </div>

                                        <!-- Left right -->
                                        <a class="carousel-control-prev" href="#custCarousel-3" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#custCarousel-3" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                        </a>

                                        <!-- Thumbnails -->
                                        <ol class="carousel-indicators list-inline">
                                            <li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel-3">
                                                <img src="../azzura-img/standard-room.jpg" class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel-3">
                                                <img src="../azzura-img/standard-room2.jpg" class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel-3">
                                                <img src="../azzura-img/standard-room3.jpg"  class="img-fluid pic">
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel-3">
                                                <img src="../azzura-img/standard-room4.jpg"  class="img-fluid pic">
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-phase ">
                                <div class="row">
                                    <div class="booking-btn">
                                        <div class="col">
                                            <button class="btn btn-primary booknow" onclick="document.getElementById('id01').style.display='block'">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <!-- Inclusion Content Box  -->
                            <div class="mb-5">
                                <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Inclusion</h4>
                                <div class="bg-white" style="padding: 30px;">
                                    <ul class="list-inline m-0">
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
                                <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Description</h4>
                                <div class="bg-white" style="padding: 30px;">
                                    <ul class="list-inline m-0">
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
    <!-- Hotel Standrd content End -->



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
    <hr>
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

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- AOS Javascript-->
    <script> AOS.init(); </script>

</body>
</html>