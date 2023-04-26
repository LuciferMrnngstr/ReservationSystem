<?php

require_once '../classes/customer.class.php';

session_start();

$account_obj = new Customer();
if(isset($_POST['username']) && isset($_POST['password'])){
  //Sanitizing the inputs of the users. Mandatory to prevent injections!
  $account_obj->username = htmlentities($_POST['username']);
  $account_obj->password = htmlentities($_POST['password']);
  if($account_obj->sign_in()){
      $account = $account_obj->get_customer_info();
      foreach($account as $row){
          $_SESSION['logged_id'] = $row['id'];
          $_SESSION['fullname'] = $row['firstname'];
          //display the appropriate dashboard page for user
          header('location: check.php');
      }
  }else{
      //set the error message if account is invalid
      $error = 'Invalid email/password. Try again.';
  }
}

?>