<?php
 require_once 'adhead.php';
 ?>

 <style>
  .mdc-drawer .mdc-drawer__header .brand-logo {
    display: block;
    padding: 10px 0;
  }
   hr{
    border: 1px solid gray;
    width: 86%;
   }
 </style>

<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="#" class="brand-logo">
          <img src="../image/azzuralogo.png" alt="logo" style="width: 170px; height: 50px;">
        </a>
      </div>
      <hr>
      <div class="mdc-drawer__content">
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="admin.html">
              <i class='bx bx-grid-alt' ></i>
                <span class="menu-bar">Dashboard</span>
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
              <i class="fa-solid fa-hotel"></i>
                <span class="menu-bar">Accommodation</span>
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Hotel Rooms
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Villas
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Cottages
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menus">
              <i class="fa-solid fa-tags"></i>
                <span class="menu-bar">Discounts and Promos</span>
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menus">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Discounts
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                      Promos
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
              <i class="fa-solid fa-coins"></i>
                <span class="menu-bar">Payments</span>
              </a>
            </div>  
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
              <i class='bx bxs-report'></i>
                <span class="menu-bar">Sales Report</span>
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
              <i class="fa-solid fa-house-circle-check"></i>
                <span class="menu-bar">Reservation</span>
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menus1">
              <i class="fa-solid fa-users-gear"></i>
                <span class="menu-bar">Accounts</span>
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menus1">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                    <span class="menu-bar">Staff</span>
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#">
                    <span class="menu-bar">Customers</span>
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
              <i class='bx bxs-cube'></i>
                <span class="menu-bar">Other Amenities</span>
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
              <i class="fa-solid fa-folder-open"></i>
                <span class="menu-bar">Archives</span>
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
              <i class='bx bx-cog' ></i>
                <span class="menu-bar">Settings</span>
              </a>
            </div>
          </nav>
        </div>
      </div>
</aside>