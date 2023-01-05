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

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="../assets/img/banner-5.jpg"
              alt=""
              class="d-block w-100"
            />
          </div>
          <!-- <div class="carousel-item">
            <img src="../assets/img/banner-2.jpg" alt="" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="../assets/img/banner-3.jpg" alt="" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="../assets/img/banner-4.jpg" alt="" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="../assets/img/banner-5.jpg" alt="" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="../assets/img/banner-6.jpg" alt="" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="../assets/img/banner-7.jpg" alt="" class="d-block w-100" />
          </div> -->
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
          <li class="position-relative">
            <div class="hover-background">
              <div
                class="button d-flex flex-column position-absolute top-50 start-50 translate-middle"
              >
                <button type="button" class="btn btn-warning mb-3">Buy</button>
                <button type="button" class="btn btn-dark">Info</button>
              </div>
            </div>
            <img src="../assets/img/showing-2.jpg" alt="" />
            <p>Black Adam</p>
          </li>
        </ul>
      </section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->

