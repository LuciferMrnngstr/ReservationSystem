<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bubble Best - Quench your thirst</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./bblogo.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload banner
  -->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#top" class="logo">
        <img src="./assets/img/bubblebest logo.png" width="160" height="50" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/img/bubblebest logo.png" width="190" height="50" alt="Footcap logo">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#top" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#item" class="navbar-link">Items</a>
          </li>

          <li class="navbar-item">
            <a href="#foot" class="navbar-link">About</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Contact</a>
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

          <li>
              <a href="login.php" class="nav-action-btn">
                <h4>Login</h4>
              </a>
          </li>
          <h4 class="breaker">|</h4>
          <li>
            <a href="register.php" class="nav-action-btn">
              <h4>Signup</h4>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" style="background-image: url('./assets/images/hero-banner.png')">
        <div class="container">

          <h2 class="h1 hero-title">
            New Summer <strong>Water Refilling</strong>
          </h2>

          <p class="hero-text">
            Say goodbye to the hassle and expense of buying bottled water and switch to our online water refilling
             service for fresh, 
             clean and affordable drinking water delivered straight to your doorstep.
          </p>
          <a href="#promo">
          <button class="btn btn-primary">
            <span>Shop Now</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </button>
          </a> 
        </div>
      </section>





      <!-- 
        - #COLLECTION
      -->

      <section class="section collection" id="promo">
        <div class="container">

          <h2 class="h2 section-title">Promo</h2>

          <ul class="collection-list has-scrollbar">

            <li>
              <div class="collection-card" style="background-image: url('./assets/images/gallonanddis.png')">
                <h3 class="h4 card-title midcard">Buy 10 Galons + 1 free Rerent of Water Dispenser</h3>

                <a href="#" class="btn btn-secondary">
                  <span><strong>ADD TO CART</strong></span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

            <li>
              <div class="collection-card" style="background-image: url('./assets/images/gallonandgallon.png')">
                <h3 class="h4 card-title midcard">Buy 10 Galons + 1 Galon free Refill</h3>

                <a href="#" class="btn btn-secondary">
                  <span><strong>ADD TO CART</strong></span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->

      <section class="section product" id="item">
        <div class="container">

          <h2 class="h2 section-title">Items</h2>

          <div class="filter-list" id="myBtnContainer">

           
              <button class="filter-btn  active" onclick="filterSelection('all')">All</button>

              <button class="filter-btn" onclick="filterSelection('sho')">Shop Items</button>
          
              <button class="filter-btn" onclick="filterSelection('mis')">Miscellaneous</button>
            

          </div>

          <div class="product-list">

            <div class="product-item sho">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/img/Round.png" width="312" height="350" loading="lazy"
                    alt="Running Sneaker Shoes" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Shop Item Galon Round</a>
                  </h3>

                  <data class="card-price" value="180.85">&#8369 180.85</data>

                </div>

              </div>
            </div>

            <div class="product-item sho">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/img/Slim.png" width="312" height="350" loading="lazy"
                    alt="Leather Mens Slipper" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Shop Item Galon Slim</a>
                  </h3>

                  <data class="card-price" value="190.85">&#8369 190.85</data>

                </div>

              </div>
            </div>

            <div class="product-item mis">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/img/big jar cap.png" width="312" height="350" loading="lazy"
                    alt="Simple Fabric Shoe" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Sample Miscellaneous item</a>
                  </h3>

                  <data class="card-price" value="160.85">&#8369 160.85</data>

                </div>

              </div>
            </div>

            <div class="product-item mis">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/img/small jar cap.png" width="312" height="350" loading="lazy"
                    alt="Air Jordan 7 Retro " class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Sample Miscellaneous item</a>
                  </h3>

                  <data class="card-price" value="170.85">&#8369 170.85 <del>&#8369 200.21</del></data>

                </div>

              </div>
            </div>

            <div class="product-item mis">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/img/faucet.png" width="312" height="350" loading="lazy"
                    alt="Leather Mens Slipper" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Sample Miscellaneous item</a>
                  </h3>

                  <data class="card-price" value="190.85">&#8369 190.85</data>

                </div>

              </div>
            </div>

            <div class="product-item mis">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/img/faucet2.png" width="312" height="350" loading="lazy"
                    alt="Leather Mens Slipper" class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Sample Miscellaneous item</a>
                  </h3>

                  <data class="card-price" value="190.85">&#8369 190.85</data>

                </div>

              </div>
            </div>

          </div>>
        </div>
      </section>


      <!-- 
        - #SERVICE
      -->

      <section class="section service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-1.png" width="53" height="28" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">Free Shiping</h3>

                  <p class="card-text">
                    All orders over <span>$150</span>
                  </p>
                </div>

              </div>
            </li>

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-2.png" width="43" height="35" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">Quick Payment</h3>

                  <p class="card-text">
                    100% secure payment
                  </p>
                </div>

              </div>
            </li>

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-3.png" width="40" height="40" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">Free Returns</h3>

                  <p class="card-text">
                    Money back in 30 days
                  </p>
                </div>

              </div>
            </li>

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-4.png" width="40" height="40" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">24/7 Support</h3>

                  <p class="card-text">
                    Get Quick Support
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>
  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="foot"

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/img/bubblebest logo.png" width="160" height="50" alt="Footcap logo">
          </a>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Contact Us</p>
            </li>

            <li>
              <address class="footer-link">
                <ion-icon name="location"></ion-icon>

                <span class="footer-link-text">
                  2751 S Parker Rd, Aurora, CO 80014, United States
                </span>
              </address>
            </li>

            <li>
              <a href="tel:+557343673257" class="footer-link">
                <ion-icon name="call"></ion-icon>

                <span class="footer-link-text">+557343673257</span>
              </a>
            </li>

            <li>
              <a href="mailto:footcap@help.com" class="footer-link">
                <ion-icon name="mail"></ion-icon>

                <span class="footer-link-text">footcap@help.com</span>
              </a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">My Account</p>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">My Account</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">View Cart</span>
              </a>
            </li>

          </ul>

          <div class="footer-list">

            <p class="footer-list-title">Opening Time</p>

            <table class="footer-table">
              <tbody>

                <tr class="table-row">
                  <th class="table-head" scope="row">Mon - Tue:</th>

                  <td class="table-data">8AM - 5PM</td>
                </tr>

                <tr class="table-row">
                  <th class="table-head" scope="row">Wed:</th>

                  <td class="table-data">8AM - 5PM</td>
                </tr>

                <tr class="table-row">
                  <th class="table-head" scope="row">Fri:</th>

                  <td class="table-data">8AM - 5PM</td>
                </tr>

                <tr class="table-row">
                  <th class="table-head" scope="row">Sat:</th>

                  <td class="table-data">8AM - 5PM</td>
                </tr>

                <tr class="table-row">
                  <th class="table-head" scope="row">Sun:</th>

                  <td class="table-data">Closed</td>
                </tr>

              </tbody>
            </table>

          </div>

          <div class="footer-list">

            <p class="footer-list-title">Newsletter</p>

            <p class="newsletter-text">
              Authoritatively morph 24/7 potentialities with error-free partnerships.
            </p>

            <form action="" class="newsletter-form">
              <input type="email" name="email" required placeholder="Email Address" class="newsletter-input">

              <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>

          </div>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="#" class="copyright-link">CyberSpace</a>
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top-btn" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
  <script>
    function menuToggle(){
        const toggleMenu = document.querySelector('.menu')
        toggleMenu.classList.toggle('active')
    }
  </script>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>