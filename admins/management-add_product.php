<?php

?>
<!-- require the header part -->
<?php require 'parts/header.php' ?>
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

                <form action="../includes/class-insert_store.php" method="post" enctype="multipart/form-data"
                    id="insertMovieForm">
                    <div>
                        <label for="moviename">Name:</label>
                        <input type="text" class="form-control" id="moviename" name="moviename" />
                    </div>

                    <div>
                        <label for="img">Image:</label>
                        <input type="text" class="form-control" id="image" name="image" />
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label for="language">Language:</label>
                                <select class="form-control" id="language" name="language">
                                    <option>Choose Language</option>
                                    <option>English</option>
                                    <option>Mandarin</option>
                                    <option>Japanese</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label for="language">Release Date:</label>
                                <input type="text" class="form-control" id="releaseDate" name="releaseDate" />
                            </div>
                        </div>
                    </div>


                    <div class="row ">
                        <div class="col-sm-6">
                            <div>
                                <label for="language">Price:</label>
                                <input type="text" class="form-control" id="price" name="price" />
                            </div>
                        </div>
                    </div>
            </div>


            <div>
                <label for="synopsis">Description:</label>
                <textarea class="form-control" rows="5" id="synopsis" name="synopsis"></textarea>
            </div>

            <div class="mt-2">
                <form action="" method="POST">
                    <input type="hidden" name="submit" value="">
                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                </form>
                <a href="/management" class="btn-danger btn">Back</a>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>

<!-- require the footer part -->
<?php require 'parts/footer.php' ?>
<!-- require the footer part -->