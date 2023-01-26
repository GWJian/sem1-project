<?php

function callAPI( $api_url = '', $method = 'GET', $formdata = [], $headers = [] ) {

    // init curl
    $curl = curl_init();

    // assign it to curl props
    $curl_props = [
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FAILONERROR => true,
        CURLOPT_CUSTOMREQUEST => $method
    ];

    // if $formdata is not empty, then we'll add in a new key called "CURLOPT_POSTFIELDS"
    if ( !empty( $formdata ) ) {
        $curl_props[ CURLOPT_POSTFIELDS ] = json_encode( $formdata );
    }

    // if $headers is not empty, then we'll add in a new key called "CURLOPT_HTTPHEADER"
    if ( !empty( $headers ) ) {
        $curl_props[ CURLOPT_HTTPHEADER ] = $headers;
    }

    // setup curl
    curl_setopt_array( $curl, $curl_props );

    // execute curl
    $response = curl_exec( $curl );

    // catch error
    $error = curl_error( $curl );

    // close curl
    curl_close( $curl );

    if ( $error )
        return 'API not working';

    return json_decode( $response );
}



function GetApi()
{
    callAPI(
        BILLPLZ_API_URL . 'v3/bills/' . BILL_ID . '/transactions',
        'GET',
        [],
        [
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode( BILLPLZ_API_KEY . ':' )
        ]
    );
}