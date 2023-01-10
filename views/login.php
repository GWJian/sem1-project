<?php

 // set CSRF token


    // make sure if the user wasn't logged in yet. 
    // If the user already logged in, we'll redirect to dashboard page
    if ( Authentication::isLoggedIn() )
    {
      header('Location: /dashboard');
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


        // 4.2: redirect to dashboard
        header('Location: /dashboard');
        exit;

      } //end -!$user_id
    }// !error
  }
?>
<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


<!-- Login -->
<section>
    <div class="container mt-5 mb-2 mx-auto" style="max-width: 900px">
        <div class="min-vh-50">
            <!-- login form -->

            <div class="card rounded shadow-sm mx-auto border-primary" style="max-width: 500px">
                <div class="card-body bg-dark text-white">
                    <?php require dirname(__DIR__) . '/parts/error_box.php'; ?>
                    <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"] ?>">
                        <h5 class="card-title text-center mb-3 py-3 border-bottom">
                            Login To Your Account
                        </h5>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" />
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-fu">
                                    Login
                                </button>
                            </div>
                        </form>
                </div>
            </div>

            <!-- links -->
            <div class="d-flex justify-content-between align-items-center gap-3 mx-auto pt-3" style="max-width: 500px">
                <a href="/" class="text-decoration-none small"><i class="bi bi-arrow-left-circle"></i> Go back</a>
                <a href="/signup" class="text-decoration-none small">Don't have an account? Sign up here
                    <i class="bi bi-arrow-right-circle"></i></a>
            </div>
        </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->