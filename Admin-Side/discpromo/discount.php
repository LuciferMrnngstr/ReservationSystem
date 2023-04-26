<?php
//resume session here to fetch session values
session_start();
/*
            if user is not login then redirect to login page,
            this is to prevent users from accessing pages that requires
            authentication such as the dashboard
        */
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'Admin') {
    header('location: ../login/login.php');
}

require_once '../tools/variables.php';
$page_title = 'Azzura | Discounts';


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0cc7e94eea.js" crossorigin="anonymous"></script>


    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- end: CSS -->
    <script src="https://kit.fontawesome.com/0cc7e94eea.js" crossorigin="anonymous"></script>
    <title><?php echo $page_title ?></title>
    <style>
        .form-control {
            word-wrap: break-word;
        }

        .modal-dialog {
            top: -18%;
        }


        
        body > main > div > div.container.mt-5 > div > div > div > div.card-body > table > tbody > tr:nth-child(1) > td:nth-child(8) > a:nth-child(2) > i{
            color: #3F704D;
            font-size: 1.3rem;
        }
        body > main > div > div.container.mt-5 > div > div > div > div.card-body > table > tbody > tr:nth-child(1) > td:nth-child(8) > a:nth-child(3) > i{
            color: #C21807;
            font-size: 1.3rem;
        }
        body > main > div > div.container.mt-5 > div > div > div > div.card-body > table > tbody > tr:nth-child(1) > td:nth-child(8) > a:nth-child(1) > i{
            color: #00308F;
            font-size: 1.3rem;
        }
        table.dataTable tbody th, table.dataTable tbody td {
            padding: 8px 9px;
        }

        
    </style>
</head>

