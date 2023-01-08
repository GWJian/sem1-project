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
    <header>
      <div
        class="carousel slide"
        data-bs-ride="carousel"
        id="slider"
        data-bs-touch="true"
      >
      <div class="carousel-indicators justify-content-end">
        <button
        data-bs-target="#slider"
        data-bs-slide-to="0"
        class="active"
        ></button>
        <button data-bs-target="#slider" data-bs-slide-to="1"></button>
        <button data-bs-target="#slider" data-bs-slide-to="2"></button>
        <button data-bs-target="#slider" data-bs-slide-to="3"></button>
        <button data-bs-target="#slider" data-bs-slide-to="4"></button>
        <button data-bs-target="#slider" data-bs-slide-to="5"></button>
        <button data-bs-target="#slider" data-bs-slide-to="6"></button>
      </div>
      

        <div class="carousel-inner container">
          <div class="active">
            <img
              class="d-block w-100 "
              src="https://m.media-amazon.com/images/M/MV5BZDVlOWUwNjYtNDkzMi00YjE1LWIxMTgtMDgxNTNjOTI0MWY4XkEyXkFqcGdeQXVyNDA1NDA2NTk@._V1_FMjpg_UX1000_.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
    </header>
    <!-- Booking-banner -->
    <div class="booking-banner">
      <img src="../assets/img/booking-banner.jpg" alt="" class="img-fluid" />
    </div>
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
              <a href="/ticker_order"><button type="button" class="btn btn-danger mb-3">Buy</button></a>
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

