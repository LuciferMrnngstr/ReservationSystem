<?php

session_start(); // start a session to store the logged-in user's information

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AZZURA BEACH RESORT</title>
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
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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


    <!-- Carousel Start -->
    <div class="container-fluid mt-30 p-0 page-header ">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="azzura-img/bb-pic3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-md-3">EXPLORE</h1>
                            <h4 class="display-3 mb-md-4">EXTRAORDINARY EXPERIENCE</h4>
                            <p class="parag">A whole new hotel and beach resort experience unlike any other,
                                <br>come and visit azzura for more exciting views and spots.</p>
                            <!-- <button class="button-82-pushable" role="button" onclick="document.getElementById('id02').style.display='block'"><span class="button-82-shadow"></span><span class="button-82-edge"></span><span class="button-82-front text">REGISTER</span></button>
                            <button class="button-82-pushable " role="button" onclick="document.getElementById('id01').style.display='block'"><span class="button-82-shadow"></span><span class="button-82-edge"></span><span class="button-82-front text other-color">LOGIN</span></button> -->
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="azzura-img/bb-pic2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-md-3">EXPLORE</h1>
                            <h4 class="display-3 mb-md-4">LIFE'S A BEACH FIND YOUR WAVE</h4>
                            <p class="parag">A whole new hotel and beach resort experience unlike any other,
                                <br>come and visit azzura for more exciting views and spots.</p>
                                <!-- <button class="button-82-pushable" role="button" onclick="document.getElementById('id02').style.display='block'"><span class="button-82-shadow"></span><span class="button-82-edge"></span><span class="button-82-front text">REGISTER</span></button>
                                <button class="button-82-pushable " role="button" onclick="document.getElementById('id01').style.display='block'"><span class="button-82-shadow"></span><span class="button-82-edge"></span><span class="button-82-front text other-color">LOGIN</span></button> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="photo-carousel w-100" src="azzura-img/bb-pic1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-md-3">EXPLORE</h1>
                            <h4 class="display-3 mb-md-4">GET YOUR DAILY DOSE OF VITAMIN SEA</h4>
                            <p class="parag">A whole new hotel and beach resort experience unlike any other,
                                <br>come and visit azzura for more exciting views and spots.</p>
                                <!-- <button class="button-82-pushable" role="button" onclick="document.getElementById('id02').style.display='block'"><span class="button-82-shadow"></span><span class="button-82-edge"></span><span class="button-82-front text">REGISTER</span></button>
                                <button class="button-82-pushable " role="button" onclick="document.getElementById('id01').style.display='block'"><span class="button-82-shadow"></span><span class="button-82-edge"></span><span class="button-82-front text other-color">LOGIN</span></button> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow rounded" style="padding: 30px;">
                <form action="index.php" method="post">
                    <div class="row align-items-center" style="min-height: 60px;">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <label for="checked-in"style="color: white;">Checked-In</label>
                                            <input type="date" class="form-control p-4 " id="checked-in" name="checked-in" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="date2" data-target-input="nearest">
                                            <label for="checked-out"style="color: white;">Checked-Out</label>
                                            <input type="date" class="form-control p-4" id="checked-in" name="checked-in" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="children" data-target-input="nearest">
                                            <label for="children"style="color: white;">Children </label>
                                            <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="0" required>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 mb-md-0">
                                        <div class="date" id="adults" data-target-input="nearest">
                                            <label for="adults"style="color: white;">Adults</label>
                                            <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="0" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center"> 
                            <a href="check.php"><button class="button-82-pushable" role="button"><span class="button-82-shadow" type="submit"></span><span class="button-82-edge"></span><span class="button-82-front text other-color">Check Availability</span></button></a>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <!-- Booking End -->


     <!-- Offering Start -->
     <div class="container-fluid py-5" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Welcome</h6>
                <h1 style="color: #C58940;">Azzura Hotel and Beach Resort</h1>
                <p>Find Azzura in Bolong Zamboanga City, Azzura are designed to merge intimate
                        <br>stays in one instagram worthy space for you, our guests.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4" style="padding-bottom: -20px;">
                        <img src="img/bed_con.png" class="w-25" alt="">
                        <h5 class="mb-2">Fully furnished airconditioned</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <img src="img/costumer.png" class="w-25" alt="">
                        <h5 class="mb-2">High Costumer <span>Satisfaction</span></h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <img src="img/convenient.webp" class="w-25" alt="">
                        <h5 class="mb-2">Convenient Location</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <img src="img/clean.jpg" class="w-25" alt="">
                        <h5 class="mb-2">Clean and Green Surroundings</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <img src="img/secured.jpg" class="w-25" alt="">
                        <h5 class="mb-2">Peaceful and Secured Place</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <img src="img/services.jpg" class="w-25" alt="">
                        <h5 class="mb-2">Peaceful and Secured Place</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offering Start -->

     <!-- About Start -->
     <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="azzura-img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid pic" src="azzura-img/about-pic1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid pic" src="azzura-img/about-pic2.jpg" alt="">
                            </div>
                        </div>
                        <a href="about.php" class="btn btn-primary mt-1">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt about-edit"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award about-edit"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe about-edit"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Worldwide Coverage</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Our Top Destination</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="azzura-img/villa.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="content-text">Villa</h5>
                           
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="azzura-img/cafe.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="content-text">Cafeteria</h5>
                            
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="azzura-img/kidsplayground.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="content-text">Kids Playground</h5>
                            
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="azzura-img/volleyball.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="content-text">Volley Ball Court</h5>
                            
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="azzura-img/mini-pool.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="content-text">Mini Pool</h5>
                           
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="azzura-img/hotel-function-hall.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="content-text">Convention Hall</h5>
                           
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->

   <!-- AZZURA EXPERIENCE Start -->
   <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Visit us</h6>
                <h1>Azzura New Exciting Experience</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

            <div class="text-center">
                    <div class="text-center ">
                        <div class="image-col">
                            <img src="azzura-img/villa.jpg" class="w-100" style="height: 50vh; padding-top:24px; margin-top: 24px;">
                            <div class="layer">
                                <h3>Villa
                                    <br><br><a href=""class="btn btn-primary">Learn More</a>
                                </h3> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="layer text-center">
                    <div class="image-col">
                            <img src="azzura-img/cottage.jpg" class="w-100" style="height: 50vh; padding-top:24px;">
                            <div class="layer">
                                <h3>Gazebo
                                    <br><br><a href=""class="btn btn-primary">Learn More</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="layer text-center ">
                    <div class="image-col">
                            <img src="azzura-img/hotel-function-hall.jpg" class="w-100" style="height: 50vh; padding-top:24px;">
                            <div class="layer">
                                <h3>Hotel
                                    <br><br><a href=""class="btn btn-primary">Learn More</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="layer text-center ">
                    <div class="image-col">
                           <img src="azzura-img/mini-pool.jpg" class="w-100" style="height: 50vh; padding-top:24px;">
                            <div class="layer">
                                <h3>Mini Pool
                                    <br><br><a href=""class="btn btn-primary">Learn More</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="layer text-center ">
                    <div class="image-col">
                            <img src="azzura-img/about-pic2.jpg" class="w-100" style="height: 50vh; padding-top:24px;">
                            <div class="layer">
                                <h3>Aqua Park
                                    <br><br><a href=""class="btn btn-primary">Learn More</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="layer text-center ">
                    <div class="image-col">
                           <img src="azzura-img/about.jpg" class="w-100" style="height: 50vh; padding-top:24px;">
                            <div class="layer">
                                <h3>Kayak
                                    <br><br><a href=""class="btn btn-primary">Learn More</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AZZURA EXPERIENCE End -->

     <!-- Content Start no Bootstrap-->
     <section class="content-box" >
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">What's New</h6>
            <h1>Look! Our Latest updates</h1>
        </div>
        <div class="content-row">
            <div class="content_text">
                <p  class="text-bar"> Create memorable 'Beach' and 'waterfront' experiences for 
                    visitors that promote interaction with the natural environment
                    though appropriate amenities, linkages and public accesses 
                </p>

                <a href="./filters/new.php"><button class="button-50" role="button">Learn more</button></a>
            </div>
            <div class="content-col">
                <div class="photo-one">
                    <img src="azzura-img/memorable.png"class="picture-one">
                </div>
                <div class="photo_two">
                    <img src="azzura-img/memorable2.png">
                </div>
            </div>
            <div class="content-col">
                <div class="photo_two">
                    <img src="azzura-img/cafeteria2.jpg">
                </div>
                <div class="photo-one">
                    <img src="azzura-img/cafeteria.jpg"class="picture-one">
                </div>
            </div>
            
                
        </div>
    </section>
    <!-- Content Start no Bootstrap-->


   <!--FOOTER  START  -->
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
    <!-- modal -->
    <script>
        document.getElementById('submit').addEventListener('click', function(event) {
    event.preventDefault();

    var firstname = document.getElementById('firstname');
    var lastname = document.getElementById('lastname');
    var middlename = document.getElementById('middlename');
    var date = document.getElementById('date');
    var age = document.getElementById('age');
    var email = document.getElementById('email');
    var username = document.getElementById('username');
    var contact_num = document.getElementById('contact_num');
    var password = document.getElementById('password');
    var termsCheckbox = document.querySelector('input[type="checkbox"]');
    var maleRadio = document.getElementById('check-male');
    var femaleRadio = document.getElementById('check-female');

    if (!firstname.value || !lastname.value || !middlename.value || !date.value || !age.value || !email.value || !username.value || !contact_num.value || !password.value || (!maleRadio.checked && !femaleRadio.checked) || !termsCheckbox.checked) {
        alert('Please fill out all required fields, select your gender, and agree to the terms and conditions.');
        return;
    }

    this.closest('form').submit();
});
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- bootstrap bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>