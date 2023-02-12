<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
                    <li class="dropdown"><a href="./accomodation/accommodation.php">ACCOMODATION
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
            <h1>EXPLORE</h1>
            <h2> " EXTRAORDINARY EXPERIENCE "</h2>
            <p>A whole new hotel and beach resort experience unlike any other,<br>come and visit azzura for more
                exciting views and spots.
            </p>
            <a href="#" class="hero_btn"id="clickme">Sign-in</a>
            

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

                        <input type="submit" id="submit" name="submit" value="Check Availabity">
                    </div>    
                    
                </form>
                <!--<a href="#" class="button">Check availability</a>-->
               
            </div>
       </div>

        </div>
        
        
    </section>
        
    <section class="container" data-aos="zoom-in-right">
        <h2 class="text">Welcome to</h1>
        <h1 class="title">Azzura Hotel and Beach Resort</h1>
        <p class="paragraph">Find Azzura in Bolong Zamboanga City, Azzura are designed to merge intimate <br>
            stays in one instagram worthy space for you, our guests.
        </p>
        <div class="row">
            <div class="container-col">
                <img src="images/bed_con.png"style="width: 100px;">
                <h3>Fully furnished airconditioned rooms</h3>

            </div>
            <div class="container-col">
                <img src="images/costumer.png"style="width: 100px;">
                <h3>High Costumer<br>Satisfaction</h3>

            </div>
            <div class="container-col">
                <img src="images/convenient.webp"style="width: 100px;">
                <h3>Convenient <br>Location</h3>

            </div>
            <div class="container-col">
                <img src="images/clean.jpg"style="width: 100px;">
                <h3>Clean and green surroundings</h3>

            </div>
            <div class="container-col">
                <img src="images/secured.jpg"style="width: 100px;">
                <h3>Peaceful and <br>secured place</h3>

            </div>
        </div>
    </section>

    <section class="image-container"data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">

        <h1>Azzura New Exciting Experience</h1>
        <div class="row">
            <div class="image-col">
                <img src="images/profile.jpg">
                <div class="layer">
                    <h3>Olympic Pool</h3>
                </div>
            </div>
            <div class="image-col">
                <img src="images/profile.jpg">
                <div class="layer">
                    <h3>Mini Pool</h3>
                </div>
            </div>
            <div class="image-col">
                <img src="images/profile.jpg">
                <div class="layer">
                    <h3>Aqua Park</h3>
                </div>
            </div>
        </div>
        

    </section>

    <section class="content-box" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="content-row">
            <div class="content_text">
                <p  class="text-bar"> Create memorable 'Beach' and 'waterfront' experiences for 
                    visitors that promote interaction with the natural environment
                    though appropriate amenities, linkages and public accesses 
                </p>
            </div>
            <div class="content-col">
                <div class="photo-one">
                    <img src="images/profile.jpg"class="picture-one">
                </div>
                <div class="photo_two">
                    <img src="images/profile.jpg">
                </div>
            </div>
            <div class="content-col">
                <div class="photo_two">
                    <img src="images/profile.jpg">
                </div>
                <div class="photo-one">
                    <img src="images/profile.jpg"class="picture-one">
                </div>
            </div>
            
                
        </div>
    </section>
    <section class="background-content"data-aos="zoom-in-right">
        <div class="text-content">
            <p>
                A beach resort just one hour away from the city, it is a family resort<br> made to open
                everyone and anyone who wants to enjoy the beach<br> front and the fast growing amenities
                of the resort.
            </p>
        </div>

    </section>
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

    <section class="footer">

    <div class="footer-text">
        <p>Copyright @ 2022 Azzura. All rights reserved. Powered by ROTcorp. <br>Terms and Conditions
    </p>
    </div>
    </section>

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