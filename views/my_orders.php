<!-- require the header part -->
<?php

    $orders = new ORDERS();
    // make sure user already logged in
    if ( !AUTHENTICATION::whoCanAccess('user') ){
        header('Location:/login');
        exit;
    }
    
    $user_id = $_SESSION['user']['id'];

    require dirname(__DIR__) . '/parts/header.php';

    // var_dump(GetApi('cxxyd2uj'));
?>


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
                    <th scope="col">Receipt</th>
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
                    <th scope="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-<?php echo $order['id']; ?>">
                            Details
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-<?php echo $order['id']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
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