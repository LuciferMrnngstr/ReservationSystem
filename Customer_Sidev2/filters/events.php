<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FILTERS | Events</title>
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
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login-reg.css">

    <!-- login and register JS -->
    <script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	<script src="../js/login-register.js" type="text/javascript"></script>

</head>

<body>
    

    <!-- Navbar Start -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
            <img src="../img/logo.png" class="logo">
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
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Accommodation</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="../accommodation/villa.php" class="dropdown-item">Villas</a>
                                <a href="../accommodation/hotel.php" class="dropdown-item">Hotels</a>
                                <a href="../accommodation/cottages.php" class="dropdown-item">Cottages</a>
                                <a href="../accommodation/amenities.php" class="dropdown-item">Amenities</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Filters</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0 ">
                                <a href="../filters/new.php" class="dropdown-item">What's new</a>
                                <a href="../filters/service.php" class="dropdown-item">Services</a>
                                <a href="../filters/events.php" class="dropdown-item">Events</a>
                                <a href="../filters/gallery.php" class="dropdown-item">Gallery</a>
                            </div>
                        </div>
                        <a href="../location.php" class="nav-item nav-link">Location</a>
                        <a href="../about.php" class="nav-item nav-link">About Us</a>
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
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Accommodation</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="../accommodation/villa.php" class="dropdown-item">Villas</a>
                                <a href="../accommodation/hotel.php" class="dropdown-item">Hotels</a>
                                <a href="../accommodation/cottages.php" class="dropdown-item">Cottages</a>
                                <a href="../accommodation/amenities.php" class="dropdown-item">Amenities</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Filters</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0 ">
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
            </div>
            <div class="d-none d-lg-flex">

                <!--  when user got login the comment will appear -->

                <!-- <div class="btn-group">
                    <button type="button" class="dropdown-toggle btn shadow-none " data-bs-display="static"data-toggle="dropdown">
                        <img src="../azzura-img/cv_PHOTO.jpg"class="rounded-circle"height="50"loading="lazy"/> <span class="ml-3"style="color: #DFF6FF; font-size: 17px;">lowey G. Ecat</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="../customer-profile/profile.php"><i class="bi bi-person-lines-fill me-4"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bell-fill me-4"></i>Notification</a></li>
                        <li><a class="dropdown-item" href="../summary.php"><i class="bi bi-card-checklist me-4"></i>My Bookings</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="../index.php"><i class="bi bi-box-arrow-left me-4"></i>Logout</a></li>
                    </ul>
                </div> -->

                <div class="log-reg-btn d-flex me-2 ">
                    <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a></div>
                    <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a>
                </div>
            </div>
            
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="text-white-others-2  text-uppercase">FILTERS</h3>
                <div class="d-inline-flex text-white">
                    <h6 style="color: #fff; font-size: 17px;">FILTERS | Events</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


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
                                <form method="" action="" accept-charset="UTF-8">

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control " id="floatingInput" placeholder="Username">
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control " id="floatingPassword" placeholder="Password">
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
                                        <input class="btn btn-default btn-login rounded" type="button" value="Login" onclick="loginAjax()">
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

    <!-- bootstrap bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>