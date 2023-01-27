<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


<!-- products -->
<section class="bg-dark">
    <div class="container">
        <h1 style="text-align: center; color: #fbca04">Product</h1>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php foreach( PRODUCT::getPublishProducts() as $product): ?>
            <div class="col-lg-2">
                <div class="d-flex position-relative">
                    <div class="">

                    </div>
                    <img class="h-50 w-100" src="<?php echo $product['image_url'] ?>" />
                </div>
                <span class="text-center">
                    <a href="/product_deteil?id=<?php echo $product['id']; ?>">
                        <h3 class=""><?php echo $product['product_name'] ?></h3>
                    </a>
                    <h4 class="text-white">$<?php echo $product['price'] ?></h4>

                    <!-- add to cart button start -->
                    <?php if (AUTHENTICATION::isLoggedIn()): ?>
                    <form action="/cart" method="POST">
                        <button class="btn btn-primary text-white me-1">Add to cart</button>
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    </form>
                    <?php endif; ?>
                    <!-- add to cart button end -->
                </span>
            </div>
            <?php endforeach ?>

        </div>
    </div>
</section>

<!-- Coming soon -->
<section class="bg-dark">
    <div class="container">
        <h1 style="text-align: center; color: #fbca04">Coming Soon</h1>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php foreach( PRODUCT::getComingSoonProducts() as $product): ?>
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