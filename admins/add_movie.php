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
    <!-- admin add movie -->
    <section class="bg-dark vh-100">
      <div class="container text-white pt-5">
        <div class="panel panel-default panel-align">
          <div class="panel-heading">
            <h2 class="header-align">Add New Movie</h2>
            <h2></h2>
          </div>

          <div class="panel-body">
            <form
              action="../libs/functions/insertmovie.php"
              method="post"
              enctype="multipart/form-data"
              id="insertMovieForm"
              name="insertMovieForm"
            >
              <div>
                <label for="moviename">Movie Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="moviename"
                  name="moviename"
                />
              </div>

              <div>
                <label for="img">Image:</label>
                <input
                  type="text"
                  class="form-control"
                  id="image"
                  name="image"
                />
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div>
                    <label for="genre">Genre:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="genre"
                      name="genre"
                    />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div>
                    <label for="language">Language:</label>
                    <select class="form-control" id="language" name="language">
                      <option></option>
                      <option>English</option>
                      <option>Mandarin</option>
                      <option>Japanese</option>
                      <option>Korean</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div>
                    <label for="genre">Duration (minutes):</label>
                    <input
                      type="text"
                      class="form-control"
                      id="duration"
                      name="duration"
                    />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div>
                    <label for="language">Release Date:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="releaseDate"
                      name="releaseDate"
                    />
                  </div>
                </div>
              </div>

                <div class="col-sm-6">
                  <div>
                    <label for="classification">Classification:</label>
                    <select
                      class="form-control"
                      id="classification"
                      name="classification"
                    >
                      <option></option>
                      <option>U</option>
                      <option>PG</option>
                      <option>12</option>
                      <option>18</option>
                    </select>
                  </div>
                </div>
              </div>

              <div>
                <label for="movietrailer">Movie Trailer:</label>
                <input
                  type="text"
                  class="form-control"
                  id="movieTrailer"
                  name="movieTrailer"
                />
              </div>

              <div>
                <label for="synopsis">Info:</label>
                <textarea
                  class="form-control"
                  rows="5"
                  id="synopsis"
                  name="synopsis"
                ></textarea>
              </div>
              <button
                type="submit"
                id="submit"
                class="btn btn-default"
                name="submit"
              >
                <strong>Submit</strong>
              </button>
            </form>
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
