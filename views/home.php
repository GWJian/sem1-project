<?php 
    
    session_start();
    //load file then only start functions
    require "includes/functions.php";
    require "includes/class-movie_management.php";

    //call the MOVIES class
    $movies = new MOVIES ();

    //list out the movies
    $movies_list = $movies ->listAllMovies();
?>

<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->

<!-- header -->
<div class="carouselss">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <?php foreach ( $movies_list as $movie ): ?>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $movie['image_url']; ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <?php endforeach; ?>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Booking-banner -->
<!-- <div class="booking-banner">
      <img src="../assets/img/booking-banner.jpg" alt="" class="img-fluid" />
    </div> -->
<!-- Booking-banner -->
<main>
    <!-- showing tap -->
    <section class="showing bg-black py-2">
        <ul class="nav nav-tabs justify-content-lg-start ps-5">
            <li>
                <button class="nav-link active">Popular Movies</button>
            </li>
        </ul>

        <!-- =========showing img======== -->
        <ul class="nav d-flex justify-content-center text-white text-center">
            <?php foreach ( $movies_list as $movie ): ?>
            <li class="position-relative">
                <div class="hover-background">
                    <div class="button d-flex flex-column position-absolute top-50 start-50 translate-middle">
                        <a href="/cart"><button type="button" class="btn btn-danger mb-3">Buy</button></a>
                        <a href="/movie_deteil"><button type="button" class="btn btn-warning">Info</button></a>
                    </div>
                </div>
                <img src="<?php echo $movie['image_url']; ?>" alt="" />
                <p><?php echo $movie['movie_name']; ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- require the footer part -->
    <?php require "parts/footer.php" ?>
    <!-- require the footer part -->