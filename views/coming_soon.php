<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


<!-- products -->
<section class="bg-dark">
    <div class="container">
        <h1 style="text-align: center; color: #fbca04">Coming Soon</h1>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php foreach( PRODUCT::getPendingProducts() as $product): ?>
            <div class="col-lg-2">
                <div class="d-flex position-relative">
                    <img class="h-50 w-100" src="<?php echo $product['image_url'] ?>" />
                </div>
                <span class="text-center">
                    <a href="/product_deteil?id=<?php echo $product['id']; ?>">
                        <h3 class=""><?php echo $product['product_name'] ?></h3>
                    </a>
                    <h3 class="text-white">$<?php echo $product['price'] ?></h3>
                </span>
            </div>
            <?php endforeach ?>

        </div>
    </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->