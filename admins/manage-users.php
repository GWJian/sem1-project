<?php
//only admin can access
if ( !AUTHENTICATION::whoCanAccess('admin') ){
    header('Location:/admin_page');
    exit;
}

// Step 1: generate CSRF token
CSRF::generateToken( 'delete_user_form' );

// Step 2: make sure it's POST request
if ( $_SERVER["REQUEST_METHOD"] === 'POST' )
{
    // step 3: do error check
    $error = FORMVALIDATION::validate(
        $_POST,
        [
            'user_id'=>'required',
            'csrf_token'=>'delete_user_form_csrd_token'
        ]
    );

    // make sure there is no error
    if ( !$error )
    {
        // step 4: delete user
        User::delete($_POST['user_id']);

        // step 5: remove CSRF token
        CSRF::removeToken( 'delete_user_form' );
    
        // step 6: redirect back to the same page
        header("Location: /manage-users");
        exit;
        
    }

}

require dirname(__DIR__) . '/parts/header.php';?>

<div class="container mx-auto my-5" style="max-width: 700px;">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1 text-white">Manage Users</h1>
        <div class="text-end">
            <a href="/manage-users-add" class="btn btn-primary btn-sm">Add New User</a>
        </div>
    </div>
    <div class="card mb-2 p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col" class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( User::getAllUsers() as $index =>$user ) : ?>
                <tr>
                    <th scope="row"><?php echo $index+1; ?></th>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php switch($user['role']){
                            case 'user':
                            echo '<span class="badge bg-success">User</span>';
                            break;
                            case 'editor':
                            echo '<span class="badge bg-info">Editor</span>';
                            break;
                            case 'admin':
                            echo '<span class="badge bg-primary">Admin</span>';
                            break;
                        }?>
                    </td>
                    <!-- delete start here -->
                    <td class="text-end">
                        <div class="buttons">
                            <!-- delete button -->
                            <?php if ( $_SESSION['user']['id'] !== $user['id'] ) : ?>
                            <a href="/manage-users-edit?id=<?php echo $user['id']; ?>"
                                class="btn btn-success btn-sm me-2">EDIT</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#user-<?php echo $user['id']; ?>">DELETE
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="user-<?php echo $user['id']; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            Are you sure to delete (<?php echo $user['name']; ?>)
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form method="POST" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
                                                <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
                                                <input type="hidden" name="csrf_token"
                                                    value="<?php echo CSRF::getToken('delete_user_form') ?>">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- delete button end -->
                            <?php endif; ?>
                        </div>
                    </td>
                    <!-- delete end here -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <a href="/admin_page" class="btn btn-link btn-sm"><i class="bi bi-arrow-left"></i> Back to Admin/Editor</a>
    </div>
</div>
<?php

require dirname(__DIR__) . '/parts/footer.php';