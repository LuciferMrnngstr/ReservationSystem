<?php
        session_start();

        if (!isset($_SESSION['logged_id'])){
            header('location: index.php');
        }
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

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/modal.css">
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



    <!-- Carousel Start -->
    <div class="container-fluid mt-30 p-0 page-header">
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
                            <div class=" bg-dark">
                                <form class="d-flex input-group">
                                <input
                                    type="search"
                                    class="form-control p-4 w-75 "
                                    placeholder="Search"
                                    aria-label="Search"
                                    aria-describedby="search-addon"
                                />
                                <span class="input-group-text border-0 " id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                                </form>
                            </div>
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
                            <div class=" bg-dark">
                                <form class="d-flex input-group">
                                <input
                                    type="search"
                                    class="form-control p-4 rounded w-75"
                                    placeholder="Search"
                                    aria-label="Search"
                                    aria-describedby="search-addon"
                                />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search "></i>
                                </span>
                                </form>
                            </div>
                                
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
                            <div class=" bg-dark">
                                <form class="d-flex input-group">
                                <input
                                    type="search"
                                    class="form-control p-4 rounded w-75"
                                    placeholder="Search"
                                    aria-label="Search"
                                    aria-describedby="search-addon"
                                />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search "></i>
                                </span>
                                </form>
                            </div>   
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

   <!-- login form modal -->
    <!-- The Modal -->
    <div id="id01" class="modal-login">
        <!-- Modal Content -->
        
        <form class="modal-content animate" action="/action_page.php">
        <span onclick="document.getElementById('id01').style.display='none'"title="Close" id="close" class="text-right">&times;</span>
           <div class="header-login-logo">
                <div class="imgcontainer">
                    <img src="img/logo.png" alt="Avatar" class="w-25" title="logo">
                </div>
                <div class="header-text-login">
                    <h3>Login to your Account</h3> 
                    <p>Login using your social account</p>
                    <button class="click-btn"><i class="fab fa-google"> | Continue with Google</i></button>
                </div>
                <div class="or_section">
                    <hr class="or">
                        <p>or</p>
                    <hr class="or">
                </div>
           </div> 
            <div class="container-login container-lg">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <span class="psw">Forgot <a href="#">password?</a></span>
                <button type="submit" class="enter">Login</button>
                <div class="sign-up-btn">
                <p>Dont have account yet?<span><a href="">Sign-up</a></span></p>
            </div>
            </div>
           
        </form>
    </div>
    
    <!-- Registration form modal -->
    <div id="id02" class="modal-register">
        <!-- Modal Content -->
        <form class="modal-content animate" action="/action_page.php">
        <span onclick="document.getElementById('id02').style.display='none'"title="Close" id="close" class="text-right">&times;</span>
            <div class="header-login-logo">
                <div class="imgcontainer">
                    <img src="img/logo.png" alt="Avatar" class="w-25" title="logo">
                </div>
                <div class="header-text-login">
                    <h3>Login to your Account</h3> 
                    <p>Login using your social account</p>
                    <button class="click-btn"><i class="fab fa-google"> | Continue with Google</i></button>
                </div>
                <div class="or_section">
                    <hr class="or">
                        <p>or</p>
                    <hr class="or">
                </div>
           </div>
            
            <div class="container-register container">
                <form action="">
                    <div class="row container-fluid">
                        <div class="col">
                            <label for="fname">First Name
                            <input type="text" class="form-control p-4" placeholder="First Name" name="fname" id="fname" required></label> 
                        </div>
                        <div class="col">
                            <label for="lname">First Name
                            <input type="text" class="form-control p-4" placeholder="Last Name" name="lname" id="lname" required></label>
                        </div>
                        <div class="col">
                            <label for="m-i">Middle Name
                            <input type="text" class="form-control p-4" placeholder="M.I" name="m-i" id="m-i"></label>
                        </div>
    
                    </div>
                    <div class="row container">
                        <div class="col">
                            <label for="b-date">Birth-Date
                            <input type="date" class="form-control p-4 date" id="b-date" name="b-date" required /></label>
                        </div>
                        <div class="col">
                            <label for="age"></label>Age
                            <input type="text" class="form-control p-4" placeholder="Age" name="age" id="age" required></label>
                        </div>
                        <div class="col">
                            <label for="suffix"></label>Suffix
                            <input type="text" class="form-control p-4" placeholder="suffix" name="suffix" id="suffix" required></label>
                        </div>
                        <div class="col">
                        <div class="gender-box">
                                <p class="sex">Sex:</p>
                                <div class="gender-option">
                                    <div class="gender">
                                        <input type="radio" id="check-male" name="gender"/>
                                        <label for="check-male">male</label>
                                    </div>
                                    <div class="gender">
                                        <input type="radio" id="check-female" name="gender" />
                                        <label for="check-female">Female</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row container-fluid">
                        <div class="col">
                            <label for="email" class="email">Email
                            <input type="email" class="form-control p-4 email" placeholder="example@gmail.com" id="email" name="email" required></label>
                        </div>
                    </div>
                    <div class="row row-cols-2 container">
                        <div class="col">
                            <label for="uname" class="email">Username
                            <input type="text" class="form-control p-4" placeholder="Username" id="uname" name="uname" required></label>
                        </div>
                        <div class="col">
                            <label for="mobile-number"class="email">Mobile Number
                            <input type="text" class="form-control p-4" placeholder="Mobile Number" id="mobile-number" name="mobile-number" required></label>
                        </div>
                        <div class="col">
                            <label for="password"class="email">Password
                            <input type="password" class="form-control p-4" placeholder="Password" id="pass" name="pass" required></label>
                        </div>
                        <div class="col">
                            <label for="c-pass"class="email">Confirm Password
                            <input type="password" class="form-control p-4" placeholder="Confirm Password" id="c-pass" name="c-pass" required></label>
                        </div>
                    </div>
                    <div class="row container-fluid">
                        <div class="col-sm text-center">
                            <input type="checkbox">
                            <label for="checkbox">I agree to the terms and conditions</label>
                        </div>
        
                    </div>
                    <div class="row">
                        <div class="col">
                                <button type="button" class="enter"onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="enter">Register</button>
                        </div>
                    </div>
                    <p>already have an account?<span><a href="#"onclick="document.getElementById('id01').style.display='block'">Login?</a></span></p> 
                       
                </form>
            </div>

            
        </form>
    </div>
    <!-- modal content end -->


    <!-- Reservation Form Content -->
    <div id="id03" class="modal-register">
        <!-- Modal Content -->
        <div class="modal-container">
            <hr class="line">
            <!-- Modal Reservatin Form -->
            <div class="row">
            <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
            
                
                <span onclick="document.getElementById('id03').style.display='none'"title="Close" id="close">&times;</span>


           
                <form action="index.php" method="post">
                    <div class="row align-items-center" style="min-height: 60px;">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <label for="checked-in">Checked-In</label>
                                            <input type="date" class="form-control p-4 " id="checked-in" name="checked-in" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="date2" data-target-input="nearest">
                                            <label for="checked-out">Checked-Out</label>
                                            <input type="date" class="form-control p-4" id="checked-in" name="checked-in" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="children" data-target-input="nearest">
                                            <label for="children">Children </label>
                                            <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="0" required>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 mb-md-0">
                                        <div class="date" id="adults" data-target-input="nearest">
                                            <label for="adults">Adults</label>
                                            <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="0" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 mb-md-0">
                                        <div class="date" id="adults" data-target-input="nearest">
                                            <label for="adults">Quantity</label>
                                            <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="1" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form> 
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- modal content end -->

    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <form action="index.php" method="post">
                    <div class="row align-items-center" style="min-height: 60px;">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <label for="checked-in">Checked-In</label>
                                            <input type="date" class="form-control p-4 " id="checked-in" name="checked-in" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="date2" data-target-input="nearest">
                                            <label for="checked-out">Checked-Out</label>
                                            <input type="date" class="form-control p-4" id="checked-in" name="checked-in" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-5 mb-md-4">
                                        <div class="date" id="children" data-target-input="nearest">
                                            <label for="children">Children </label>
                                            <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="0" required>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 mb-md-0">
                                        <div class="date" id="adults" data-target-input="nearest">
                                            <label for="adults">Adults</label>
                                            <input type="number" class="form-control p-4" placeholder="0" data-target="#children" id="quantity" name="quantity" min="0" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"> 
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
    

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>