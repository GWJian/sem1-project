<?php
    // session_start();
    // require "includes/functions.php";
?>
<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->



<!-- admin add movie -->
<section class="bg-dark vh-100">
    <div class="container text-white pt-5">
        <div class="panel panel-default panel-align">
            <div class="panel-heading">
                <h2 class="header-align">Add New Movie</h2>
                <h2></h2>
            </div>

            <div class="panel-body">

                <form action="../includes/class-insert_movie.php" method="post" enctype="multipart/form-data"
                    id="insertMovieForm">
                    <div>
                        <label for="moviename">Movie Name:</label>
                        <input type="text" class="form-control" id="moviename" name="moviename" />
                    </div>

                    <div>
                        <label for="img">Image:</label>
                        <input type="text" class="form-control" id="image" name="image" />
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label for="genre">Genre:</label>
                                <input type="text" class="form-control" id="genre" name="genre" />
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
                                <input type="text" class="form-control" id="duration" name="duration" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div>
                                <label for="language">Release Date:</label>
                                <input type="text" class="form-control" id="releaseDate" name="releaseDate" />
                            </div>
                        </div>
                    </div>


                    <div class="row ">
                        <div class="col-sm-6">
                            <label for="classification">Classification:</label>
                            <select class="form-control" id="classification" name="classification">
                                <option></option>
                                <option>U</option>
                                <option>PG</option>
                                <option>R12</option>
                                <option>R18</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <div>
                                <label for="language">Price:</label>
                                <input type="text" class="form-control" id="price" name="price" />
                            </div>
                        </div>
                    </div>



            </div>

            <div>
                <label for="movietrailer">Movie Trailer:</label>
                <input type="text" class="form-control" id="movieTrailer" name="movieTrailer" />
            </div>

            <div>
                <label for="synopsis">Info:</label>
                <textarea class="form-control" rows="5" id="synopsis" name="synopsis"></textarea>
            </div>

            <div class="mt-2">
                <form action="../includes/class-insert_movie.php" method="POST">
                    <input type="hidden" name="submit" value="">
                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                </form>
                <a href="/movie_management">
                    <button type="button" class="btn-danger btn btn-outline-light ">Back</button>
                </a>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->