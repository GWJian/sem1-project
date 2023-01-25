<?php  
//only admin can access
if ( !AUTHENTICATION::whoCanAccess('editor') ){
    header('Location:/admin_page');
    exit;
}

// Step 1: generate CSRF token
CSRF::generateToken( 'delete_product_form' );

// Step 2: make sure it's POST request
if ( $_SERVER["REQUEST_METHOD"] === 'POST' )
{
    // step 3: do error check
    $error = FORMVALIDATION::validate(
        $_POST,
        [
            'product_id'=>'required',
            'csrf_token'=>'delete_product_form_csrd_token'
        ]
    );

    // make sure there is no error
    if ( !$error )
    {
        // step 4: delete user
        PRODUCT::delete($_POST['product_id']);

        // step 5: remove CSRF token
        CSRF::removeToken( 'delete_product_form' );
    
        // step 6: redirect back to the same page
        // header("Location: /manage-products");
        // exit;
        
    }

}

?>

<!-- require the header part -->
<?php require 'parts/header.php' ?>
<!-- require the header part -->


<!-- admin Product management -->
<section class="bg-dark vh-100">
    <div class="container">
        <h2 style="color: #fbca04">Product Management</h2>
        <div class="float-end">
            <a href="/admin_page" class="btn-danger btn btn-outline-light mb-2">Back</a>
            <a href="/add_product" class="btn-info btn btn-outline-light mb-2">Add Product</a>
        </div>

        <form action="" method="POST">
            <?php require dirname(__DIR__) . '/parts/error_box.php'; ?>
            <table class="table bg-white">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Img</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( PRODUCT::getAllProduct() as $product ) : ?>
                    <tr>
                        <th scope="row"></th>
                        <td><?php echo $product['product_name']; ?></td>
                        <td><img src="<?php echo $product['image_url']; ?>" style="height: 15vh; width: 15vh;"></td>
                        <td><?php echo $product['releasedate']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $product['description']; ?></td>
                        <td><?php echo $product['status']; ?></td>
                        <td>
                            <!-- =============----edit form----================== -->
                            <a href="/edit_product?id=<?php echo $product['id']; ?>">
                                <button type="button" class="btn-success btn mb-2 btn-sm"><i
                                        class="bi bi-pencil-square"></i></button>
                            </a>
                            <!-- =============----edit form----================== -->
                        </td>

                        <!-- delete button start -->
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#post-<?php echo $product['id']; ?>">
                                <i class="bi bi-trash3"></i>
                            </button>
                            <!-- delete button end -->
                            <!-- Modal start -->
                            <div class="modal fade" id="post-<?php echo $product['id']; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            Are you sure you want to delete (<?php echo $product['id']; ?>)
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form method="POST" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
                                                <input type="hidden" name="product_id"
                                                    value="<?php echo $product['id'] ?>">
                                                <input type="hidden" name="csrf_token"
                                                    value="<?php echo CSRF::getToken('delete_product_form') ?>">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <!-- Modal end -->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</section>

<!-- require the footer part -->
<?php require 'parts/footer.php' ?>
<!-- require the footer part -->