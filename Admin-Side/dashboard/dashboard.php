<?php
        //resume session here to fetch session values
        session_start();
        /*
            if user is not login then redirect to login page,
            this is to prevent users from accessing pages that requires
            authentication such as the dashboard
        */
        if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'admin'){
            header('location: ../dashboard/dashboard.php');
        }

    require_once '../tools/variables.php';
    $page_title = 'Azzura | Dashboard';
    $dashboard = 'active';

    require_once '../inclusion/header.php';
?>
<style>
    .mdc-card.info-card .card-inner .card-title{
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 9px;
    }
    .mdc-card.info-card .card-inner .card-icon-wrapper {
    position: absolute;
    right: 10px;
    top: 60%;
    transform: translateY(-50%);
    width: 45px;
    height: 45px;
    border-radius: 2px;
    background-color: #00b67a;
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    box-shadow: 0 0 10px 5px rgb(0 182 122 / 35%);
}
.mdc-card.info-card.info-card--success .card-inner .card-icon-wrapper {
    background-color: #296d98;
    box-shadow: 0 0 10px 5px rgb(0 182 122 / 35%);
}

</style>
<div class="body-wrapper">
    <?php require_once '../inclusion/adsidebar.php'; ?>
        <div class="main-wrapper mdc-drawer-app-content">
            <?php require_once '../inclusion/adheader.php'; ?>
            <span class="mdc-top-app-bar__title"> <h3 style="margin-left: 37px;"> Dashboard </h3></span>
                <div class="page-wrapper mdc-toolbar-fixed-adjust">
                    <main class="content-wrapper">
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                            <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title">Available Hotel Rooms</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">3</h5>
                                <p class="tx-12 text-muted">out of 20</p>
                                <div class="card-icon-wrapper">
                                <i class="fa-solid fa-hotel"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                            <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title">Available Villas</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">50</h5>
                                <p class="tx-12 text-muted">out of 8</p>
                                <div class="card-icon-wrapper">
                                <i class="fa-solid fa-house-chimney"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                            <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title">Available Cottages</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">100/200</h5>
                                <p class="tx-12 text-muted">out of 50   </p>
                                <div class="card-icon-wrapper">
                                <i class="fa-solid fa-umbrella-beach"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                            <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title">Monthly Sales</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">&#8369 2000</h5>
                                <p class="tx-12 text-muted">50% target reached</p>
                                <div class="card-icon-wrapper">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        </div>
                        </div>
                    </div>
                    </main>
                    <!-- partial:partials/_footer.html --> 
                    <?php require_once '../inclusion/adfooter.php'; ?>
                    <!-- partial -->
                </div>
        </div>
</div>

<?php require_once '../inclusion/adend.php'; ?>