<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#top" class="logo">
        <img src="../assets/assets/img/bubblebest logo.png" width="160" height="50" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="../assets/assets/img/bubblebest logo.png" width="190" height="50" alt="Footcap logo">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#top" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#item" class="navbar-link">Items</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About</a>
          </li>

          <li class="navbar-item">
            <a href="#foot" class="navbar-link">Contact</a>
          </li>
        </ul>

        <ul class="nav-action-list">

          <li>
            <button class="nav-action-btn">
              <ion-icon name="notifications-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Notification</span>

              <data class="nav-action-badge" value="5" aria-hidden="true">5</data>
            </button>
          </li>
          
          <li>
            <button class="nav-action-btn">
              <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Calendar</span>
            </button>
          </li>

          <li>
            <button class="nav-action-btn">
              <a href="cart.html"><ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

              <data class="nav-action-text" value="318.00">Cart: <strong>$318.00</strong></data>

              <data class="nav-action-badge" value="4" aria-hidden="true">4</data></a>
            </button>
          </li>
          <?php if(isset($_SESSION['fullname'])): ?>
          <li>
              <a href="#" class="nav-action-btn">
                <h4><?php echo $_SESSION['fullname']; ?></h4>
              </a>
          </li>
          <h4 class="breaker">|</h4>
          <li>
            <a href="../login/logout.php" class="nav-action-btn">
              <h4>logout</h4>
            </a>
          </li>
          <?php else: ?>
          <li>
              <a href="../login/login.php" class="nav-action-btn">
                <h4>Login</h4>
              </a>
          </li>
          <h4 class="breaker">|</h4>
          <li>
            <a href="../login/register.php" class="nav-action-btn">
              <h4>Signup</h4>
            </a>
          </li>
          <?php endif; ?>
        </ul>

      </nav>

    </div>
</header>