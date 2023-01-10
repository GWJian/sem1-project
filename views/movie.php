<?php 
    
    // session_start();
    //load file then only start functions
    // require "includes/functions.php";
    // require "includes/class-movie_management.php";

    //call the MOVIES class
    $movies = new MOVIES ();

    //list out the movies
    $movies_list = $movies ->listAllMovies();
?>



<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


<!-- Movies -->
<section class="bg-dark">
    <div class="container">
        <h1 style="text-align: center; color: #fbca04">Now Showing</h1>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ( $movies_list as $movie ): ?>
            <div class="col-lg-2">
                <div class="d-flex position-relative">
                    <div class="hover-background d-flex align-items-center justify-content-center">
                        <div>
                            <a href="/cart"><button type="button" class="btn btn-danger">Buy</button></a>

                            <a href="/movie_deteil"><button type="button" class="btn btn-warning">Info</button></a>
                        </div>
                    </div>
                    <img class="h-50 w-100" src="<?php echo $movie['image_url']; ?>" />
                </div>
                <span>
                    <h3 class="text-center text-white"><?php echo $movie['movie_name']; ?></h3>
                    <h3 class="text-center text-white">$<?php echo $movie['price']; ?></h3>
                </span>
            </div>
            <?php endforeach; ?>

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