<title>Customers</title>

<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged_id'])){
        header('location: ../login/login.php');
    }

    if($_SESSION['user_type'] != 'admin'){
        header('location: dashboard.php');
    }
    //if the above code is false then html below will be displayed

    require_once '../inclusion/sidebar.php';
    require_once '../inclusion/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/0cc7e94eea.js" crossorigin="anonymous"></script>

    <style>
      .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }

      .form-input {
        width: 500px;
        padding: 10px;
        margin: 10px;
        font-size: 16px;
      }
    </style>


    
</head>
<body>
    

</body>
</html>
<div class="home-section">
    <div class="home-content">
        <nav>
            <div class="side-bar-button"><i class='bx bx-menu' ></i>
                <span class="text" style="margin-bottom: 15px;">Customers Account</span> 
            </div>
        </nav> 
    </div>
</div>

<div class="form-container">
      <form>
        <div>
          <label for="photo">PHOTO:</label>
          <input type="file" id="photo" name="photo" class="form-input" />
        </div>
        <div>
          <label for="fullName">FULL NAME:</label>
          <input type="text" id="fullName" name="fullName" class="form-input" />
        </div>
        <div>
          <label for="contactNumber">CONTACT NUMBER:</label>
          <input type="text" id="contactNumber" name="contactNumber" class="form-input" />
        </div>
        <div>
          <label for="birthday">BIRTHDAY:</label>
          <input type="date" id="birthday" name="birthday" class="form-input" />
        </div>
        <div>
          <label for="position">POSITION:</label>
          <input type="text" id="position" name="position" class="form-input" />
        </div>
        <div>
          <label for="userType">USER TYPE:</label>
          <input type="text" id="userType" name="userType" class="form-input" />
        </div>
        <div>
          <label for="unit">UNIT:</label>
          <input type="text" id="unit" name="unit" class="form-input" />
        </div>
        <div>
          <label for="street">STREET:</label>
          <input type="text" id="street" name="street" class="form-input" />
        </div>
        <div>
          <label for="barangay">BARANGAY:</label>
          <input type="text" id="barangay" name="barangay" class="form-input" />
        </div>
        <div>
          <label for="city">CITY:</label>
          <input type="text" id="city" name="city" class="form-input" />
        </div>
        <div>
          <label for="username">USERNAME:</label>
          <input type="text" id="username" name="username" class="form-input" />
        </div>
        <div>
          <label for="password">PASSWORD:</label>
          <input type="password" id="password" name="password" class="form-input" />
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>


  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
  
</body>
</html>