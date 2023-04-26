<?php

require_once '../classes/accounts.class.php';
require_once '../tools/functions.php';

session_start();

$accounts = new Accounts();
if(isset($_POST['username']) && isset($_POST['password'])){
    //Sanitizing the inputs of the users. Mandatory to prevent injections!
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);

    // Advanced validation for username and password
    if(empty($username) || empty($password)) {
        if (empty($username) && empty($password)) {
            $error = 'Please enter both username and password.';
        } elseif (empty($username)) {
            $error = 'You only enter password. Please enter a username.';
        } else {
            $error = 'You only enter username. Please enter a password.';
        }
    } elseif(!validate_username($username)) {
        $error = 'Invalid username. Use only alphanumeric characters and underscores.';
    } elseif(!validate_password($password)) {
        $error = 'Invalid password. It must be at least 8 characters long and include at least one letter and one number.';
    } else {
        $accounts->username = $username;
        $accounts->password = $password;
        if($accounts->sign_in_admin()){
            $accounts = $accounts->get_account_info();
            foreach($accounts as $row){
                $_SESSION['logged_id'] = $row['id'];
                $_SESSION['fullname'] = $row['firstname'] . ' ' . $row['middle'] . ' ' . $row['lastname'];
                $_SESSION['img'] = $row['photo'];
                $_SESSION['user_type'] = $row['user_type'];
                //display the appropriate dashboard page for user
                if(in_array($row['user_type'], ['Admin', 'Cashier', 'Reservation Specialist'])){
                    header('location: ../landing/dashboard.php');
                }
            }
        }else{
            //set the error message if account is invalid
            $error = 'Invalid username/password. Try again.';
        }
    }
}
// Add this variable to store the JavaScript code for displaying the alert
$alert_message_js = "";

if(isset($error)){
    // Prepare the JavaScript code for displaying the alert
    $alert_message_js = "<script>alert('".$error."');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Azzura</title>
  <script src="https://kit.fontawesome.com/0cc7e94eea.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .input-group-text.show-password:active {
        color: #007bff;
        border-color: #007bff;
        background-color: transparent;
    }
    #errorToast {
    background-color:  #B22222;
    color: white;
    padding: 6px;
  }

    /* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
  .col-md-4 {
    max-width: 400px;
    margin: 0 auto;
  }
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .col-md-4 {
    max-width: 600px;
  }
  img {
    width: 11.5rem;
    height: 5.5rem;
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .col-md-4 {
    max-width: 800px;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .col-md-4 {
    max-width: 30.5rem;
  }
  img {
    width: 15.5rem;
    height: 7.5rem;
  }
}
</style>

<body>
  <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4 p-5 shadow-sm border rounded-5 border-primary">
      <h2 class="text-center mb-4 text-primary"><img width="300px;" height="100px;" src="../image/azzuralogo.png"
          alt=""></h2>
      <form action="login.php" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input name="username" type="username" class="form-control border border-primary" id="username"
            aria-describedby="emailHelp" value="<?php if(isset($username)) { echo $username; } ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input name="password" type="password" class="form-control border border-primary" id="password" value="<?php if(isset($password)) { echo $password; } ?>">
                <button class="btn btn-outline-secondary" type="button" id="show-password-toggle">
                <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
  </div>

  <!-- Add this div for the toast message -->
  <?php if(isset($error)): ?>
  <div class="position-fixed top-50 start-50 translate-middle p-3" style="z-index: 11">
    <div id="errorToast" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          <?php echo $error; ?>
        </div>
        <button type="button" class="btn-close btn-close-white ms-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <?php endif; ?>
</body>
</html>

<script>
 const passwordInput = document.querySelector('#password');
const showPasswordToggle = document.querySelector('#show-password-toggle');

showPasswordToggle.addEventListener('click', () => {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    showPasswordToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    passwordInput.type = 'password';
    showPasswordToggle.innerHTML = '<i class="fas fa-eye"></i>';
  }
});

// Add this code to display the toast if there's an error
<?php if(isset($error)): ?>
const errorToastEl = document.getElementById('errorToast');
const errorToast = new bootstrap.Toast(errorToastEl);
errorToast.show();
<?php endif; ?>
</script>