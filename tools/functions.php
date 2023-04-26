<?php

    function validate_lastname($POST){
        if(strlen(trim($_POST['lastname'])) <= 1){
            return false;
        }
        return true;
    }

    function validate_firstname($POST){
        if(strlen(trim($_POST['firstname'])) <= 1){
            return false;
        }
        return true;
    }

    function validate_middlename($POST){
        if(empty($_POST['middlename'])){
            return true;
        }
        else if(strlen(trim($_POST['middlename'])) < 1 || !strlen(trim($_POST['middlename'])) > 2){
            return false;
        }
        return true;
    }

    function validate_age($POST){
        if($_POST['age'] < 18 || $_POST['age'] > 80){
            return false;
        }
        return true;
    }
    
    function validate_suffix($POST){
        if(empty($_POST['suffix'])){
            return false;
        }
        return true;
    }
    
    function validate_sex($POST){
        if(!isset($_POST['gender'])){
            return false;
        }
        return true;
    }

    function validate_mobilenum($POST){
        if(strlen(trim($_POST['contact_num'])) != 11){
            return false;
        }
        return true;
    }

    // function validate_email_duplicate($POST){
    //     $customer = new Customer;

    //     if($customer->check_email_dupli($_POST['email'])){
    //         return false;
    //     }

    //     return true;
    // }

    function validate_username($username) {
        // Allow only alphanumeric characters and underscores
        return preg_match('/^[a-zA-Z0-9_]+$/', $username);
    }
    
    function validate_password($password) {
        // Password must be at least 8 characters long and include at least one letter and one number
        return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password);
    }
    function validate_confirm_password($POST){
        if(trim($_POST['password']) !== trim($_POST['confirm_password'])){
            return false;
        }
        return true;
    }

    function validate_signup($POST){ 
        if(!validate_firstname($POST) || !validate_middlename($POST) || !validate_lastname($POST) 
            || !validate_password($POST) || !validate_confirm_password($POST) || !validate_age($POST) || !validate_sex($POST) || 
            !validate_suffix($POST) || !validate_username($POST) || !validate_mobilenum($POST)){
            return false;
        }
        return true;
    }
?>