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
                    <div class="hover-background d-flex align-items-center justify-content-center">
                        <form method="POST" action="/cart?id=<?php echo $product['id']; ?>">
                            <!-- product id will pass to the cart page -->
                            <input type="hidden" name="product" value="<?php echo $product['id']; ?>" />
                            <button class="btn btn-danger me-3">Buy</button>
                        </form>
                        <div>
                            <a href="/product_deteil?id=<?php echo $product['id']; ?>" class="btn btn-warning">Info</a>
                        </div>
                    </div>
                    <img class="h-50 w-100" src="<?php echo $product['image_url'] ?>" />
                </div>
                <span>
                    <h3 class="text-center text-white"><?php echo $product['product_name'] ?></h3>
                    <h3 class="text-center text-white">$<?php echo $product['price'] ?></h3>
                </span>
            </div>
            <?php endforeach ?>


            <!-- sec img here -->
            <!-- <div class="col-lg-3">
            <div class="d-flex position-relative">
              <div class="hover-background d-flex align-items-center justify-content-center">
                <div>
                  <a href=""
                    ><span>PHP to other page,synopsis,hover effect</span></a
                  >
                </div>
              </div>
              <img
                class="h-75 w-100"
                src="https://m.media-amazon.com/images/M/MV5BYmZlZDZkZjYtNzE5Mi00ODFhLTk2OTgtZWVmODBiZTI4NGFiXkEyXkFqcGdeQXVyMTE5MTg5NDIw._V1_.jpg"
              />
            </div>
            <span><h3 class="text-center text-white">movie name</h3></span>
          </div> -->
        </div>
    </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->