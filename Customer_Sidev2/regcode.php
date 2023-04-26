<?php
    include_once '../Admin-Side/classes/customer.class.php';
    include_once '../Admin-Side/tools/functions.php';
    
    session_start();

    if(isset($_POST['signup'])){
        $customer = new Customer();

        $customer->lastname = htmlentities($_POST['lastname']);
        $customer->firstname = htmlentities($_POST['firstname']);
        $customer->middlename = htmlentities($_POST['middlename']);
        $customer->birth_date = $_POST['birth_date'];
        $customer->age = htmlentities($_POST['age']);
        $customer->suffix = htmlentities($_POST['suffix']);
        $customer->sex = htmlentities($_POST['sex']);
        $customer->email = htmlentities($_POST['email']);
        $customer->username = htmlentities($_POST['username']);
        $customer->contact_num = htmlentities($_POST['contact_num']);
        $customer->password = htmlentities($_POST['password']);
        if($customer->register()){  
            //redirect user to landing page after saving
            header('location: index.php');
        }
  }
?>