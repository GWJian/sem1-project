<?php

// make sure only admin can access
if ( !Authentication::whoCanAccess('admin') ) {
    header('Location:/dashboard');
    exit;
}

//load user data
$user = User::getUserById( $_GET['id'] );

// step 1: set CSRF token
CSRF::generateToken('edit_user_form');

// step 2: make sure post request
if ( $_SERVER ["REQUEST_METHOD"] === 'POST' ){
    
    // step 3: do error check

    //if both password & confirm_password fields are empty, skip error checking for both fields.
    $rule=[
        'name'=>'required',
        'email' => 'email_check',
        'role' => 'required',
        'csrf_token'=>'edit_user_form_csrf_token',
    ];

    // if eiter password & confirm_password fields are not empty, 
    // do error check for both fields

    $error = FORMVALIDATION::validate(
    $_POST,
    $rule
    );

    if ( !$error ){
        // step 4: update user  
        User::update(
            $user['id'], //id
            $_POST['name'],//name
            $_POST['email'],//email
            $_POST['role'],//role
            //password update if available
        );


        // step 5: remove the CSRF token
        CSRF::removeToken( 'edit_user_form' );

        // step 6:redirect to manage users page
        header('Location: /manage-users');
        exit;
    }

}


    
    require dirname(__DIR__) . '/parts/header.php';
?>

<div class="container mx-auto my-5" style="max-width: 700px;">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Edit User</h1>
    </div>
    <div class="card mb-2 p-4">
        <?php require dirname( __DIR__ ) . '/parts/error_box.php'; ?>
        <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $user['name']; ?>" />
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?php echo $user['email']; ?>" />
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" />
                    </div>
                    <div class="col">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" />
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-control" id="role" name="role">
                    <option value="">Select an option</option>
                    <option value="user" <?php echo ( $user['role'] == 'user' ? 'selected' : '' ); ?>>User</option>
                    <option value="editor" <?php echo ( $user['role'] == 'editor' ? 'selected' : '' ); ?>>Editor
                    </option>
                    <option value="admin" <?php echo ( $user['role'] == 'admin' ? 'selected' : '' ); ?>>Admin</option>
                </select>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <input type="hidden" name="csrf_token" value="<?php echo CSRF::getToken('edit_user_form') ?>">
        </form>
    </div>
    <div class="text-center">
        <a href="/manage-users" class="btn btn-link btn-sm"><i class="bi bi-arrow-left"></i> Back to Users</a>
    </div>
</div>
<?php

require dirname(__DIR__) . '/parts/footer.php';