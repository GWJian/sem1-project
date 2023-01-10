<?php  
    // session_start();
    //load file then only start functions
    // require "includes/functions.php";
    // require "includes/class-movie_management.php";

    //call the MOVIES class
    $products = new PRODUCT ();
    
    //list out the movies
    $products_list = $products ->listAllProducts();

?>

<!-- require the header part -->
<?php require 'parts/header.php' ?>
<!-- require the header part -->


<!-- admin Product management -->
<section class="bg-dark vh-100">
    <div class="container">
        <h2 style="color: #fbca04">Product Management</h2>
        <div class="float-end">
            <a href="/admin_page">
                <button type="button" class="btn-danger btn btn-outline-light mb-2">
                    Back
                </button></a>
            <a href="/add_product">
                <button type="button" class="btn-info btn btn-outline-light mb-2">
                    Add Product
                </button></a>
        </div>

        <form action="" method="POST">
            <table class="table bg-white">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Language</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $products_list as $product ): ?>
                    <tr>
                        <th scope="row"></th>
                        <td><?php echo $product['product_name']; ?></td>
                        <td><?php echo $product['language']; ?></td>
                        <td><?php echo $product['releasedate']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td>Maybe not</td>
                        <td>
                            <!-- =============----edit form----================== -->
                            <a href="/edit_movie">
                                <button type="button" class="btn-success btn mb-2">Edit</button>
                            </a>
                            <!-- =============----edit form----================== -->
                        </td>
                        <td>
                            <!-- =============----delete form----================== -->
                            <input type="hidden" name="delete_movie" value="<?php echo $product['id'] ?>">
                            <input type="submit" name="delete" value="Remove" class="btn btn-danger">
                            <!-- =============----delete form----================== -->
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</section>

<!-- require the footer part -->
<?php require 'parts/footer.php' ?>
<!-- require the footer part -->