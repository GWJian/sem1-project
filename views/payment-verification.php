<?php

// make sure the $_GET['billplz'] is available
if ( isset( $_GET['billplz'] ) ) {

    // billplzidzq0tm2wc|billplzpaid_at2018-09-27 15:15:09 +0800|billplzpaidtrue
    $string = 'billplzid' . $_GET['billplz']['id'] . 
        '|billplzpaid_at' . $_GET['billplz']['paid_at'] . 
        '|billplzpaid' . $_GET['billplz']['paid'];

    // create a signature to compare with one provided by billplz
    $signature = hash_hmac( 'sha256', $string, BILLPLZ_X_SIGNATURE );

    //verify the signature
    if ( $signature == $_GET['billplz']['x_signature'] ) {

        //get order status
        $status = $_GET['billplz']['paid'] === 'true' ? 'completed' : 'failed';

        //udpate order status
        $order= new ORDERS();
        $order->updateOrder(
            $_GET['billplz']['id'], // billplz id as transaction_id
            $status
        );
        // var_dump( $_GET['billplz']['id'],$status);

        //redirect user back to the orders page
        header( 'Location:/my_orders' );
        exit;

    }else {
        echo 'Invalid signature';
    }

} else {
    echo 'No billplz data found';
}   