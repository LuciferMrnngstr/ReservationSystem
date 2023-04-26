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