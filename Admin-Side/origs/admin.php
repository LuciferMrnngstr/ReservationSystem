<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BubbleBest</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assetsa/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assetsa/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assetsa/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assetsa/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assetsa/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./bblogo.svg" type="image/svg+xml">
</head>
<body>
<script src="assetsa/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.html" class="brand-logo">
          <img src="assetsa/img/bubblebest logo1.png" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name">Owner owner</p>
          <p class="email">bubblebest@gmail.com</p>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="admin.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Overview
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"><img src="assetsa/img/order.png"></i>
                Orders
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Pending Orders
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Orders List
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      History
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menus">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"><img src="assetsa/img/product.png"></i>
                Products
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menus">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Home Products
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Add-ons
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Promo
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menus1">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"><img src="assetsa/img/dispenser.png"></i>
                Dispensers
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menus1">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Dispenser
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Dispenser Rented
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Dispenser History
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menus2">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"><img src="assetsa/img/account.png"></i>
                Accounts
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menus2">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Owner
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Admin
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Customer
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"><img src="assetsa/img/sale.png"></i>
                Sales Activity
              </a>
            </div>  
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"><img src="assetsa/img/setting.png"></i>
                Settings
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      General
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Payments
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Coupon
                    </a>
                  </div>
                </nav>
              </div>
            </div>
          </nav>
        </div>
        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="javascript:;">Logout</a>
        </div>
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title"> <h3> Greetings Owner! </h3></span>
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="assetsa/img/cat.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name">TJ Torrico</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-account-edit-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Edit profile</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-settings-outline text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Logout</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-settings"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-alert-circle-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Settings</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-progress-download text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Update</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-bell"></i>
                <span class="count-indicator">
                  <span class="count">4</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> Notifications</h6>
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-email-outline"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">You received a new email message</h6>
                      <small class="text-muted"> 6 min ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-account-outline"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">New user registered</h6>
                      <small class="text-muted"> 15 min ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-alert-circle-outline"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">System Alert</h6>
                      <small class="text-muted"> 2 days ago </small>
                    </div>
                  </li> 
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-update"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">You have a new update</h6>
                      <small class="text-muted"> 3 days ago </small>
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success">
                  <div class="card-inner">
                    <h5 class="card-title">Total Employees</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">3</h5>
                    <div class="card-icon-wrapper">
                      <i class="material-icons"><img src="assetsa/img/profile2.png"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--danger">
                  <div class="card-inner">
                    <h5 class="card-title">Total Customers</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">50</h5>
                    <div class="card-icon-wrapper">
                      <i class="material-icons"><img src="assetsa/img/profile2.png"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--primary">
                  <div class="card-inner">
                    <h5 class="card-title">Stocks</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">100/200</h5>
                    <p class="tx-12 text-muted">50% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">trending_up</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--primary">
                  <div class="card-inner">
                    <h5 class="card-title">Profit</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">&#8369 2000</h5>
                    <p class="tx-12 text-muted">50% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">trending_up</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <div class="row" style="flex-wrap: wrap;">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Latest Sales</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">NAME</th>
                                            <th class="border-top-0">STATUS</th>
                                            <th class="border-top-0">DATE</th>
                                            <th class="border-top-0">PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
    
                                            <td class="txt-oflo">Sibar Ahamad</td>
                                            <td><span class="label label-ongo label-rounded">Ongoing</span> </td>
                                            <td class="txt-oflo">April 18, 2021</td>
                                            <td><span class="font-medium">&#8369 213</span></td>
                                        </tr>
                                        <tr>
    
                                            <td class="txt-oflo">Ralph Clemente</td>
                                            <td><span class="label label-ongo label-rounded">Ongoing</span></td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="font-medium">&#8369 250</span></td>
                                        </tr>
                                        <tr>
    
                                            <td class="txt-oflo">Albert Luna</td>
                                            <td><span class="label label-success label-rounded">Completed</span></td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="font-medium">&#8369 1250</span></td>
                                        </tr>
                                        <tr>
    
                                            <td class="txt-oflo">Beatrice Suficiencia</td>
                                            <td><span class="label label-success label-rounded">Completed</span></td>
                                            <td class="txt-oflo">April 20, 2021</td>
                                            <td><span class="font-medium">&#8369 25</span></td>
                                        </tr>
                                        <tr>
    
                                            <td class="txt-oflo">TJ Torrico</td>
                                            <td><span class="label label-success label-rounded">Completed</span></td>
                                            <td class="txt-oflo">April 21, 2021</td>
                                            <td><span class="font-medium">&#8369 50</span></td>
                                        </tr>
                                        <tr>
    
                                            <td class="txt-oflo">Jaydee Ballaho</td>
                                            <td><span class="label label-success label-rounded">Completed</td>
                                            <td class="txt-oflo">April 23, 2021</td>
                                            <td><span class="font-medium">&#8369 1214</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </main>
        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="#" target="_blank">CyberSpace </a>2020</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="assetsa/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="assetsa/vendors/chartjs/Chart.min.js"></script>
  <script src="assetsa/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assetsa/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assetsa/js/material.js"></script>
  <script src="assetsa/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assetsa/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html> 