<!-- require the header part -->
<?php

    $orders = new ORDERS();
    // make sure user already logged in
    if ( !AUTHENTICATION::whoCanAccess('admin') ){
        header('Location:/admin_page');
        exit;
    }

    require dirname(__DIR__) . '/parts/header.php';

    // var_dump(GetApi('l2vdb9ie'));

?>

<!-- admin add movie -->
<section class="bg-dark vh-100">
    <div class="min-vh-100 container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h1 text-white">All Orders</h1>
        </div>

        <!-- List of orders placed by user in table format -->
        <table class="table table-hover table-bordered table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">USER ID</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">Products</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Receipt</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( ORDERS::getAllOrders() as $order ) : ?>
                <tr>
                    <th scope="row"><?php echo User::getUserById($order['user_id'] )['name']; ?></th>
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
                        <!-- foreach($orders->listProductsinOrder( $order['id'] ) as $product ) -->
                    </td>
                    <td>$<?php echo $order['total_amount']; ?></td>
                    <td><?php echo $order['status']; ?></td>
                    <th scope="col">
                        <!-- Button trigger modal -->
                        <form action="">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-<?php echo $order['id']; ?>"
                                <?php echo ( $order['status'] === 'failed' || $order['status'] === 'pending'? 'hidden' : '' ); ?>>Details

                            </button>
                        </form>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-<?php echo $order['id']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Receipt</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- echo GetApi($order['transaction_id'])->id;  -->
                                    <div class="modal-body">
                                        BILL ID :<?php echo $order['transaction_id']; ?>
                                        <br>
                                        ID :<?php echo GetApi($order['transaction_id'])->id; ?>
                                        <br>
                                        STATUS :<?php echo GetApi($order['transaction_id'])->status; ?>
                                        <br>
                                        COMPLETE AT :<?php echo GetApi($order['transaction_id'])->completed_at; ?>
                                        <br>
                                        PAYMENT METHOD :<?php echo GetApi($order['transaction_id'])->payment_channel; ?>
                                        <br>
                                        Total Amount :<?php echo $order['total_amount']; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
                <?php endforeach; ?>
                <!-- foreach( ORDERS::getAllOrders() as $order ) -->
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