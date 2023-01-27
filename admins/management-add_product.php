<?php

  // make sure only admin can access
  if ( !Authentication::whoCanAccess('editor') ) {
    header('Location:/admin_page');
    exit;
  }
    // step 1: set CSRF token   
    CSRF::generateToken('product_add_form'); 

      // step 2: make sure post request
  if ( $_SERVER ["REQUEST_METHOD"] === 'POST' )
    {
        // step 3: do error check
        $rules=[
            'product_name'=>'required',
            'image_url'=>'required',
            // 'releasedate'=>'required',
            'price'=>'required',
            'csrf_token'=>'product_add_form_csrf_token',
        ];

        $error = FORMVALIDATION::validate(
            $_POST,
            $rules
        );

        if ( !$error ){
            // step 4: update user  
            PRODUCT::add(
                $_SESSION['user']['id'],//defined who is the user id
                $_POST['product_name'],
                $_POST['image_url'],
                // $_POST['releasedate'],
                $_POST['price'],
                $_POST['description'],
            );


            // step 5: remove the CSRF token
            CSRF::removeToken( 'product_add_form' );


            // step 6:redirect to manage users page
            header('Location: /management');
            exit;
        }// end - $error

    
    }
?>
<!-- require the header part -->
<?php require 'parts/header.php' ?>
<!-- require the header part -->



<!-- admin add movie -->
<section class="bg-dark vh-100">
    <div class="container text-white pt-5">
        <div class="panel panel-default panel-align">
            <div class="panel-heading">
                <h2 class="header-align">Add Product</h2>
                <h2></h2>
            </div>

            <div class="panel-body">

                <?php require dirname( __DIR__ ) . '/parts/error_box.php'; ?>
                <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                    <div>
                        <label>Name:</label>
                        <input type="text" class="form-control" name="product_name" />
                    </div>

                    <div>
                        <label>Image:</label>
                        <input type="text" class="form-control" name="image_url" />
                    </div>

                    <!-- <div class="row">
                        <div class="col-sm-6">
                            <div class="py-3">
                                <label for="releasedate">Release Date:</label>
                                <input type="date" id="releasedate" name="releasedate">
                            </div>
                        </div>
                    </div> -->


                    <div class="row ">
                        <div class="col-sm-6">
                            <div>
                                <label for="language">Price:</label>
                                <input type="number" class="form-control" name="price" />
                            </div>
                        </div>
                    </div>
            </div>


            <div>
                <label>Description:</label>
                <textarea class="form-control" rows="5" name="description"></textarea>
            </div>

            <div class="mt-2">
                <form action="" method="POST">
                    <input type="hidden" name="submit" value="">
                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                </form>
                <a href="/management" class="btn-danger btn">Back</a>
            </div>
            <input type="hidden" name="csrf_token" value="<?php echo CSRF::getToken('product_add_form') ?>">
            </form>
        </div>
    </div>
    </div>
</section>

<!-- require the footer part -->
<?php require 'parts/footer.php' ?>
<!-- require the footer part -->