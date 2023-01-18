<!-- require the header part -->
<?php
    // make sure only admin can access
    if ( !Authentication::whoCanAccess('user') ) {
        header('Location:/login');
        exit;
    }
    // set CSRF token
    CSRF::generateToken( 'my_order_form' );

    //load post data
    ?>


?>
<?php
require dirname(__DIR__) . '/parts/header.php';
?>
<!-- require the header part -->

<!-- admin add movie -->
<section class="bg-dark vh-100">
    <div class="min-vh-100 container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h1">My Orders</h1>
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
                <tr>
                    <th scope="row">7</th>
                    <td>
                        <ul class="list-unstyled">
                            <li>
                                Product 2 [3]
                            </li>
                        </ul>
                    </td>
                    <td>$90</td>
                    <td>pending</td>
                </tr>
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