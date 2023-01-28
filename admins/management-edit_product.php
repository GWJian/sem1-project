<?php

// make sure only admin can access
if ( !Authentication::whoCanAccess('editor') ) {
    header('Location:/admin_page');
    exit;
}

//load post data
$product = PRODUCT::getProductById( $_GET['id'] );

// step 1: set CSRF token   
CSRF::generateToken('update_product_form');

// step 2: make sure post request
if ( $_SERVER ["REQUEST_METHOD"] === 'POST' )
{
    //if both password & confirm_password fields are empty
    //skip error checking for both fields.
    $rules=[
        'product_name'=>'required',
        'image_url'=>'required',
        'releasedate'=>'include',
        'price'=>'required',
        'status' => 'required',
        'csrf_token'=>'update_product_form',
    ];

    // if eiter password & confirm_password fields are not empty, 
    // do error check for both fields

    $error = FORMVALIDATION::validate(
        $_POST,
        $rules
    );

    if ( !$error ){
        // step 4: update user  
        PRODUCT::update(
            $product['id'], //id
            $_POST['product_name'],
            $_POST['image_url'],
            $_POST['releasedate'],
            $_POST['price'],
            $_POST['description'],
            $_POST['status'],
        );


        // step 5: remove the CSRF token
        CSRF::removeToken( 'update_product_form' );


        // step 6:redirect to manage users page
        header('Location: /management');
        exit;
}
}

?>

<!-- require the header part -->
<?php require  'parts/header.php' ?>
<!-- require the header part -->


<!-- admin add movie -->
<section class="bg-dark vh-100">
    <div class="container text-white pt-5">
        <div>
            <h2 class="header-align">Edit Product</h2>
        </div>

        <div>
            <?php require dirname( __DIR__ ) . '/parts/error_box.php'; ?>
            <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                <div>
                    <label for="product_name">Name:</label>
                    <input type="text" class="form-control" name="product_name"
                        value="<?php echo $product['product_name']; ?>" />
                </div>

                <div class="row">
                    <div class="d-flex">
                        <div class="col-sm-8">
                            <label for="img">Image:</label>
                            <input type="text" class="form-control" name="image_url"
                                value="<?php echo $product['image_url']; ?>" />
                        </div>
                        <img src="<?php echo $product['image_url']; ?>" style="height: 30vh; width: 30vh;"
                            class="ms-5 pt-3 pb-3" />
                    </div>
                </div>

                <div class="row" id="releasedate">
                    <div class="col-sm-6">
                        <div>
                            <label for="releasedate">Release Date:</label>
                            <input type="date" id="releasedate" name="releasedate"
                                value="<?php echo $product['releasedate']; ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <label>Price:</label>
                            <input type="number" class="form-control" name="price"
                                value="<?php echo $product['price']; ?>" />
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="post-content" class="form-label">Status</label>
                    <select class="form-control" id="post-status-0" name="status">
                        <option value="pending" <?php echo ( $product['status'] == 'pending' ? 'selected' : '' ); ?>>
                            Pending</option>
                        <option value="publish" <?php echo ( $product['status'] == 'publish' ? 'selected' : '' ); ?>>
                            Publish
                        </option>
                        <option value="comingsoon"
                            <?php echo ( $product['status'] == 'comingsoon' ? 'selected' : '' ); ?>>
                            Coming Soon
                        </option>
                    </select>
                </div>


                <div>
                    <label>Description:</label>
                    <textarea class="form-control mt-2" rows="10" name="description"
                        style="min-height: 100px; max-height: 100px;"><?php echo $product['description']; ?>
                    </textarea>
                </div>
                <input type="hidden" id="id" value="1" />

                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/management" class="btn-danger btn btn-outline-light">Back</a>
                </div>
                <input type="hidden" name="csrf_token" value="<?php echo CSRF::getToken('update_product_form') ?>">
            </form>
        </div>
    </div>
</section>



<!-- require the footer part -->
<?php require 'parts/footer.php' ?>
<!-- require the footer part -->