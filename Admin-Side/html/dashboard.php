<?php
        //resume session here to fetch session values
        session_start();
        /*
            if user is not login then redirect to login page,
            this is to prevent users from accessing pages that requires
            authentication such as the dashboard
        */
        if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'Admin'){
            header('location: ../login/login.php');
        }

    require_once '../tools/variables.php';
    $page_title = 'Azzura | Dashboard';
    $dashboard = 'active';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/0cc7e94eea.js" crossorigin="anonymous"></script>
    <!-- end: CSS -->
    <title><?php echo $page_title ?></title>
</head>
<style>
    #example_length{
        position: absolute;
    }
    #example_info{
        position: absolute;
    }
    #example_previous{
        padding: 5px;
    }
    #example_next{
        padding: 5px;
    }
    body > main > div > div > div.row.g-3.mt-2 > div.col-12.col-md-7.col-xl-8{
        flex: 0 0 auto;
        width: 50%;
    }
    body > main > div > div > div.row.g-3.mt-2 > div.col-12.col-md-5.col-xl-4{
        flex: 0 0 auto;
        width: 50%;
    }
</style>
<body>
    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <img src="../image/azzuralogo.png" alt="Azzura Logo" style="width: 80px; height: 20px; margin-left: 60px; width: 125px; height: 45px; position: absolute;">
            <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item active">
                <a href="dashboard.php" class="<?php echo $dashboard; ?>" title="Dashboard">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="../reservation/reservation.php" class="<?php echo $reservation; ?>" title="Reservation">
                    <i class="ri-calendar-check-fill sidebar-menu-item-icon"></i>
                    Reservation
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="#" class="<?php echo $salesreport; ?>" title="SalesReport">
                    <i class="ri-line-chart-fill sidebar-menu-item-icon"></i>
                    Sales Report
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase"><b>CASHIER</b></li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#" class="<?php echo $payment; ?>" title="Payment">
                    <i class="ri-coins-fill sidebar-menu-item-icon"></i>
                    Payment
                </a>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase"><b>ADMIN</b></li>
            
            <li class="sidebar-menu-item has-dropdown">
                <a href="#" class="<?php echo $accommodation; ?>" title="Accommodation">
                    <i class="ri-building-fill sidebar-menu-item-icon"></i>
                    Accomodation
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../admin-accommodation/hotelrooms.php" class="<?php echo $hotelrooms; ?>" title="HotelRooms">
                            Hotel Rooms
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../admin-accommodation/villas.php" class="<?php echo $villas; ?>" title="Villas">
                            Villas
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../admin-accommodation/cottages.php" class="<?php echo $cottages; ?>" title="Cottages">
                            Cottages
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#" class="<?php echo $discpromo; ?>" title="Discount&Promo">
                    <i class="ri-price-tag-3-fill sidebar-menu-item-icon"></i>
                    Discount & Promo
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../discpromo/discount.php" class="<?php echo $disc; ?>" title="Discount">
                            Discounts
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../discpromo/promo.php" class="<?php echo $promo; ?>" title="Promo">
                            Promos
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item">
                <a href="../admin-accommodation/other-amenities.php" class="<?php echo $other; ?>" title="OtherAmenities">
                    <i class="ri-stack-fill sidebar-menu-item-icon"></i>
                    Other Amenities
                </a>
            </li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="" class="<?php echo $accounts; ?>" title="Accounts">
                    <i class="ri-account-pin-circle-fill sidebar-menu-item-icon"></i>
                    Accounts
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../admin-accommodation/staff.php" class="<?php echo $staff; ?>" title="Staff">
                            Staffs
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="#" class="<?php echo $customers; ?>" title="Customers">
                            Customers
                        </a>
                    </li>
                </ul>
