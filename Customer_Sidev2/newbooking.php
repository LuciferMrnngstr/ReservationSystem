<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking Details</title>
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
    <link rel="stylesheet" href="css/modal.css">
    
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

                <!--  when user got login remove the comment -->

                <div class="btn-group">
                    <button type="button" class="dropdown-toggle btn shadow-none " data-bs-display="static"data-toggle="dropdown">
                        <img src="azzura-img/cv_PHOTO.jpg"class="rounded-circle"height="50"loading="lazy"/> <span class="ml-3"style="color: #DFF6FF; font-size: 17px;">lowey G. Ecat</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="../customer-profile/profile.php"><i class="bi bi-person-lines-fill me-4"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bell-fill me-4"></i>Notification</a></li>
                        <li><a class="dropdown-item" href="../summary.php"><i class="bi bi-card-checklist me-4"></i>My Bookings</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="../index.php"><i class="bi bi-box-arrow-left me-4"></i>Logout</a></li>
                    </ul>
                </div>

                <!-- <div class="log-reg-btn d-flex me-2 ">
                    <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a></div>
                    <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a>
                </div> -->
            </div>
            
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="text-white-others-2  text-uppercase">Booking Details</h3>
                <div class="d-inline-flex text-white">
                    <h6 style="color: #fff; font-size: 17px;">Booking Process | Step 2</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- The Modal -->
    <div id="id01" class="modal-amenities">
        <!-- Modal Content -->
        <div class="modal-container container-lg">
            <div class="modal-content-header">
                <div class="row">
                    <div class="col">
                        <span onclick="document.getElementById('id01').style.display='none'"title="Close" id="close" class="text-right">&times;</span>
                    </div>
                </div>
                <hr>
            </div>
            <div class="amenities-container">
                <h4 class="text-center">Available Amenities</h4>
                <hr>
                <div class="amenities-content">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="row ">
                                <div class="col">
                                    <hr>
                                    <h5>Tent</h5>
                                    <hr>
                                </div>
                            </div>
                            <div class="img-container text-center">
                                <img src="azzura-img/villa1-pic3.jpg" class="w-75 h-50">
                            </div>
                        </div>
                        <div class="col">
                            <div class="description-container">
                                <hr>
                                <h5>Description</h5>
                                <hr>
                                <div class="item-content">
                                    <div class="row">
                                        <div class="col">
                                            <div class="quantity-input">
                                                <h5 class="mr-2">Qty</h5>
                                                <button class="minus-btn" type="button">-</button>
                                                <input type="number" min="1" value="1" class="box">
                                                <button class="plus-btn" type="button">+</button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="button-add">
                                                <button class="btn btn-primary shadow rounded w-100">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-description mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <p>Price:</p>
                                            <p>Size:</p>
                                            <p>Capacity:</p>
                                        </div>
                                        <div class="col">
                                            <p>500.00</p>
                                            <p>50m</p>
                                            <p>8 persons</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col text-center">
                                    <hr>
                                    <h5>Tent</h5>
                                    <hr>
                                </div>
                            </div>
                            <div class="img-container text-center">
                                <img src="azzura-img/villa1-pic3.jpg" class="w-75 h-50">
                            </div>
                        </div>
                        <div class="col">
                            <div class="description-container">
                                <hr>
                                <h5>Description</h5>
                                <hr>
                                <div class="item-content">
                                    <div class="row">
                                        <div class="col">
                                            <div class="quantity-input">
                                                <h5 class="mr-2">Qty</h5>
                                                <button class="minus-btn" type="button">-</button>
                                                <input type="number" min="1" value="1" class="box">
                                                <button class="plus-btn" type="button">+</button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="button-add">
                                                <button class="btn btn-primary shadow rounded w-100">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-description mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <p>Price:</p>
                                            <p>Size:</p>
                                            <p>Capacity:</p>
                                        </div>
                                        <div class="col">
                                            <p>500.00</p>
                                            <p>50m</p>
                                            <p>8 persons</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row ">
                                <div class="col text-center">
                                    <hr>
                                    <h5>Tent</h5>
                                    <hr>
                                </div>
                            </div>
                            <div class="img-container text-center">
                                <img src="azzura-img/villa1-pic3.jpg" class="w-75 h-50">
                            </div>
                        </div>
                        <div class="col">
                            <div class="description-container">
                                <hr>
                                <h5>Description</h5>
                                <hr>
                                <div class="item-content">
                                    <div class="row">
                                        <div class="col">
                                            <div class="quantity-input">
                                                <h5 class="mr-2">Qty</h5>
                                                <button class="minus-btn" type="button">-</button>
                                                <input type="number" min="1" value="1" class="box">
                                                <button class="plus-btn" type="button">+</button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="button-add">
                                                <button class="btn btn-primary shadow rounded w-100">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-description mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <p>Price:</p>
                                            <p>Size:</p>
                                            <p>Capacity:</p>
                                        </div>
                                        <div class="col">
                                            <p>500.00</p>
                                            <p>50m</p>
                                            <p>8 persons</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mb-5">
            </div>
            
            <div class="Submit-btn text-center">
                <div class="row text-center">
                    <div class="col">
                        <div class="footer-container mb-5">
                            <button class="rounded shadow btn btn-primary">Cancel</button>
                            <button class="rounded shadow  btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal Amenities End -->


    <!-- Booking Container Start -->
    <div class="container">
        <div class="booking-container">
            <div class="title-header mt-5 text-center">
                <h3>Reservation Form</h3>
                <hr>
            </div>
            <div class="customer-info">
                <div class="title-header mt-5">
                    <h5>Customer Information</h5>
                </div>
                <div class="cust-info mt-4">
                    <div class="row">
                        <div class="col">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control p-4" name="name" id="name">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control p-4" name="email" id="email">
                            <label for="number" class="form-label">Number</label>
                            <input type="number" class="form-control p-4" name="number" id="number">
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            
            <div class="table-container-content mt-5">
                <div class="title-header text-center bg-light rounded">
                    <hr>
                    <h5 style="color: white;">List of Expense[s] - [Accommodation]</h5>
                    <hr>
                </div>
                <?php 
                if(!empty($_SESSION['booked_villas'])){

                    require_once '../classes/accommodation.class.php';
                    // Create a new instance of the Accommodation class
                    $accommodation = new Accommodation();

                    // Get the booked villas from the session
                    $booked_villas = $_SESSION['booked_villas'];

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
                <div class="accommodation-table">
                    <div class="accommodation-header">
                        <div class="row">
                            <div class="col">
                                <hr>
                                <h4>Accommdation Name <span class="ml-3">>></span><span class="ml-2"><?php echo $villa['type']; ?></span></h4>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="Book-info" style="border: 1px solid; padding: 20px;">
                                <!-- Booking Detaiks -->
                                <div class="booking-details">
                                    <div class="row">
                                        <div class="col bg-light rounded p-2">
                                            <h5 style="color: #fff;">Booking Details</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="checked-in">Checked-In</label>
                                            <input type="date" id="checked-in" name="checked-in" class="form-control p-4">
                                        </div>
                                        <div class="col mb-4">
                                            <label for="checked-out">Checked-Out</label>
                                            <input type="date" id="checked-out" name="checked-out" class="form-control p-4">
                                        </div>
                                    </div>
                                </div>
                                <!-- Time Phase -->
                                <div class="time">
                                    <div class="row">
                                        <div class="col bg-light rounded p-2">
                                            <h5 style="color: #fff;">Time</h5>
                                        </div>
                                    </div>
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
                                    <div class="row mt-3">
                                    <div class="col">
                                            <label for="">Time-in</label>
                                            <select class="form-control " aria-label="Default select example">
                                                <option selected>--Select--</option>
                                                <option value="day">8:00 AM</option>
                                                <option value="night">8:00 AM</option>
                                                <option value="day-night">8:00 AM</option>
                                            </select>
                                        </div>
                                        <div class="col mb-4">
                                            <label for="">Time-out</label>
                                            <select class="form-control " aria-label="Default select example">
                                                <option selected>--Select--</option>
                                                <option value="day">8:00 AM</option>
                                                <option value="night">8:00 AM</option>
                                                <option value="day-night">8:00 AM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Guest information -->
                                <div class="guest-info">
                                    <form action="">
                                        <div class="row ">
                                            <div class="col bg-light rounded p-2">
                                                <h5 style="color: #fff;">Guest</h5>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label for="children">Children</label>
                                                <input type="number" id="children" name="children" class="form-control p-4">
                                            </div>
                                            <div class="col">
                                                <label for="Adult">Adult</label>
                                                <input type="number" id="checked-out" name="checked-out" class="form-control p-4">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <button class="btn btn-primary rounded w-100">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="row">
                                    <div class="col mt-5 text-center">
                                    <span class="badge bg-secondary rounded-pill text-dark text-wrap lh-base">
                                        Note: diri ibutang ang note sa mga bayaran niya base sa iyang gipali nga shift
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Table Container -->
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="../Admin-Side/image/photos/<?php echo $villa['image']; ?>" class="w-100 h-25 mb-4">
                            </div>
                            <div class="accommodation-table">
                                <div class="table-header-content bg-light px-lg-3 rounded">
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 style="color: #fff;">Inclusion</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <h5 style="color: #fff;">Type</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 style="color: #fff;">Price</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 style="color: #fff;">Action</h5>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                                <div class="row mt-3 px-lg-3">
                                    <div class="col-md-4">
                                    <?php
                                    $inclusions = explode(',', $villa['inclusion']);
                                    foreach ($inclusions as $villa['inclusion']) {
                                        echo "<p>". $villa['inclusion'] ."</p>";
                                    }
                                    ?>
                                    </div>
                                    <div class="col-md-3">
                                        <p><?php echo $villa['acc_name']; ?></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p><?php echo $villa['price']; ?></p>
                                    </div>
                                     
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col text-right">
                                        <h4>Sub-total: <span class="ml-3"><?php echo $villa['price']; ?></span></h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php } } } ?>
            </div>

            <!-- Booking Table Content for Amenities Start -->
            <div class="booking-table mt-5">
                    <div class="table-header mt-5">
                        <div class="row">
                            <div class="col">
                                <hr>
                                <h4>List of Expense[s] [AMENITIES]</h4>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <!-- Table Content Start -->
                    <div class="table-content">
                        <!-- Table Content Header -->
                        <div class="row">
                            <div class="col-md-5">
                                <h5>Amenites Name</h5>
                            </div>
                            <div class="col-md-2">
                                <h5>Description</h5>
                            </div>
                            <div class="col">
                                <h5>Quantity</h5>
                            </div>
                            <div class="col">
                                <h5>Price</h5>
                            </div>
                            <div class="col">
                                <h5>Total</h5>
                            </div>
                        </div>
                        <hr>

                        <!-- Table Content Content Item -->
                        <div class="row mt-3 text-center">
                            <div class="col">
                                <p>There's no amenities added yet</p>
                            </div> 
                        </div>
                        <hr>
                        <!-- Sub-total -->
                        <div class="row">
                            <div class="col">
                                <div class="add-accommodation">
                                    <p>Do you want to add some Amenities or Accommodation?</p>
                                    <a href="check.php"class="btn btn-primary">Add More Accommdation</a>
                                    <a href="#"class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Add More Amenities</a>
                                </div>
                            </div>
                            <div class="col text-right">
                                <h5>Sub-Total: <span class="ml-3">7,000.00</span></h5>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- Booking Table Content for Amenities End -->

                <!-- list of Expenses Start -->
                <div class="Expenses mt-5">
                    <div class="total-header">
                        <div class="row">
                            <div class="col text-center">
                                <hr class="w-25">
                                <h4>TOTAL</h4>
                                <hr class="w-25">
                            </div>
                        </div>
                    </div>
                        <div class="total-content-items d-flex justify-content-center">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="total-name">
                                        <p>Accommodation Fee</p>
                                        <p>Amenities Fee</p>
                                        <p>Adult Entrance Fee</p>
                                        <p>Children Entrance Fee</p>
                                        <p>Discount Fee</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="total-amount">
                                        <p>350.00</p>
                                        <p>350.00</p>
                                        <p>350.00</p>
                                        <p>350.00</p>
                                        <p>350.00</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- Grand-total Value -->
                        <hr class="w-25">
                        <div class="grand-total d-flex justify-content-center">
                            <div class="row">
                                <div class="col-md-auto">
                                    <h5>Grand-Total: <span class="ml-5">10,000.00</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- button Submit -->  
                        <div class="submit d-flex justify-content-center mt-5">
                            <div class="submit-btn justify-content-between p-5">
                                <?php if(isset($_SESSION['fullname'])): ?>
                                    <button class="btn btn-primary">Cancel</button>
                                    <input type="submit" name="submit_booking" class="btn btn-primary" value="Submit">
                                <?php else: ?>
                                    <button class="btn btn-primary">Cancel</button>
                                    <a href="index.php" class="btn btn-primary">Submit</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <!-- list of Expenses End -->
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

    <!-- modal-amenities js -->
    <script>
        // Get all the minus and plus buttons
        const minusButtons = document.querySelectorAll('.minus-btn');
        const plusButtons = document.querySelectorAll('.plus-btn');

        // Add click event listeners to all the minus and plus buttons
        [...minusButtons, ...plusButtons].forEach(button => {
        button.addEventListener('click', () => {
            // Get the input element associated with this button
            const input = button.parentElement.querySelector('input[type="number"]');
            // Get the min and max values for the input element
            const min = parseInt(input.getAttribute('min'));
            const max = parseInt(input.getAttribute('max')) || Infinity; // set max to Infinity if not set

            // Calculate the new value of the input element
            let newValue;
            if (button.classList.contains('minus-btn')) {
            newValue = parseInt(input.value) - 1;
            // If the new value is less than the min value, loop back to the max value
            if (newValue < min) {
                newValue = max === Infinity ? min : max; // set newValue to min if max is not set
            }
            } else {
            newValue = parseInt(input.value) + 1;
            // If the new value is greater than the max value, loop back to the min value
            if (newValue > max) {
                newValue = min;
            }
            }

            // Update the value of the input element
            input.value = newValue;
        });
        });
    </script>


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

</body>
</html>