<body>
    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <img src="../image/azzuralogo.png" alt="Azzura Logo" style="width: 80px; height: 20px; margin-left: 60px; width: 125px; height: 45px; position: absolute;">
            <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item">
                <a href="../html/dashboard.php" class="<?php echo $dashboard; ?>" title="Dashboard">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="#" class="<?php echo $reservation; ?>" title="Reservation">
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
                    <li class="sidebar-dropdown-menu-item active">
                        <a href="discount.php" class="<?php echo $disc; ?>" title="Discount">
                            Discounts
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="promo.php" class="<?php echo $promo; ?>" title="Promo">
                            Promos
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item">
                <a href="other-amenities.php" class="<?php echo $other; ?>" title="OtherAmenities">
                    <i class="ri-stack-fill sidebar-menu-item-icon"></i>
                    Other Amenities
                </a>
            </li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#" class="<?php echo $accounts; ?>" title="Accounts">
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
            <li class="sidebar-menu-item">
                <a href="#" class="<?php echo $archives; ?>" title="Archives">
                    <i class="ri-archive-fill sidebar-menu-item-icon"></i>
                    Archives
                </a>
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
                <h5 class="fw-bold mb-0 me-auto">Discounts</h5>
                <div class="dropdown me-3 d-none d-sm-block">
                    <div class="cursor-pointer dropdown-toggle navbar-link" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-notification-line"><span class="position-absolute top-30 start-20 translate-middle p-2 bg-danger border border-light rounded-circle"></i>
                    </div>
                    <div class="dropdown-menu fx-dropdown-menu">
                        <h5 class="p-3 bg-indigo text-light">Notification</h5>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
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
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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

    <?php require_once 'adddiscount.php'; ?>

    <!-- View Cottages Modal -->
    <div class="modal fade" id="hotelroomsVIEWModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Discount Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="hotelrooms_viewing_data">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View Cottages Modal -->


    <?php require_once 'editdiscount.php'; ?>
    


    <!-- Delete Cottage Modal -->
    <div class="modal fade" id="deleteHotelroomsModal" tabindex="-1" aria-labelledby="deleteHotelroomsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteHotelroomsModalLabel">Delete Discount</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="discountcode.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="discount_id" id="delete_id">
                        <h4>Are you sure, you want to delete this data?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="delete_hotelroom" class="btn btn-danger">Yes. Delete</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <!-- End of Delete Cottage Modal -->


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
                        <h3 style="position: absolute;"> Manage Discounts </h3>
                        <!-- Button trigger modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" style="float: right; background-color: #0B6623;" data-bs-toggle="modal" data-bs-target="#hotelroomModal">
                            Add New Discount
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table"  id="hotelrooms_table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Discount Name</th>
                                    <th scope="col" style="white-space: pre-wrap; max-width: 200px;">Discount Type </th>
                                    <th scope="col">Discount Value</th>
                                    <th scope="col" style="white-space: pre-wrap; max-width: 200px;">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" style="white-space: nowrap;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $dsn = 'mysql:host=localhost;dbname=testing';
                                    $username = 'root';
                                    $password = '';
                                    
                                    try {
                                        $pdo = new PDO($dsn, $username, $password);
                                        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                                    } catch (PDOException $e) {
                                        echo 'Connection failed: ' . $e->getMessage();
                                    }
                                    
                                    $query = "SELECT * FROM discounts";
                                    $stmt = $pdo->query($query);
                                    
                                    if ($stmt->rowCount() > 0) {
                                        while ($row = $stmt->fetch()) {
                                ?>
                                        <tr>
                                            <td class="discount_id"><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['dname']; ?></td>
                                            <td style="white-space: pre-wrap; max-width: 200px;"><?php echo $row['dtype']; ?></td>
                                            <td><?php echo $row['dvalue']; ?></td>
                                            <td style="white-space: pre-wrap; max-width: 200px;"><?php echo $row['start_date']; ?></td>
                                            <td><?php echo $row['end_date']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td style="white-space: nowrap;">
                                                <a href="#"><i class="fa-solid fa-eye view_btn" style="color: #00308F; font-size: 1.3rem;"></i></a>
                                                <a href="#"><i class="fas fa-edit edit_btn"style="color: #3F704D; font-size: 1.3rem;"></i></a>
                                                <a href=""><i class="fa-solid fa-trash-can delete_btn" style="color: #C21807; font-size: 1.3rem;"></i></a>
                                            </td>
                                        </tr>
                                <?php
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



    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    


    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>



    <!-- DATA TABLE -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- End DATA TABLE -->
    
    <!-- Script main JS. -->

    <!--  script content -->
    <script src=""></script>
    <script>
        
        $(document).ready(function() {

            $('#hotelrooms_table').DataTable();

            $('.delete_btn').click(function (e) { 
                e.preventDefault();

                var discount_id = $(this).closest('tr').find('.discount_id').text();
                // console.log(discount_id);
                $('#delete_id').val(discount_id);
                $('#deleteHotelroomsModal').modal('show');

            });







            $('.edit_btn').click(function(e) {
                e.preventDefault();

                var discount_id = $(this).closest('tr').find('.discount_id').text();
                // console.log(discount_id);


                // Edit Hotelrooms
                $.ajax({
                    type: "POST",
                    url: "discountcode.php ",
                    data: {
                        'checking_edit_btn': true,
                        'discount_id': discount_id,
                    },
                    success: function(response) {
                        // console.log(response);

                        $.each(response, function(key, value) {
                            // console.log(value['rtype']);

                            $('#edit_id').val(value['id']);
                            $('#edit_dname').val(value['dname']);
                            $('#edit_dtype').val(value['dtype']);
                            $('#edit_dvalue').val(value['dvalue']);
                            $('#edit_start_date').val(value['start_date']);
                            $('#edit_end_date').val(value['end_date']);
                            $('#edit_status_available').prop('checked', value['status'] === 'Available');
                            $('#edit_status_unavailable').prop('checked', value['status'] === 'Unavailable');

                        });

                        $('#editHotelroomModal').modal('show');

                    }
                });
            });

            $('.view_btn').click(function(e) {
                e.preventDefault();

                var discount_id = $(this).closest('tr').find('.discount_id').text();
                // console.log(discount_id);

                $.ajax({
                    type: "POST",
                    url: "discountcode.php ",
                    data: {
                        'checking_viewbtn': true,
                        'discount_id': discount_id,
                    },
                    success: function(response) {
                        // console.log(response);
                        $('.hotelrooms_viewing_data').html(response);
                        $('#hotelroomsVIEWModal').modal('show');

                    }
                });
            });

            
        });


        
    </script>


</body>

</html>