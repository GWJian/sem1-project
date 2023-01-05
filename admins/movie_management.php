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
              <a href="index.html" class="nav-link px-2 text-white">Home</a>
            </li>
            <li>
              <a href="movie.html" class="nav-link px-2 text-white">Movies</a>
            </li>
            <li>
              <a href="contant_us.html" class="nav-link px-2 text-white"
                >Contant Us</a
              >
            </li>
          </ul>

          <div class="text-end">
            <a href="login.html">
              <button type="button" class="btn btn-outline-light me-2">
                Login
              </button></a
            >
            <a href="signup.html"
              ><button type="button" class="btn btn-warning">Sign-up</button></a
            >
            <a href="logout.html"
              ><button type="button" class="btn btn-danger">Logout</button></a
            >
          </div>
        </div>
      </div>
    </header>
    <!-- admin movie management -->
    <section class="bg-dark vh-100">
      <div class="container">
        <h2 style="color: #fbca04">Movie Management</h2>
        <div>
          <a href="addmovie.html">
            <button type="button" class="btn-info btn btn-outline-light mb-2">
              Add Movie
            </button></a
          >
        </div>

        <form action="" method="post" onsubmit="">
          <table class="table table-hover bg-white">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Genre</th>
                <th>Language</th>
                <th>Duration</th>
                <th>Release Date</th>
                <th>Cast</th>
                <th>Classification</th>
                <th>Synopsis</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>movie 01</td>
                <td>movie 01</td>
                <td>English</td>
                <td>100 minutes</td>
                <td>1/1/2022</td>
                <td></td>
                <td>18</td>
                <td
                  style="
                    text-overflow: ellipsis;
                    overflow: hidden;
                    white-space: nowrap;
                    width: 200px;
                    display: block;
                  "
                >
                  movie 01movie 01movie 01movie 01movie 01movie 01movie 01
                </td>
                <td>
                  <a href="editmovie.html"
                    ><button type="button" class="btn btn-success">
                      Edit
                    </button></a
                  >
                </td>
                <td>
                  <a href=""
                    ><button type="button" class="btn btn-danger">
                      Delete
                    </button></a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </section>

    <!-- Site footer -->
    <section class="bg-dark">
      <div class="container">
        <footer class="py-3">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
              <a href="about_us.html" class="nav-link px-2 text-muted"
                >About Us</a
              >
            </li>
            <li class="nav-item">
              <a href="term_of_use.html" class="nav-link px-2 text-muted"
                >Term of Use</a
              >
            </li>
            <li class="nav-item">
              <a href="privacy_policy.html" class="nav-link px-2 text-muted"
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
