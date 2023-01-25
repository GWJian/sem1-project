<!-- require the header part -->
<?php

    $orders = new ORDERS();
    // make sure user already logged in
    if ( !AUTHENTICATION::whoCanAccess('user') ){
        header('Location:/login');
        exit;
    }
    
    $user_id = $_SESSION['user']['id'];
?>


<?php
require dirname(__DIR__) . '/parts/header.php';
?>
<!-- require the header part -->

<!-- admin add movie -->
<section class="bg-dark vh-100">
    <div class="min-vh-100 container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h1 text-white">My Orders</h1>
        </div>

        <!-- List of orders placed by user in table format -->
        <table class="table table-hover table-bordered table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Products</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $orders->listOrders( $user_id ) as $order ) : ?>
                <tr>
                    <th scope="row"><?php echo $order['id']; ?></th>
                    <td>
                        <?php foreach($orders->listProductsinOrder( $order['id'] ) as $product ): ?>
                        <ul class="list-unstyled">
                            <li>
                                <?php echo $product['product_name']; ?>
                                [<?php echo $product['quantity']; ?>]
                            </li>
                        </ul>
                        <?php endforeach; ?>
                    </td>
                    <td>$<?php echo $order['total_amount']; ?></td>
                    <td><?php echo $order['status']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center my-3">
            <a href="/" class="btn btn-light btn-sm">Continue Shopping</a>
        </div>
    </div>
</section>

<!-- require the footer part -->
<?php
    require dirname(__DIR__) . '/parts/footer.php';
?>
<!-- require the footer part -->