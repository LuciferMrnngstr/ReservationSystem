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
    $page_title = 'Azzura | Reservation';
    $reservation = 'active';

    require_once '../includes/header.php';
?>
<style>
    #hotelrooms_table_paginate .paginate_button:hover {
        background-color: #0B6623 !important;
        color: white !important;
    }
    #hotelrooms_table_paginate .paginate_button.current:hover {
        background-color: #0B6623 !important;
        color: white !important;
        border-color: #0B6623 !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
        background: #0B6623 !important;
        color: white !important;
        border-color: #0B6623 !important;
    }
</style>
<body>
    <?php require_once '../includes/sidebar.php'; ?>

    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow-sm">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">Reservation</h5>
                <div class="dropdown me-3 d-none d-sm-block">
                    <div class="cursor-pointer dropdown-toggle navbar-link" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ri-notification-line"><span class="position-absolute top-30 start-20 translate-middle p-2 bg-danger border border-light rounded-circle"></i>
                    </div>
                    <?php require_once '../includes/topnav.php'; ?>
                </div>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Success!</strong><?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    <div class="card-header">
                        <h3 style="position: absolute;"> Manage Reservations </h3>
                        <!-- Button trigger modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" style="float: right; background-color: #0B6623;">
                           <a href="#" style="text-decoration: none; color: white;">Add Reservation</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table"  id="hotelrooms_table">
                            <thead>
                                <tr>
                                    <th scope="col"class="text-center">#</th>
                                    <th scope="col"class="text-center">Reference #</th>
                                    <th scope="col"class="text-center">Customer Name</th>
                                    <th scope="col"class="text-center">Date</th>
                                    <th scope="col"class="text-center">Checkin Date</th>
                                    <th scope="col"class="text-center">Checkout Date</th>
                                    <th scope="col"class="text-center">Status</th>
                                    <th scope="col"class="text-center">Total Amount</th>
                                    <th scope="col" style="white-space: nowrap;"class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    // Include the database class
                                    require_once '../classes/database.php';

                                    // Instantiate the Database class and get the connection
                                    $dsn = new Database();
                                    $pdo = $dsn->connect();

                                    
                                    try {
                                        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                                    } catch (PDOException $e) {
                                        echo 'Connection failed: ' . $e->getMessage();
                                    }
                                    
                                    $query = "SELECT 
                                    r.booking_number, 
                                    r.customer_fname, 
                                    r.created_at AS date_booked, 
                                    MIN(ra.start_date) AS checkin_date, 
                                    MAX(ra.end_date) AS checkout_date, 
                                    r.status, 
                                    SUM(ra.subtotal) AS total
                                  FROM 
                                    reservation r
                                    JOIN reservation_accommodation ra ON r.booking_number = ra.booking_number
                                    JOIN accommodations a ON ra.accommodation_id = a.id
                                  GROUP BY 
                                    r.booking_number";
                                    $stmt = $pdo->query($query);
                                    
                                    $i = 1;
                                    if ($stmt->rowCount() > 0) {
                                        while ($row = $stmt->fetch()) {
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['booking_number'] ?></td>
                                    <td><?php echo $row['customer_fname'] ?></td>
                                    <td><?php echo $row['date_booked'] ?></td>
                                    <td><?php echo $row['checkin_date'] ?></td>
                                    <td><?php echo $row['checkout_date'] ?></td>
                                    <td>
                                        <form action="" method="">
                                            <input type="hidden" name="" value="">
                                            <select class="form-select" aria-label="Default select example" >
                                                <option value="Pending">Pending</option>
                                                <option value="Confirmed">Confirmed</option>
                                                <option value="Canceled">Canceled</option>>
                                            </select>
                                        </form>
                                    </td>
                                    <td><?php echo $row['total'] ?></td>
                                    <td style="white-space: nowrap;">
                                        <a href="#"><i class="fa-solid fa-eye view_btn" style="color: #00308F; font-size: 1.3rem;"></i></a>
                                        <a href="#"><i class="fas fa-edit edit_btn"style="color: #3F704D; font-size: 1.3rem;"></i></a>
                                        <a href=""><i class="fa-solid fa-trash-can delete_btn" style="color: #C21807; font-size: 1.3rem;"></i></a>
                                    </td>
                                    
                                </tr>
                                <?php
                                $i++;
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
            
           
            <!-- end: Content -->
        </div>
    </main>
    <!-- end: Main -->

    <?php require_once '../includes/dashboard_footer.php'; ?>
<script>
  $(document).ready(function() {

$('#hotelrooms_table').DataTable();
});
</script>
    <!-- end: JS -->
    <?php require_once '../includes/footer.php'; ?>