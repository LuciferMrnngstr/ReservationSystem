<?php
  //resume session here to fetch session values
  session_start();

    require_once '../tools/variables.php';
    $page_title = 'BubbleBest | Dashboard';
    $dashboard = 'active';

    require_once '../includes/header.php';
    require_once '../includes/topnav.php';
?>

<main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" style="background-image: url('../assets/assets/images/hero-banner.png')">
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
              <div class="collection-card" style="background-image: url('../assets/assets/images/gallonanddis.png')">
                <h3 class="h4 card-title midcard">Buy 10 Galons + 1 free Rerent of Water Dispenser</h3>

                <a href="#" class="btn btn-secondary">
                  <span><strong>ADD TO CART</strong></span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

            <li>
              <div class="collection-card" style="background-image: url('../assets/assets/images/gallonandgallon.png')">
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
                  <img src="../assets/assets/img/Round.png" width="312" height="350" loading="lazy"
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
                  <img src="../assets/assets/img/Slim.png" width="312" height="350" loading="lazy"
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
                  <img src="../assets/assets/img/big jar cap.png" width="312" height="350" loading="lazy"
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
                  <img src="../assets/assets/img/small jar cap.png" width="312" height="350" loading="lazy"
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
                  <img src="../assets/assets/img/faucet.png" width="312" height="350" loading="lazy"
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
                  <img src="../assets/assets/img/faucet2.png" width="312" height="350" loading="lazy"
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
                  <img src="../assets/assets/images/service-1.png" width="53" height="28" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">Free Shiping</h3>

                  <p class="card-text">
                    All orders over <span>&#8369 7000</span>
                  </p>
                </div>

              </div>
            </li>

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="../assets/assets/images/service-2.png" width="43" height="35" loading="lazy" alt="Service icon">
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
                  <img src="../assets/assets/images/service-3.png" width="40" height="40" loading="lazy" alt="Service icon">
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
                  <img src="../assets/assets/images/service-4.png" width="40" height="40" loading="lazy" alt="Service icon">
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



<?php

    require_once '../includes/footer.php';
?>