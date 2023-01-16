<!-- require the header part -->
<?php require  'parts/header.php' ?>
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
                    <input type="text" class="form-control" id="moviename" value="movie 01" />
                </div>

                <div class="row">
                    <div class="d-flex">
                        <div class="col-sm-10">
                            <label for="img">Image:</label>
                            <input type="text" class="form-control" id="" value="" />
                        </div>
                        <img src="https://m.media-amazon.com/images/M/MV5BYmZlZDZkZjYtNzE5Mi00ODFhLTk2OTgtZWVmODBiZTI4NGFiXkEyXkFqcGdeQXVyMTE5MTg5NDIw._V1_.jpg"
                            style="width: 100px" class="ms-5" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <label>Language:</label>
                            <select class="form-control" name="language">
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
                            <label>Release Date:</label>
                            <input type="text" class="form-control" id="releaseDate" name="releasedate" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div>
                            <label>Price:</label>
                            <input type="text" class="form-control" id="releaseDate" name="price" />
                        </div>
                    </div>
                </div>


                <div>
                    <label>Description:</label>
                    <textarea class="form-control mt-2" rows="10" name="description">text</textarea>
                </div>
                <input type="hidden" id="id" value="1" />

                <div class="mt-2">
                    <a class="btn-success btn btn-outline-light">Add Movie</a>
                    <a href="/management" class="btn-danger btn btn-outline-light">Back</a>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- require the footer part -->
<?php require 'parts/footer.php' ?>
<!-- require the footer part -->