<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GC-admin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
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
    <!-- admin main page -->
    <section class="bg-dark vh-100">
      <div class="container text-white">
        <h1 class="text-warning text-center display-1">Administration</h1>
      </div>

      <div class="container">
        <div class="list-group w-auto">
          <a
            href="/movie_management"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
              src="https://cdn-icons-png.flaticon.com/512/31/31087.png"
              alt="twbs"
              width="32"
              height="32"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Movie Management</h6>
              </div>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
              src="https://thumbs.dreamstime.com/b/ticket-icon-white-background-vector-illustration-eps-113357837.jpg"
              alt="twbs"
              width="32"
              height="32"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Ticket order</h6>
              </div>
            </div>
          </a>
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
