<title>Admin</title>

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


    require_once '../classes/accounts.class.php';

    if(isset($_POST['save'])){

        $accounts = new Accounts;
        //sanitize user inputs
        $accounts->photo = $_POST['photo'];
        $accounts->firstname = $_POST['firstname'];
        $accounts->lastname = $_POST['lastname'];
        $accounts->middle = $_POST['middle'];
        $accounts->contact = $_POST['contact'];
        $accounts->birthday = $_POST['birthday'];
        $accounts->position = $_POST['position'];
        $accounts->user_type = $_POST['user_type'];
        $accounts->unit = $_POST['unit'];
        $accounts->street = $_POST['street'];
        $accounts->barangay = $_POST['barangay'];
        $accounts->city = $_POST['city'];
        $accounts->username = $_POST['username'];
        $accounts->password = $_POST['password'];
    
        if($accounts->add()){
        //redirect user to program page after saving
        header('location: admin.php');
    }
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
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/0cc7e94eea.js" crossorigin="anonymous"></script>


    <style>
    /* Style the modal */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 8% auto; /* 15% from the top and centered */
      padding: 10px;
      border: 1px solid #888;
      width: 65%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    #DataTables_Table_0_filter > label{
      display: flex;
      flex-wrap: nowrap;
      align-items: center;
      justify-content: center;
    }

    .dataTables_wrapper .dataTables_length select{
      border: 1px solid #000;
      border-radius: 3px;
      padding: 5px;
      background-color: #ffffff;
      padding: 4px;
      }
    
    .dataTables_wrapper .dataTables_filter input{
      border: 1px solid #000;
      border-radius: 3px;
      padding: 5px;
      background-color: #fffffffc;
      margin-left: 3px;
      }
  
    .element.style{
      display: inline-flex;
      /* align-content: center; */
      justify-content: center;
      align-items: baseline;
      flex-wrap: nowrap;
      flex-direction: row;
    }

    select {
     margin-left: 5px;
     margin-right: 5px;
    }

    .formcontainer {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .form-modal {
    border-radius: 4px;
    display: flex;
    flex-direction: column;
    padding: 20px;
    position: relative;
  }

  .form-header {
    align-items: center;
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    width: 100%;
  }

  .form-header h3 {
    font-size: 24px;
    margin: 0;
  }

  .close-button {
    background-color: transparent;
    border: 0;
    cursor: pointer;
    font-size: 36px;
    outline: 0;
  }

  .form-body {
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  .form-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 20px;
    width: 100%;
  }

  .form-label {
    font-size: 16px;
    font-weight: bold;
    width: 30%;
  }

  .form-input {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    width: 68%;
  }

  .form-actions {
    align-items: center;
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
    width: 100%;
  }

  .form-submit {
    background-color: rgb(22, 134, 0);
    border: 0;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    padding: 10px 10px;
  }

  .column {
    width: 32%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .column .form-label,
  .column .form-input {
    width: 100%;
  }
  </style>






</head>
<body>
    

</body>
</html>
<div class="home-section">
<div class="home-content"><nav>
            <div class="side-bar-button"><i class='bx bx-menu' ></i>
            <span class="text">Admin Accounts</span> </div>
        </nav> 
        <div class="table-container">
        
            <div class="table-heading">
                <?php
                    if($_SESSION['user_type'] == 'admin'){ 
                ?>
                <button class="button" id="myBtn">+ Add</button>    
                <?php
                    }
                ?>
                
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Full Name</th>
                        <th>Contact Number</th>
                        <th>Birthday</th>
                        <th>Position</th>
                        <th>User Type</th>
                        <th>Unit</th>
                        <th>Street</th>
                        <th>Barangay</th>
                        <th>City</th>
                        <th>Username</th>
                        <th>Password</th>
                        <?php
                            if($_SESSION['user_type'] == 'admin'){ 
                        ?>
                            <th class="action">Action</th>
                        <?php
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once '../classes/accounts.class.php';

                        $accounts = new Accounts();
                        //We will now fetch all the records in the array using loop
                        //use as a counter, not required but suggested for the table
                        $i = 1;
                        //loop for each record found in the array
                        foreach ($accounts->show() as $value){ //start of loop
                    ?>
                        <tr>
                            <!-- always use echo to output PHP values -->
                            <td><?php echo $i ?></td>
                            <td><img src="uploads/<?php echo $value['photo'] ?>"></td>
                            <td><?php echo $value['firstname'] . ' ' . $value['middle'] . ' ' . $value['lastname'];?></td>
                            <td><?php echo $value['contact'] ?></td>
                            <td><?php echo $value['birthday'] ?></td>
                            <td><?php echo $value['position'] ?></td>
                            <td><?php echo $value['user_type'] ?></td>
                            <td><?php echo $value['unit'] ?></td>
                            <td><?php echo $value['street'] ?></td>
                            <td><?php echo $value['barangay'] ?></td>
                            <td><?php echo $value['city'] ?></td>
                            <td><?php echo $value['username'] ?></td>
                            <td><?php echo $value['password'] ?></td>
                            <?php
                                if($_SESSION['user_type'] == 'admin'){ 
                            ?>
                                <td>
                                    <div class="action">
                                        <a class="action-edit" href="editaccounts.php?id=<?php echo $value['id'] ?>">Edit</a>
                                        <a class="action-delete" href="deleteaccounts.php?id=<?php echo $value['id'] ?>">Delete</a>
                                    </div>
                                </td>
                            <?php
                                }
                            ?>
                        </tr>
                    <?php
                        $i++;
                    //end of loop
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>

    <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal Content -->
<div class="modal-content">
<div class="row"><span class="close">&times;</span></div>
  <form action="admin.php" method="post">

  <div class="form-modal">
    <div class="form-body">
      <div class="form-row">
        <div class="column">
          <label class="form-label">PHOTO</label>
          <input type="file" class="form-input" id="photo" name="photo"  img src="uploads/<?php echo $value['photo']; ?>" alt="">
        </div>
        <div class="column">
          <label class="form-label">FIRSTNAME</label>
          <input type="text" class="form-input" id="firstname" name="firstname" required placeholder="Enter Rirstname" value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>">
        </div>
        <div class="column">
          <label class="form-label">LASTNAME</label>
          <input type="text" class="form-input" id="lastname" name="lastname" required placeholder="Enter Lastname" value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname']; } ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="column">
          <label class="form-label">MIDDLE</label>
          <input type="text" class="form-input" id="middle" name="middle"  value="<?php if(isset($_POST['middle'])) { echo $_POST['middle']; } ?>">
        </div>
        <div class="column">
          <label class="form-label">CONTACT NUMBER</label>
          <input type="text" class="form-input" id="contact" name="contact" required placeholder="Enter Contact" value="<?php if(isset($_POST['contact'])) { echo $_POST['contact']; } ?>">
        </div>
        <div class="column">
          <label class="form-label">BIRTHDAY</label>
          <input type="date" class="form-input" id="birthday" name="birthday" value="<?php if(isset($_POST['birthday'])) { echo $_POST['birthday']; } ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="column">
          <label class="form-label">POSITION</label>
          <input type="text" class="form-input" id="position" name="position" required placeholder="Enter Position" value="<?php if(isset($_POST['position'])) { echo $_POST['position']; } ?>">
        </div>
        <div class="column">
          <label class="form-label">USER TYPE</label>
          <input type="text" class="form-input" id="user_type" name="user_type" value="<?php if(isset($_POST['user_type'])) { echo $_POST['user_type']; } ?>">
        </div>
        <div class="column">
          <label class="form-label">UNIT</label>
          <input type="text" class="form-input" id="unit" name="unit" value="<?php if(isset($_POST['unit'])) { echo $_POST['unit']; } ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="column">
          <label class="form-label">STREET</label>
          <input type="text" class="form-input" id="street" name="street" value="<?php if(isset($_POST['street'])) { echo $_POST['street']; } ?>">
        </div>
        <div class="column">
          <label class="form-label">BARANGAY</label>
          <input type="text" class="form-input" id="barangay" name="barangay" required placeholder="Enter Barangay" value="<?php if(isset($_POST['barangay'])) { echo $_POST['barangay']; } ?>">
        </div>
        <div class="column">
          <label class="form-label">CITY</label>
          <input type="text" class="form-input" id="city" name="city" required placeholder="Enter City" value="<?php if(isset($_POST['city'])) { echo $_POST['city']; } ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="column">
          <label class="form-label">USERNAME</label>
          <input type="text" class="form-input" id="username" name="username" required placeholder="Enter Username" value="<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>">
        </div>
        <div class="column">
          <label class="form-label">PASSWORD</label>
          <input type="text" class="form-input" id="password" name="password" required placeholder="Enter Password" value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
        </div>
      </div>
    </div>
    <div class="form-actions">
      <input type="submit" name="save" id="save" class="form-submit" value="Submit">
    </div>
</form>
</div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
  
</script>

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