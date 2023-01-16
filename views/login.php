<?php

    // set CSRF token
    CSRF::generateToken( 'login_form' );

    // make sure if the user wasn't logged in yet. 
    // If the user already logged in, we'll redirect to dashboard page
    if ( Authentication::isLoggedIn() )
    {
      header('Location: /');
      exit;
    }

    // process the login form
    if ( $_SERVER["REQUEST_METHOD"] === 'POST' ) {

      $email = $_POST['email'];
      $password = $_POST['password'];
      
      // Step 1: do error check
      $error = FORMVALIDATION::validate
      ( 
        $_POST ,
        [
          'email'=>'required',
          // email is the key, required is the condition
          'password'=>'required'
          // password is the key, required is the condition
        ]
      );

      //make sure there is no error
      if ( !$error ){
              // Step 2: login the user
      $user_id = AUTHENTICATION::login( $email, $password );
      
      // if $user_id is false, 
      // meaning either email or password is incorrect
      if ( !$user_id ) {
        // trigger error message
        $error = "Email or password is incorrect";  
      } else {
        // if $user_id is valid,
        // $user_id is a number

        // step 3: assign the user to $_SESSION['user']
        AUTHENTICATION::setSession( $user_id );

      // step 3: assign the user to $_SESSION['user']

      // Step 4: remove csrf token & redirect the user to dashboard
        // 4.1: remove csrf token
        CSRF::removeToken( 'login_form' );

        // 4.2: redirect to dashboard
        header('Location: /');
        exit;

      } //end -!$user_id
    }// !error
  }
?>
<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


<!-- Login -->
<section class="vh-100">
    <div class="container py-5 h-100">
        <?php require dirname(__DIR__) . '/parts/error_box.php'; ?>
        <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"] ?>">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="text-white" style="border-radius: 1rem;">
                        <div class="text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typePasswordX">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5 mb-3" type="submit">Login</button>

                                <p class="mb-0">Don't have an account?
                                    <a href="/signup" class="text-white-50 fw-bold">SignUp</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="csrf_token" value="<?php echo CSRF::getToken( 'login_form' ) ?>">
        </form>
    </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->