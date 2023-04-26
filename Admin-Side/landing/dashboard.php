<?php
        //resume session here to fetch session values
        session_start();
        /*
            if user is not login then redirect to login page,
            this is to prevent users from accessing pages that requires
            authentication such as the dashboard
        */
        if (!isset($_SESSION['user_type']) || !in_array($_SESSION['user_type'], ['Admin', 'Cashier', 'Reservation Specialist'])){
            header('location: ../login/login.php');
        }

    require_once '../tools/variables.php';
    $page_title = 'Azzura | Dashboard';
    $dashboard = 'active';

    require_once '../includes/header.php';
?>
<body>
    <?php require_once '../includes/sidebar.php'; ?>

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

                <?php require_once '../includes/topnav.php'; ?>

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
                    <div class="col-12 col-md-12 col-xl-12">
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

    <?php require_once '../includes/dashboard_footer.php'; ?>
    <script>
    $(document).ready(function() {
    var table = $('#example').DataTable( 
    {
        "lengthMenu": [ [3, 4, -1], [3, 4, "All"] ]
    } );
 
        // new $.fn.dataTable.FixedHeader( table );
    } );
    </script>
    <!-- end: JS -->
    <?php require_once '../includes/footer.php'; ?>
