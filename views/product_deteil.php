<?php

// make sure only admin can access
if ( !Authentication::whoCanAccess('user') ) {
    header('Location:/login');
    exit;
}

//load post data
$product = PRODUCT::getProductById( $_GET['id'] );
?>

<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


<!-- Movies -->
<section class="bg-dark">
    <div class="container">
        <?php require dirname( __DIR__ ) . '/parts/error_box.php'; ?>
        <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
            <div class="row">
                <div class="col-md-5">
                    <div class="PosterArt">
                        <br />
                        <img src="<?php echo $product['image_url']; ?>" class="img-responsive"
                            style="width: 500px; height: 500px" />
                    </div>
                </div>
                <div class="col-md-7 content">
                    <br />
                    <h2 class="text-warning">Details - <?php echo $product['product_name']; ?></h2>
                    <br />
                    <div class="text-white">
                        <h4>Release Date: <?php echo $product['releasedate']; ?></h4>
                        <br />
                        <h4>Price: $<?php echo $product['price']; ?></h4>
                        <br />
                        <p>
                            Description: <?php echo $product['description']; ?>
                        </p>
                    </div>

                    <a href="/cart"><button type="button" class="btn btn-danger mb-3"
                            <?php echo ( $product['status'] === 'pending' ? 'hidden' : '' ); ?>>Buy</button></a>

                </div>
            </div>
        </form>
    </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->