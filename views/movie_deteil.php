<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GC-Movie Details</title>
    <link rel="stylesheet" href="../assets/css/movie.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3//all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- nav menu-->
    <header class="p-3 bg-black">
      <div class="container">
        <div
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
        >
          <ul
            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
          >
            <li>
              <a href="/" class="nav-link px-2 text-white">Home</a>
            </li>
            <li>
              <a href="/movie" class="nav-link px-2 text-white">Movies</a>
            </li>
            <li>
              <a href="/contant_us" class="nav-link px-2 text-white"
                >Contant Us</a
              >
            </li>
          </ul>

          <div class="text-end">
            <a href="/login">
              <button type="button" class="btn btn-outline-light me-2">
                Login
              </button></a
            >
            <a href="/signup"
              ><button type="button" class="btn btn-warning">Sign-up</button></a
            >
            <a href="/logout"
              ><button type="button" class="btn btn-danger">Logout</button></a
            >
          </div>
        </div>
      </div>
    </header>
    <!-- Movies -->
    <section class="bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="PosterArt">
              <br />
              <img
                src="https://m.media-amazon.com/images/M/MV5BYmZlZDZkZjYtNzE5Mi00ODFhLTk2OTgtZWVmODBiZTI4NGFiXkEyXkFqcGdeQXVyMTE5MTg5NDIw._V1_.jpg"
                class="img-responsive"
                style="width: 360px; height: 480px"
              />
            </div>
          </div>
          <div class="col-md-8 content">
            <br />
            <h2 class="text-warning">Details - movie 01</h2>
            <br />
            <div class="text-white">
              <h4>Release Date: 1/1/2022</h4>
              <br />
              <h4>Language: English</h4>
              <br />
              <h4>Classification: 18</h4>
              <br />
              <h4>Genre: movie 01</h4>
              <br />
              <h4>Duration: 100 minutes</h4>
              <br />
              <h4>Cast:</h4>
              <br />
            </div>

            <p>
              Synopsis: movie 01movie 01movie 01movie 01movie 01movie 01movie 01
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Site footer -->
    <section class="bg-dark">
      <div class="container">
        <footer class="py-3">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
              <a href="/about_us" class="nav-link px-2 text-muted"
                >About Us</a
              >
            </li>
            <li class="nav-item">
              <a href="/term_of_use" class="nav-link px-2 text-muted"
                >Term of Use</a
              >
            </li>
            <li class="nav-item">
              <a href="/privacy_policy" class="nav-link px-2 text-muted"
                >Privacy Policy</a
              >
            </li>
          </ul>
          <p class="text-center text-muted">
            Copyright Reserved © Gold Cinema . All Rights Reserved
          </p>
        </footer>
      </div>
    </section>

    <!-- --------------------------------------------------------------- -->
    <footer class="text-white bg-dark text-center py-3">
      <small>For Educational purposes only.</small>
    </footer>
    <!-- --------------------------------------------------------------- -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
