<?php

    // set CSRF token
    CSRF::generateToken( 'signup_form' );

    // make sure user not already logged-in,
    // if user is already logged in, redirect the user to dashboard
    if ( AUTHENTICATION::isLoggedIn() )
    {
      header('Location:/');
      exit;
    }


    // make sure it's POST request
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

      $authentication = new AUTHENTICATION();

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

      // step #1: do error check
      $error = FORMVALIDATION::validate(
            $_POST,
            [
                'name'=>'required',
                'email'=>'email_check',
                'password'=>'password_check',
                'confirm_password'=>'is_password_match',
                'csrf_token' => 'signup_form_csrf_token'
            ]
        );
        // step #2: make sure email is unique (not in the database)
        $isEmailInUsed = FormValidation::checkEmailUniqueness( $email );
        if ( $isEmailInUsed )
        {
            $error_emailinused = $isEmailInUsed;
        }

        // make sure $error is false
        if ( !$error ) {
        
            // step #3: insert user into database
            $user_id = Authentication::signup(
                $name,
                $email,
                $password
            );

            // step #4: assign the user data to $_SESSION['user'] data
            Authentication::setSession( $user_id );

            // step #5: redirect the user to dashboard
            // 5.1: remove csrf token
            CSRF::removeToken( 'signup_form' );

            // 5.2: redirect user to dashboard
            header('Location: /');
            exit;

        } // end - !$error
    }

?>

<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->



<!-- Login -->
<section class="vh-100">
    <div class="container py-5 h-100">
        <?php require dirname( __DIR__ ) . '/parts/error_box.php'; ?>
        <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"] ?>">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="text-white" style="border-radius: 1rem;">
                        <div class="text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Sign up</h2>
                                <p class="text-white-50 mb-5">Please enter your Name Email and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="confirm_password"
                                        class="form-control form-control-lg" />
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5 mb-3" type="submit">SignUp</button>

                                <p class="mb-0">Already have account? <a href="/login"
                                        class="text-white-50 fw-bold">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="csrf_token" value="<?php echo CSRF::getToken( 'signup_form' ) ?>">
        </form>
    </div>
</section>


<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->