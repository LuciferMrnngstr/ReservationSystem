<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="availability.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/0cc7e94eea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/89b0a6acae.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    
    <section class="header">
    <nav>
            <a href="#"><img src="images/logo.png" class="logo"></a>
            <div class="nav-links" id="navLinks">
                <i class='fa-sharp fa-solid fa-circle-xmark' onclick="hideMenu()"></i>
                <ul>
                
                    <li><a href="home.php">HOME</a></li>
                    <li class="dropdown"><a href="#">ACCOMODATION
                        <i class='bx bxs-chevron-down arrow'></i>   
                        </a>
                        <div class="dropdown_menu">
                           <a href="./accomodation/villa.php">VILLA'S</a>
                           <a href="./accomodation/hotel.php">HOTEL'S</a>
                           <a href="./accomodation/cottage.php">COTTAGES'S</a>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#">FILTERS
                        <i class='bx bxs-chevron-down arrow'></i>
                        </a>
                        <div class="dropdown_menu">
                           <a href="./filters/new.php">WHAT'S NEW</a>
                           <a href="./filters/events.php">EVENT</a>
                           <a href="./filters/services.php">SERVICES</a>
                           <a href="./filters/gallery.php">GALLERY</a>
                        </div>
                    </li>
                    <li><a href="#">LOCATION</a></li>
                    <li><a href="#">ABOUT US</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>

        </nav>
       <!--Login form container -->
       <div class="login_page" id="mylogin">
            <div class="login-container">
            <span class="close">&times;</span>
                <div class="welcome">
                    <a href="#"><img src="images/logo.png"style="width: 180px; margin-top: 150px;"></a>
                    <h2>New Here?</h2>
                    <p>Dive and Explore to our Hotel and Beach Resort.</p>
                    <button class="login_btn">Login</button>
                    <button class="register_btn">Sign-up</button>
                </div>
                
                <div class="register">
                    <form>
                        <h2>Register to your account</h2>
                        <p>Sign up using your social accounts.</p>
                        <div class="others"style="justify-content: center;">
                            <a href="#"><img src="images/fblogo.jpg" class="fblogo"></a>
                            <a href="#"><img src="images/goolelogo.jpg" class="googlelogo"></a>
                        </div>
                        <hr style="width:77%; margin-left: 92px;">
                        <br>
                        <input type="text" class="reg-input" placeholder="Lastname"id="lastname"name="lastname"required>
                        <input type="text" class="reg-input" placeholder="Firstname" id="firstname" name="firstname"required>
                        <input type="text" class="reg-input" placeholder="Middle Initial" id="middlename" name="middlename">
                        <input type="date" class="reg-input" placeholder="Date of Birth"id="password" name="password" required>
                        <input type="number" class="reg-input" placeholder="Age" id="age" name="age">
                        <input type="email" class="log-input" placeholder="Example@gmail.com" id="email" name="email"required>
                        <input type="text" class="log-input" placeholder="Username" id="username" name="username"required>
                        <input type="text" class="log-input" placeholder="Mobile number" id="mobile_number" name="mobile_number"required>
                        <input type="pasword" class="log-input" placeholder="Password" id="password" name="password"required>
                        <input type="submit" class="reg-btn" value="REGISTER" id="submit" name="submit">
                        
                    </form>
                </div>
                
                <div class="login">
                    <form>
                        <h2>Login to your account</h2>
                        <p>Login using your social accounts.</p>
                        <div class="others"style="justify-content: center;">
                            <a href="#"><img src="images/fblogo.jpg" class="fblogo"></a>
                            <a href="#"><img src="images/goolelogo.jpg" class="googlelogo"></a>
                        </div>
                        <hr style="width:63%; margin-left: 92px;">
                        <br>
                        
                        <input type="text" class="log-input" placeholder="Username" id="username" name="username"required>
                        <input type="password" class="log-input" placeholder="Password" id="password" name="password" required>
                        <input type="submit" class="log-btn" value="LOGIN" id="submit" name="submit">


                        <a href="#" class="forg-pass">forget password?</a>
                    </form>
                </div>
            </div>  

       </div>
        <div class="text-box">
           
                <hr class="header_line">    
                    <h1>AVAILABILITY</h1> 
                <hr class="header_line"> 
           
            
            <!--<h2> " EXTRAORDINARY EXPERIENCE "</h2>
            <p>A whole new hotel and beach resort experience unlike any other,<br>come and visit azzura for more
                exciting views and spots.
            </p>
            <a href="#" class="hero_btn"id="clickme">Sign-in</a>-->

            <div class="availability">
            <div class="status">
                <form action="availabilty.php" method="post">
                    <div class="content-form">
                        <div class="category">
                            <label for="check-in" class="edit"> CHECK-IN
                                <br><input type="date" id="check-in" name="check-in"required>
                            </label>
                            <label for="check-out" class="edit"> CHECK-OUT
                                <br><input type="date" id="check-out" name="check-out"required>
                            </label>
                        </div>
                        <div class="category-two">
                                <label for="adult" class="number"> ADULT
                                    <br><input type="number" id="adult" name="adult"required min="0"tabindex="1">
                                </label>
                                <label for="children" class="number"> CHILDREN
                                    <br><input type="number" id="children" name="children"required min="0"tabindex="3">
                                </label>
                            
                        </div>

                        <!--<input type="submit" id="submit" name="submit" value="Check Availabity">-->
                    </div>    
                    
                </form>
                <!--<a href="#" class="button">Check availability</a>-->
               
            </div>
       </div>

        </div>
    
    </section>

    <!--VILLA'S SECTION -->

    <section class="villa_section" data-aos="zoom-in-right">
        <div class="section_title">
            <hr class="title_line">    
                <h1>VILLA'S VACANCY</h1> 
            <hr class="title_line"> 
        </div>
        <div class="villa_container">
                <div class="image_container_box">
                        <div class="main-image">
                            <h2>Front view</h2>
                                <img src="images/profile.jpg" class="main">            
                        </div>
                        <div class="sub-image">
                            <h3>Inside View</h3>
                                <img src="images/profile.jpg" class="sub">
                                <img src="images/profile.jpg" class="sub">            
                                <img src="images/profile.jpg" class="sub">                  
                        </div>
                        <div class="see_more">
                            <a href="#">See more..</a>
                        </div>
                </div>

                <div class="container_box">
                    <!-- Description content --> 
                    <div class="description-text">
                        <div class="description-title">
                                <hr class="title_line">    
                                    <h1>Description</h1> 
                                <hr class="title_line"> 
                        </div>
                        <div class="text-container">
                            <ul>
                                <li><p>Guest Max: 15 </p></li>
                                <li><p>Size: 50m </p></li>
                                <li><p>Bed type: 3 Double Deck </p></li>
                                <li><p>Price: 7,000.00 Php </p></li>
                                <li><p>Villa number: 10 </p></li>
                            </ul> 
                        </div>
                        <div class="see_more">
                            <a href="#">See more..</a>
                        </div>
                    </div>
                    <!-- Inclusion content -->
                    <div class="inclusion-text">
                        <div class="inclusion-title">
                            <hr class="title_line">    
                                <h1>Inclusion</h1> 
                            <hr class="title_line"> 
                        </div>
                        <div class="text-container">
                            <ul>
                                <li><p>Guest Max: 15 </p></li>
                                <li><p>Size: 50m </p></li>
                                <li><p>Bed type: 3 Double Deck </p></li>
                                <li><p>Price: 7,000.00 Php </p></li>
                                <li><p>Villa number: 10 </p></li>
                            </ul> 
                        </div>
                    </div>
                    
                </div>
                <div class="booking_phase">
                    <button class="booknow">Book Now</button>
                </div> 
        </div>
    </section>

    <!-- HOTEL SECTION -->

    <section class="villa_section" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
        <div class="section_title">
            <hr class="title_line">    
                <h1>HOTEL'S VACANCY</h1> 
            <hr class="title_line"> 
        </div>

        <div class="villa_container">
                
                <div class="container_box">
                    <!-- Description content --> 
                    <div class="description-text">
                        <div class="description-title">
                                <hr class="title_line">    
                                    <h1>Description</h1> 
                                <hr class="title_line"> 
                        </div>
                        <div class="text-container">
                            <ul>
                                <li><p>Guest Max: 15 </p></li>
                                <li><p>Size: 50m </p></li>
                                <li><p>Bed type: 3 Double Deck </p></li>
                                <li><p>Price: 7,000.00 Php </p></li>
                                <li><p>Villa number: 10 </p></li>
                            </ul> 
                        </div>
                        <div class="see_more">
                            <a href="#">See more..</a>
                        </div>
                    </div>
                    <!-- Inclusion content -->
                    <div class="inclusion-text">
                        <div class="inclusion-title">
                            <hr class="title_line">    
                                <h1>Inclusion</h1> 
                            <hr class="title_line"> 
                        </div>
                        <div class="text-container">
                            <ul>
                                <li><p>Guest Max: 15 </p></li>
                                <li><p>Size: 50m </p></li>
                                <li><p>Bed type: 3 Double Deck </p></li>
                                <li><p>Price: 7,000.00 Php </p></li>
                                <li><p>Villa number: 10 </p></li>
                            </ul> 
                        </div>
                    </div>
                    
                </div>
                <div class="image_container_box">
                        <div class="main-image">
                            <h2>Front view</h2>
                                <img src="images/profile.jpg" class="main">            
                        </div>
                        <div class="sub-image">
                            <h3>Inside View</h3>
                                <img src="images/profile.jpg" class="sub">
                                <img src="images/profile.jpg" class="sub">            
                                <img src="images/profile.jpg" class="sub">                  
                        </div>
                        <div class="see_more">
                            <a href="#">See more..</a>
                        </div>
                </div>
                <div class="booking_phase_reverse">
                    <button class="booknow_reverse">Book Now</button>
                </div> 
        </div>
    </section>

    <!--COTTAGES SECTION -->

    <section class="villa_section" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="section_title">
            <hr class="title_line">    
                <h1>COTTAGE'S VACANCY</h1> 
            <hr class="title_line"> 
        </div>

        <div class="villa_container">
                <div class="image_container_box">
                        <div class="main-image">
                            <h2>Front view</h2>
                                <img src="images/profile.jpg" class="main">            
                        </div>
                        <div class="sub-image">
                            <h3>Inside View</h3>
                                <img src="images/profile.jpg" class="sub">
                                <img src="images/profile.jpg" class="sub">            
                                <img src="images/profile.jpg" class="sub">                  
                        </div>
                        <div class="see_more">
                            <a href="#">See more..</a>
                        </div>
                </div>

                <div class="container_box">
                    <!-- Description content --> 
                    <div class="description-text">
                        <div class="description-title">
                                <hr class="title_line">    
                                    <h1>Description</h1> 
                                <hr class="title_line"> 
                        </div>
                        <div class="text-container">
                            <ul>
                                <li><p>Guest Max: 15 </p></li>
                                <li><p>Size: 50m </p></li>
                                <li><p>Bed type: 3 Double Deck </p></li>
                                <li><p>Price: 7,000.00 Php </p></li>
                                <li><p>Villa number: 10 </p></li>
                            </ul> 
                        </div>
                        <div class="see_more">
                            <a href="#">See more..</a>
                        </div>
                    </div>
                    <!-- Inclusion content -->
                    <div class="inclusion-text">
                        <div class="inclusion-title">
                            <hr class="title_line">    
                                <h1>Inclusion</h1> 
                            <hr class="title_line"> 
                        </div>
                        <div class="text-container">
                            <ul>
                                <li><p>Guest Max: 15 </p></li>
                                <li><p>Size: 50m </p></li>
                                <li><p>Bed type: 3 Double Deck </p></li>
                                <li><p>Price: 7,000.00 Php </p></li>
                                <li><p>Villa number: 10 </p></li>
                            </ul> 
                        </div>
                    </div>
                    
                </div>
                <div class="booking_phase">
                    <button class="booknow">Book Now</button>
                </div> 
        </div>
    </section>   

    <!--UNSPLASH CONTENT-->

    <section class="background-content"data-aos="zoom-in-right">
        <div class="text-content">
            <p>
                A beach resort just one hour away from the city, it is a family resort<br> made to open
                everyone and anyone who wants to enjoy the beach<br> front and the fast growing amenities
                of the resort.
            </p>
        </div>

    </section>

     <!--CONTACT INFORMATION CONTENT-->

    <section class="contact-info"data-aos="fade-down-left">
        <h1>GET IN TOUCH</h1>
        <h3>Azzura Hotel & Beach Resort</h3>
        <div class="info">
            <i class="fa-solid fa-location-dot"><span>Barangay Bolong, Zamboanga City Mindanao 7000 Philippines</span></i>
            <i class="fa-solid fa-phone"><span>0995 569 2857</span></i>
            <i class="fa-solid fa-envelope"><span>Azzurabeachresort@gmail.com</span></i>
        </div>
        <h3>Others</h3>
        <div class="others">
            <a href="#"><img src="images/fblogo.jpg" class="fblogo"></a>
            <a href="#"><img src="images/goolelogo.jpg" class="googlelogo"></a>
        </div>

    </section>

    <!--FOOTER CONTENT-->

    <section class="footer">
        <div class="footer-text">
            <p>Copyright @ 2022 Azzura. All rights reserved. Powered by ROTcorp. <br>Terms and Conditions
        </p>
        </div>
    </section>

    <!--JAVASCRIPT CONTENT HERE-->
    
    <script>
        var navLinks = document.getElementById("navLinks")
        function showMenu(){
            navLinks.style.right ="0";
        }
        function hideMenu(){
            navLinks.style.right ="-270px";
        }
        AOS.init();


        // Get the Login_page
        var login_page = document.getElementById("mylogin");

        // Get the button that opens the Login_page
        var hero_btn = document.getElementById("clickme");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the Login_page 
        hero_btn.onclick = function() {
            login_page.style.display = "block";
        }

        // When the user clicks on <span> (x), close the Login_page
        span.onclick = function() {
            login_page.style.display = "none";
        }
        span.onclick = function() {
            login_page.style.display = "none";
        }
           
    </script>
    <script src="script.js"></script>
</body>
</html>