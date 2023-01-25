<?php

    // start session
    session_start();

    // require all the classes & functions files
    require "includes/class-db.php";
    require "includes/class-product.php";
    require "includes/class-user.php";
    require "includes/class-authentication.php";
    require "includes/class-form-validation.php";
    require "includes/class-csrf.php";
    require "includes/class-cart.php";
    require "includes/class-order.php";
    require "config.php";
    require "includes/functions.php";


//get route from the global variable
$path = $_SERVER[ "REQUEST_URI" ];

//remoe beginning & ending slash
$path = trim( $path , '/' );

//remove all the URL parameters that starts with ?
$path = parse_url( $path , PHP_URL_PATH );

// var_dump( $path );

switch( $path ) {
    case 'login':
        require "views/login.php";
        break;
    case 'logout':
        require "views/logout.php";
        break;
    case 'signup':
        require "views/signup.php";
        break;
    case 'product_deteil':
        require "views/product_deteil.php";
        break;      
    case 'coming_soon':
        require "views/coming_soon.php";
        break;
    case 'my_orders':
        require "views/my_orders.php";
        break;
    case 'cart':
        require "views/cart.php";
        break;
    case 'checkout':
        require "views/checkout.php";
        break;
    case 'payment-verification':
        require "views/payment-verification.php";
        break;
                    
    // =========== Admin ==============
    case 'admin_page':
        require "admins/admin_page.php";
        break;
    case 'add_product':
        require "admins/management-add_product.php";
        break;
    case 'edit_product':
        require "admins/management-edit_product.php";
        break;
    case 'management':
        require "admins/management-product.php";
        break;
    case 'manage-users':
        require 'admins/manage-users.php';
        break;
    case 'manage-users-edit':
        require 'admins/manage-users-edit.php';
        break;
    case 'manage-users-add':
        require 'admins/manage-users-add.php';
        break;
    case 'all_orders':
        require 'admins/all_orders.php';
        break;

    // =========== Home ===============
    default:
        require "views/home.php";
        break;
}