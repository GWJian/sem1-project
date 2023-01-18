<!-- require the header part -->
<?php
    // make sure only admin can access
    if ( !Authentication::whoCanAccess('user') ) {
        header('Location:/login');
        exit;
    }
    // set CSRF token
    CSRF::generateToken( 'cart_form' );

    //load post data
    $product = PRODUCT::getProductById( $_GET['id'] );
    ?>


?>
<?php
require dirname(__DIR__) . '/parts/header.php';
?>
<!-- require the header part -->

<!-- admin add movie -->
<section class="bg-dark vh-100">
    <div class="container mt-5 mb-2 mx-auto" style="max-width: 900px;">

        <div class="min-vh-100">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h1">My Cart</h1>
            </div>

            <!-- List of products user added to cart -->
            <table class="table table-hover table-bordered table-striped table-light">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>name</td>
                        <td>price</td>
                        <td class="d-flex">
                            <form method="POST" action="">
                                <button class="btn btn-warning btn-sm">
                                    <i class="bi bi-dash-lg"></i>
                                </button>
                                <input type="hidden" name="action" value="decrease">
                                <input type="hidden" name="decrease_id" value="php productt id">
                            </form>
                            <div>
                                <p> php product quatity</p>
                            </div>
                            <form action="" method="POST">
                                <button class="btn btn-success btn-sm">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                                <input type="hidden" name="action" value="increase">
                                <input type="hidden" name="increase_id" value="php productt id">
                            </form>
                            </form>
                        </td>
                        <td>total price</td>
                        <td>
                            <form method="POST" action="">
                                <!-- speficy the action as remove -->
                                <input type="hidden" name="action" value="remove" />
                                <!-- remove the selected product from cart -->
                                <input type="hidden" name="product_id" value="product id" />
                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>


                    <td colspan="5">Your cart is empty.</td><!-- show this when cart is ntg -->

                    <tr>
                        <td colspan="3" class="text-end">Total</td>
                        <td>$total</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex justify-content-between align-items-center my-3">
                <a href="/" class="btn btn-light btn-sm">Continue Shopping</a>
                <!-- if there is product in cart, then only display the checkout button -->
                <form method="POST" action="/checkout">
                    <button class="btn btn-primary">Checkout</a>
                </form>
            </div>

        </div>
</section>

<!-- require the footer part -->
<?php
    require dirname(__DIR__) . '/parts/footer.php';
?>
<!-- require the footer part -->