<!-- start: Sidebar -->
<div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <img src="../image/azzuralogo.png" alt="Azzura Logo" style="width: 80px; height: 20px; margin-left: 60px; width: 125px; height: 45px; position: absolute;">
            <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item <?php echo $dashboard; ?>">
                <a href="../landing/dashboard.php" title="Dashboard">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-menu-item <?php echo $reservation; ?>">
                <a href="../reservation/reservation.php" title="Reservation">
                    <i class="ri-calendar-check-fill sidebar-menu-item-icon"></i>
                    Reservation
                </a>
            </li>
            <li class="sidebar-menu-item <?php echo $salesreport; ?>">
                <a href="#" title="SalesReport">
                    <i class="ri-line-chart-fill sidebar-menu-item-icon"></i>
                    Sales Report
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase"><b>CASHIER</b></li>
            <li class="sidebar-menu-item has-dropdown <?php echo $payment; ?>">
                <a href="#" title="Payment">
                    <i class="ri-coins-fill sidebar-menu-item-icon"></i>
                    Payment
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase"><b>ADMIN</b></li>
            <li class="sidebar-menu-item has-dropdown <?php echo $accommodation; ?>">
                <a href="#" title="Accommodation">
                    <i class="ri-building-fill sidebar-menu-item-icon"></i>
                    Accomodation
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item <?php echo $hotelrooms; ?>">
                        <a href="../admin-accommodation/hotelrooms.php" title="HotelRooms">
                            Hotel Rooms
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item <?php echo $villas; ?>">
                        <a href="../admin-accommodation/villas.php" title="Villas">
                            Villas
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item <?php echo $cottages; ?>">
                        <a href="../admin-accommodation/cottages.php" title="Cottages">
                            Cottages
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item has-dropdown <?php echo $discpromo; ?>">
                <a href="#" title="Discount&Promo">
                    <i class="ri-price-tag-3-fill sidebar-menu-item-icon"></i>
                    Discount & Promo
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item <?php echo $disc; ?>">
                        <a href="../discpromo/discount.php" title="Discount">
                            Discounts
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item <?php echo $promo; ?>">
                        <a href="../discpromo/promo.php" title="Promo">
                            Promos
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item <?php echo $other; ?>">
                <a href="../admin-accommodation/other-amenities.php" title="OtherAmenities">
                    <i class="ri-stack-fill sidebar-menu-item-icon"></i>
                    Other Amenities
                </a>
            </li>
            <li class="sidebar-menu-item has-dropdown <?php echo $accounts; ?>">
                <a href="#" title="Accounts">
                    <i class="ri-account-pin-circle-fill sidebar-menu-item-icon"></i>
                    Accounts
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item <?php echo $staff; ?>">
                        <a href="../accounts/staff.php" title="Staff">
                            Staffs
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item <?php echo $customers; ?>">
                        <a href="#" title="Customers">
                            Customers
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item has-dropdown <?php echo $accommodation; ?>">
                <a href="" title="Accommodation">
                <i class="ri-archive-fill sidebar-menu-item-icon"></i>
                    Archives
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item <?php echo $hotelrooms; ?>">
                        <a href="../archived/hotelroom-archived.php" title="HotelRooms">
                            Hotel Rooms
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item <?php echo $villas; ?>">
                        <a href="../archived/villa-archived.php" title="Villas">
                            Villas
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item <?php echo $cottages; ?>">
                        <a href="../archived/cottage-archived.php" title="Cottages">
                            Cottages
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item <?php echo $cottages; ?>">
                        <a href="../archived/otheramenities-archived.php" title="Cottages">
                            Other Amenities
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item <?php echo $settings; ?>">
                <a href="#" title="Settings">
                    <i class="ri-settings-5-fill sidebar-menu-item-icon"></i>
                    Settings
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->