</li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="" class="<?php echo $accommodation; ?>" title="Accommodation">
                <i class="ri-archive-fill sidebar-menu-item-icon"></i>
                    Archives
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../archived/hotelroom-archived.php" class="<?php echo $hotelrooms; ?>" title="HotelRooms">
                            Hotel Rooms
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../archived/villa-archived.php" class="<?php echo $villas; ?>" title="Villas">
                            Villas
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../archived/cottage-archived.php" class="<?php echo $cottages; ?>" title="Cottages">
                            Cottages
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../archived/otheramenities-archived.php" class="<?php echo $cottages; ?>" title="Cottages">
                            Other Amenities
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="../archived/discount-archived.php" class="<?php echo $cottages; ?>" title="Cottages">
                            Other Amenities
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item">
                <a href="#" class="<?php echo $settings; ?>" title="Settings">
                    <i class="ri-settings-5-fill sidebar-menu-item-icon"></i>
                    Settings
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow-sm">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">Dashboard</h5>
                <div class="dropdown me-3 d-none d-sm-block">
                    <div class="cursor-pointer dropdown-toggle navbar-link" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ri-notification-line"><span class="position-absolute top-30 start-20 translate-middle p-2 bg-danger border border-light rounded-circle"></i>
                    </div>
                    <div class="dropdown-menu fx-dropdown-menu">
                        <h5 class="p-3 bg-indigo text-light">Notification</h5>
                        <div class="list-group list-group-flush">
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-semibold"></div>
                                    <span class="fs-7">No. of Pending Reservation</span>
                                </div>
                                <span class=" badge rounded-pill bg-danger">14</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="me-2 d-none d-sm-block"><?php echo $_SESSION['fullname']; ?></span>
                        <img class="navbar-profile-image"
                            src="../image/photos/<?php echo $_SESSION['img']; ?>" alt="Image">
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li class="log-out"><a class="dropdown-item" href="../login/logout.php"><i class="ri-logout-circle-r-line sidebar-menu-item-icon"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <div class="py-4">
                <!-- start: Summary -->
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="#"
                            class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-primary">
                            <div>
                                <i class="ri-hotel-fill summary-icon bg-primary mb-2"></i>
                                <div class="label-hotel">Hotel Rooms</div>
                            </div>
                            <h4>20/20</h4>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="#"
                            class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-indigo">
                            <div>
                                <i class="ri-community-fill summary-icon bg-indigo mb-2"></i>
                                <div>Villas</div>
                            </div>
                            <h4>8/8</h4>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="#"
                            class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-success">
                            <div>
                                <i class="ri-home-4-fill summary-icon bg-success mb-2"></i>
                                <div>Cottages</div>
                            </div>
                            <h4>40/40</h4>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="#"
                            class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-danger">
                            <div>
                                <i class="ri-shopping-cart-2-line summary-icon bg-danger mb-2"></i>
                                <div>Sales</div>
                            </div>
                            <h4>100,000.00</h4>
                        </a>
                    </div>
                </div>
                <!-- end: Summary -->
                <!-- start: Graph -->
                <div class="row g-3 mt-2">
                    <div class="col-12 col-md-7 col-xl-8">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-white">
                                Sales
                            </div>
                            <div class="card-body">
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-xl-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-white">
                                Sales Table
                            </div>
                            <div class="card-body overflow-auto table-responsive">
                                <!-- <canvas id="visitors-chart"></canvas> -->
                                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Month</th>
                                            <th>Total Sales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>January</td>
                                            <td>150,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>February</td>
                                            <td>80,250.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>March</td>
                                            <td>80,125.00</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>April</td>
                                            <td>150,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>May</td>
                                            <td>150,000.00</td>
                                        </tr>
                                        <tr>
                                        <td>6</td>
                                            <td>June</td>
                                            <td>80,250.00</td>
                                        </tr>
                                        <tr>
                                        <td>7</td>
                                            <td>July</td>
                                            <td>80,125.00</td>
                                        </tr>
                                        <tr>
                                        <td>8</td>
                                            <td>August</td>
                                            <td>150,000.00</td>
                                        </tr>
                                        <tr>
                                        <td>9</td>
                                            <td>September</td>
                                            <td>150,000.00</td>
                                        </tr>
                                        <tr>
                                        <td>10</td>
                                            <td>October</td>
                                            <td>80,250.00</td>
                                        </tr>
                                        <tr>
                                        <td>11</td>
                                            <td>November</td>
                                            <td>80,125.00</td>
                                        </tr>
                                        <tr>
                                        <td>12</td>
                                            <td>December</td>
                                            <td>150,000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Graph -->
            </div>
            <!-- end: Content -->
        </div>
    </main>
    <!-- end: Main -->

    <!-- start: JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
    var table = $('#example').DataTable( 
    {
        "lengthMenu": [ [2, 4, -1], [2, 4, "All"] ]
    } );
 
        // new $.fn.dataTable.FixedHeader( table );
    } );
    </script>
    <!-- end: JS -->
</body>

</html>