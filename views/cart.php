<!-- require the header part -->
<?php
    // make sure only admin can access
    if ( !Authentication::whoCanAccess('user') ) {
        header('Location:/login');
        exit;
    }
    // set CSRF token
    CSRF::generateToken( 'cart_form' );
    CSRF::generateToken( 'delete_cart_form' );

    // make sure it's POST request
    if ( $_SERVER["REQUEST_METHOD"] == 'POST' ) {

        // if $_POST['action] is remove, then proceed removeProductFromCart function
        if ( isset( $_POST['action'] ) && $_POST['action'] == 'remove') {
            // remove product from cart
            CART::removeProductFromCart( ( $_POST['product_id'] ) );
            CSRF::removeToken('delete_cart_form');
        } else {
        }
            
            // make sure product_id is available in $_POST
            if ( isset( $_POST['product_id'] ) ) 
            {
                // add product_id into cart
                CART::add( $_POST['product_id'] );
            }
        }

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
                <h1 class="h1 text-white">My Order</h1>
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
                    <?php foreach ( CART::getAllproductinCart() as $product ): ?>
                    <tr>
                        <td><?php echo $product['product_name']; ?></td>
                        <td><?php echo $product['price']; ?></td>

                        <td>
                            <!-- decrease -->
                            <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
                                <button type="submit" class="btn"><i class="bi bi-dash-lg"></i></button>
                                <input type="hidden" name="action" value="decrease">
                                <input type="hidden" name="product_id_d" value="<?=$product['id']?>">
                            </form>

                            <p><?=$product['quantity']?></p>

                            <!-- increase -->
                            <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
                                <button type="submit" class="btn"><i class="bi bi-plus-lg"></i></button>
                                <input type="hidden" name="action" value="increase">
                                <input type="hidden" name="product_id_i" value="<?=$product['id']?>">
                            </form>
                        </td>

                        <td><?php echo $product['total']; ?></td>
                        <td>

                            <form method="POST" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                                <!-- speficy the action as remove -->
                                <input type="hidden" name="action" value="remove" />
                                <!-- remove the selected product from cart -->
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>" />
                                <input type="hidden" name="csrf_token" value="<?=CSRF::getToken('delete_cart_form')?>">
                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    <?php endforeach; ?>

                    <?php if (empty($_SESSION['cart'])): ?>
                    <td colspan="5">Your cart is empty.</td>
                    <?php endif; ?>

                    <?php if ( ! empty($_SESSION['cart'])):?>
                    <tr>
                        <td colspan="3" class="text-end">Total</td>
                        <td>$<?php echo CART::total(); ?></td>
                        <td></td>
                    </tr>
                    <?php endif; // end - empty( $cart->listAllProductsinCart() )?>


                </tbody>
            </table>

            <div class="d-flex justify-content-between align-items-center my-3">
                <a href="/" class="btn btn-light btn-sm">Continue Shopping</a>
                <!-- if there is product in cart, then only display the checkout button -->
                <?php if ( !empty( CART::getAllproductinCart() ) ) : ?>
                <form method="POST" action="/checkout">
                    <button class="btn btn-primary">Checkout</a>
                </form>
                <?php endif; ?>
            </div>

        </div>
</section>

<!-- require the footer part -->
<?php
    require dirname(__DIR__) . '/parts/footer.php';
?>
<!-- require the footer part -->