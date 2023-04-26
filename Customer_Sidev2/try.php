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

    <nav class="navbar navbar-expand-lg bg-light justify-content-between navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5 fixed-top">
        <div class="container-fluid position-relative p-0 px-lg-3 d-flex" style="z-index: 9 fixed-top">
            <img src="img/logo.png" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="navbarOffcanvasLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-light">
                    <div class="navbar-nav me-auto mb-2 mb-lg-0">
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
                        <hr>
                        <div class="profile-group">
                            <button type="button" class="dropdown-toggle btn shadow-none " data-bs-display="static"data-toggle="dropdown">
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
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-flex">
                <div class="navbar-nav m-auto justify-content-center">
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
    </nav>


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


    <div class="container">
        <div class="bg-white rounded shadow mt-5 p-3 p-lg-4">
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
                                <input type="text" class="form-control " id="floatingInput" placeholder="Name">
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control " id="floatingPassword" placeholder="Email">
                                <label for="floatingPassword">Email</label>
                            </div>
                            <div class="form-floating ">
                                <input type="number" class="form-control " id="floatingPassword" placeholder="Mobile Number">
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
                            <img src="azzura-img/villa1-pic1.png" class="w-100 h-50 mb-4">
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
                                                <p class="text-dark">Guest Max: 15</p>
                                                <p class="text-dark">Guest Max: 15</p>
                                                <p class="text-dark">Guest Max: 15</p>
                                            </td>
                                            <td class="align-middle">Villa</td>
                                            <td class="align-middle">Standard</td>
                                            <td class="align-middle">7,000.00</td>
                                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="text-right mb-3">
                            <h4>Subtotal <span class="ml-3">7,000.00</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accommodation End -->


            <!-- Amenities Start -->
            <div class="mt-4 p-lg-2 mb-2 px-lg-5 px-0">
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
                                <tr>
                                    <td class="align-middle"><img src="img/towel.avif" alt="" style="width: 80px;">Towel</td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-minus" >
                                                <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="img/towel.avif" alt="" style="width: 80px;">Towel</td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-minus" >
                                                <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="img/towel.avif" alt="" style="width: 80px;">Towel</td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-minus" >
                                                <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="img/towel.avif" alt="" style="width: 80px;">Towel</td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-minus" >
                                                <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="img/towel.avif" alt="" style="width: 80px;">Towel</td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-minus" >
                                                <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">150</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
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
                                        <h6>5</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-medium">Subtotal</h6>
                                        <h6 class="font-weight-medium">710</h6>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex justify-content-between mt-2">
                                        <h5>Total</h5>
                                        <h5>1000</h5>
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
                    <button class="btn btn-primary rounded px-lg-5 px-2 p-2 font-weight-bold">Add amenities</button>
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
                                    <p class=" text-dark">350.00</p>
                                    <p class=" text-dark">350.00</p>
                                    <p class=" text-dark">350.00</p>
                                    <p class=" text-dark">350.00</p>
                                    <p class=" text-dark ">350.00</p>
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
                                <h4>7,000.00</h4>
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
                    <button class="btn btn-primary rounded px-lg-5 p-2 font-weight-bold">Submit</button>
                </div>
            </div>
            <!-- Button for accommodation and Amenities  end -->

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