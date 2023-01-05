<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


    <!-- admin movie management -->
    <section class="bg-dark vh-100">
      <div class="container">
        <h2 style="color: #fbca04">Movie Management</h2>
        <div class="float-end">
        <a href="/admin_page">
            <button type="button" class="btn-danger btn btn-outline-light mb-2">
              Back
            </button></a
          >
          <a href="/add_movie">
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
                <th> </th> <!-- dont delete -->
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
                    overflow: hidden;
                    white-space: nowrap;
                    width: 200px;
                    display: block;
                  "
                >
                  MOVIE Synopsis
                </td>
                <td>
                  <a href="/edit_movie"
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

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->

