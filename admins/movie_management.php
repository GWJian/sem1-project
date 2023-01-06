<?php 
    
    session_start();
    //load file then only start functions
    require "includes/functions.php";
    require "includes/admin-movies.php";

    //call the MOVIES class
    $movie = new MOVIES ();

    //list out the movies
    $movies_list = $movie ->listAllMovies();
    

?>

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
                </button></a>
            <a href="/add_movie">
                <button type="button" class="btn-info btn btn-outline-light mb-2">
                    Add Movie
                </button></a>
        </div>

        <form action="">
            <table class="table bg-white">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Language</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Classification</th>
                        <th scope="col">Synopsis</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $movies_list as $movie ): ?>
                    <tr>
                        <th scope="row"><?php echo $movie['id']; ?></th>
                        <td><?php echo $movie['movie_name']; ?></td>
                        <td><?php echo $movie['genre']; ?></td>
                        <td><?php echo $movie['language']; ?></td>
                        <td><?php echo $movie['duration']; ?></td>
                        <td><?php echo $movie['release Date']; ?></td>
                        <td><?php echo $movie['classification']; ?></td>
                        <td style="overflow: hidden;white-space: nowrap;width: 200px;display: block;">
                            <?php echo $movie['synopsis']; ?>
                        </td>
                        <td>
                            <a href="/edit_movie">
                                <button type="button" class="btn-success btn mb-2">
                                    Edit
                                </button></a>
                        </td>
                        <td>
                            <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                                <!-- speficy the action as remove -->
                                <input type="hidden" name="action" value="remove" />
                                <!-- remove the selected movie from cart -->
                                <input type="hidden" name="movie_id" value="<?php echo $movie['id']; ?>" />
                                <button type="button" class="btn-danger btn mb-2">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->