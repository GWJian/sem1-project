<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GC-login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <style type="text/css">
      body {
        background: rgb(33, 37, 41);
      }
    </style>
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
            <li><a href="/movie" class="nav-link px-2 text-white">Movies</a></li>
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
    
    <!-- Login -->
    <section>
      <div class="container mt-5 mb-2 mx-auto" style="max-width: 900px">
        <div class="min-vh-50">
          <!-- login form -->
          <div
            class="card rounded shadow-sm mx-auto border-primary"
            style="max-width: 500px"
          >
            <div class="card-body bg-dark text-white">
              <h5 class="card-title text-center mb-3 py-3 border-bottom">
                Login To Your Account
              </h5>
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                  />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                  />
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary btn-fu">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>

          <!-- links -->
          <div
            class="d-flex justify-content-between align-items-center gap-3 mx-auto pt-3"
            style="max-width: 500px"
          >
            <a href="/" class="text-decoration-none small"
              ><i class="bi bi-arrow-left-circle"></i> Go back</a
            >
            <a href="/signup" class="text-decoration-none small"
              >Don't have an account? Sign up here
              <i class="bi bi-arrow-right-circle"></i
            ></a>
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
