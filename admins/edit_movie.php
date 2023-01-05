<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


    <!-- admin add movie -->
    <section class="bg-dark vh-100">
      <div class="container text-white pt-5">
        <div>
          <h2 class="header-align">Edit Movie</h2>
        </div>

        <div>
          <form action="" method="post" id="insertMovieForm">
            <div>
              <label for="moviename">Movie Name:</label>
              <input
                type="text"
                class="form-control"
                id="moviename"
                value="movie 01"
              />
            </div>

            <div class="row">
              <div class="form-group d-flex">
                <div class="col-sm-10">
                  <label for="img">Image:</label>
                  <input type="text" class="form-control" id="" value="" />
                </div>
                <img
                  src="https://m.media-amazon.com/images/M/MV5BYmZlZDZkZjYtNzE5Mi00ODFhLTk2OTgtZWVmODBiZTI4NGFiXkEyXkFqcGdeQXVyMTE5MTg5NDIw._V1_.jpg"
                  style="width: 100px"
                  class="ms-5"
                />
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div>
                  <label for="genre">Genre:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="genre"
                    value="movie 01"
                  />
                </div>
              </div>

              <div class="col-sm-6">
                <div>
                  <label for="language">Language:</label>
                  <select class="form-control" id="language">
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
                    value="100"
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
                    value="1/1/2022"
                  />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div>
                  <label for="classification">Classification:</label>
                  <select class="form-control" id="classification">
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
                value="https://www.youtube.com/"
              />
            </div>

            <div>
              <textarea class="form-control mt-3" rows="10">text</textarea>
              <label for="synopsis">Synopsis:</label>
            </div>
            <input type="hidden" id="id" value="1" />

            <button
              type="submit"
              id="submit"
              class="btn btn-success mt-3"
            >
              <strong>Submit</strong>
            </button>
          </form>
        </div>
      </div>
    </section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->

