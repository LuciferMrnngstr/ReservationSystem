<?php
require_once '../tools/validations.php';
require_once '../classes/account.class.php';

session_start();

//if add account$account_obj is submitted
if(isset($_POST['save'])){
  $account_obj = new Account();
  //sanitize user inputs
  $account_obj->first_name = htmlentities($_POST['fn']);
  $account_obj->middle_name = htmlentities($_POST['mn']);
  $account_obj->last_name = htmlentities($_POST['ln']);
  $account_obj->cp_no = htmlentities($_POST['cpno']);
  $account_obj->email = htmlentities($_POST['email']);
  $account_obj->password = htmlentities($_POST['password']);
  $account_obj->user_type = 'cust';
  if(validate_add_user($_POST)){
      if($account_obj->sign_add()){  
          //redirect user to landing page after saving
          header('location: ../landing/landing.php');
      }
  }
}
    require_once '../tools/variables.php';
    $page_title = 'BubbleBest | Signup';
    $dashboard = 'active';

    require_once '../includes/adhead.php';
?>
  <div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
        <main class="auth-page">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                <div class="mdc-card">
                  <div class="brand-logo">
                   <a href="../landing/landing.php"><img src="../assets/assetsa/img/bubblebest logo.png" alt="logo"></a> 
                  </div>
                  <h4>New here?</h4>
                  <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                  <form action="register.php" method="post">
                    <div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-text-field w-100">
                            <input name="fn" class="mdc-text-field__input" id="text-field-hero-input">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">First name *</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-text-field w-100">
                            <input name="mn" class="mdc-text-field__input" id="text-field-hero-input">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Middle name</label>
                          </div>
                        </div>
                        <?php
                        if(isset($_POST['save']) && !validate_first_name($_POST)){
                        ?>
                          <span class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 text-danger">First name is invalid. Trailing spaces will be ignored.</span>
                        <?php
                            }
                        ?>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input name="ln" class="mdc-text-field__input" id="text-field-hero-input">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Last name *</label>
                          </div>
                        </div>
                        <?php
                        if(isset($_POST['save']) && !validate_last_name($_POST)){
                        ?>
                          <span class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 text-danger">Last name is invalid. Trailing spaces will be ignored.</span>
                        <?php
                            }
                        ?>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input name="cpno" class="mdc-text-field__input" id="text-field-hero-input">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Cellphone No. *</label>
                          </div>
                        </div>
                        <?php
                        if(isset($_POST['save']) && !validate_cpno($_POST)){
                        ?>
                          <span class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 text-danger">Cellphone No. is invalid. Trailing spaces will be ignored.</span>
                        <?php
                            }
                        ?>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input name="email" class="mdc-text-field__input" id="text-field-hero-input" type="email">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Email *</label>
                          </div>
                        </div>
                        <?php
                        if(isset($_POST['save']) && !validate_email($_POST)){
                        ?>
                          <span class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 text-danger">Email is required</span>
                        <?php
                            }
                        ?>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input name="password" class="mdc-text-field__input" type="password" id="text-field-hero-input">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                          </div>
                        </div>
                        <?php
                        if(isset($_POST['save']) && !validate_password($_POST)){
                        ?>
                          <span class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 text-danger">Password is required</span>
                        <?php
                            }
                        ?>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <input type="submit" id="save" name="save" class="mdc-button mdc-button--raised w-100 button" value="Sign Up">
                        </div>
                        <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12 text-center">
                          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        </div>
                        <div class="mdc-layout-grid__cell--span-12 text-center">
                          Already have an account? <a href="login.php" class="text-primary">Login</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>

  <?php require_once '../includes/adend.php'; ?>