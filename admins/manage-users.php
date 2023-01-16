<?php
//only admin can access
if ( !AUTHENTICATION::whoCanAccess('admin') ){
    header('Location:/dashboard');
    exit;
}

require dirname(__DIR__) . '/parts/header.php';
?><div class="container mx-auto my-5" style="max-width: 700px;">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Manage Users</h1>
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
                <?php foreach( User::getAllUsers() as $user ) : ?>
                <tr>
                    <th scope="row"><?php echo $user['id']; ?></th>
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
                    <td class="text-end">
                        <div class="buttons">
                            <a href="/manage-users-edit?id=<?php echo $user['id']; ?>"
                                class="btn btn-success btn-sm me-2">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Remove</a>
                        </div>
                    </td>
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