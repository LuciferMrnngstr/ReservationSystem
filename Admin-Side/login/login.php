<?php


    require_once '../tools/variables.php';
    $page_title = 'BubbleBest | Signin';
    $dashboard = 'active';

    require_once '../includes/adhead.php';
    require_once '../classes/account.class.php';

    session_start();

      $account_obj = new Account();
      if(isset($_POST['email']) && isset($_POST['password'])){
        //Sanitizing the inputs of the users. Mandatory to prevent injections!
        $account_obj->email = htmlentities($_POST['email']);
        $account_obj->password = htmlentities($_POST['password']);
        if($account_obj->sign_in()){
            $account = $account_obj->get_account_info();
            foreach($account as $row){
                $_SESSION['logged_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['fullname'] = $row['first_name'] .' '. $row['last_name'];
                $_SESSION['user_type'] = $row['user_type'];
                //display the appropriate dashboard page for user
                if($row['user_type'] == 'admin'){
                    header('location: ../admin/dashboard.php');
                }else if($row['user_type'] == 'cust'){
                    header('location: ../landing/landing.php');
                }
            }
        }else{
            //set the error message if account is invalid
            $error = 'Invalid email/password. Try again.';
        }
      }
?>
  <div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
        <main class="auth-page">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                <div class="mdc-card">
                  <div class="brand-logo">
                    <a href="../landing/landing.php"><img src="../assets/assetsa/img/bubblebest logo.png" alt="logo"></a>
                  </div>
                  <h4>Hello! Let's get started</h4>
                  <h6 class="font-weight-light">Sign in to continue</h6>
                  <form action="login.php" method="post">
                    <div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="email text-field-hero-input" type="email" name="email">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Email</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="password" id="text-field-hero-input" name="password">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                          </div>
                        </div>
                        <?php
                            //Display the error message if there is any.
                              if(isset($error)){
                                  echo '<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 text-danger"><p class="error">'.$error.'</p></div>';
                              }
                        ?>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                              <input type="checkbox"
                                      class="mdc-checkbox__native-control"
                                      id="checkbox-1"/>
                              <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark"
                                      viewBox="0 0 24 24">
                                  <path class="mdc-checkbox__checkmark-path"
                                        fill="none"
                                        d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                </svg>
                                <div class="mdc-checkbox__mixedmark"></div>
                              </div>
                            </div>
                            <label for="checkbox-1">Remember me</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                          <a href="#">Forgot Password</a>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <button type="submit" class="mdc-button mdc-button--raised w-100">
                            Login
                          </button>
                        </div>
                        <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12 text-center">
                          <h5>or</h5>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 text-center">
                          <a href="#" class="google gbtn">
                            <i class="fa fa-google fa-fw"></i> Login with Google+
                          </a>
                        </div>
                        <div class="mdc-layout-grid__cell--span-12 text-center">
                          I Don't have an account <a href="register.php" class="text-primary">Sign up</a>
                        </div>
                      </div>
                    </div> 
                  </form>
                </div>
              </div>
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
          </div>
        </main>
      </div>
    </div>
</div>

  <?php require_once '../includes/adend.php'; ?>