<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Booking Summary</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->

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

    
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>   


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3 d-flex justify-content-center" style="z-index: 9 fixed-top">
            <nav class="navbar navbar-expand-lg bg-light justify-content-between navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5 fixed-top">
                <img src="img/logo.png" class="logo">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center px-3" id="navbarCollapse">
                    <div class="navbar-nav  py-0">
                        <a href="home.php" class="nav-item nav-link active">Home</a>
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

                <!-- profile and notification of user --> 
                <!-- Avatar -->
                <div class="btn-group ">
                    <button type="button" class="dropdown-toggle btn" data-bs-display="static"data-toggle="dropdown">
                        <img src="azzura-img/cv_PHOTO.jpg"class="rounded-circle"height="50"loading="lazy"/> <span class="ml-3"style="color: #DFF6FF; font-size: 17px;">lowey G. Ecat</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Notification</a></li>
                        <li><a class="dropdown-item" href="mybook.php">My Bookings</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="index.php">Logout</a></li>
                    </ul>
                </div> 
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container mt-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="text-white-others-2  text-uppercase">BOOKING SUMMARY</h3>
                <div class="d-inline-flex text-white">
                    <h6 style="color: #fff; font-size: 17px;">Home | Summary</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Summary Start -->
    <div class="container">
        <div class="summary-container">
            <div class="header-content mt-5">
                <h2>Booking Summary</h2>
            </div>
            <div class="destination-control">
                <h5>Home <span class="ml-3">>></span> <span class="ml-3">Summary</span></h5>
            </div>

            <!-- summary content item -->
            <div class="summary-content mt-5">
                <div class="row">
                    <div class="col mb-3 mb-lg-0">
                        <div class="card text-center">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div> 
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <!-- Summary End -->


    


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
    <!-- modal -->

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