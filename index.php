<?php

    // start session
    session_start();

    // require all the classes & functions files
    require "includes/functions.php";
    require "includes/class-movie_management.php";
    // =================
    require "includes/class-db.php";
    require "includes/class-user.php";
    require "includes/class-authentication.php";
    require "includes/class-form-validation.php";

//get route from the global variable
$path = $_SERVER[ "REQUEST_URI" ];

//remoe beginning & ending slash
$path = trim( $path , '/' );

//remove all the URL parameters that starts with ?
$path = parse_url( $path , PHP_URL_PATH );

// var_dump( $path );

switch( $path ) {
    case 'contant_us':
        require "views/contant_us.php";
        break;
    case 'login':
        require "views/login.php";
        break;
    case 'logout':
        require "views/logout.php";
        break;
    case 'product_deteil':
        require "views/product_deteil.php";
        break;      
    case 'logout':
        require "views/logout.php";
        break;
    case 'store':
        require "views/store.php";
        break;
    case 'signup':
        require "views/signup.php";
        break;

    // =========== Admin ==============
    case 'add_product':
        require "admins/add_product.php";
        break;
    case 'admin_page':
        require "admins/admin_page.php";
        break;
    case 'edit_movie':
        require "admins/edit_store.php";
        break;
    case 'management':
        require "admins/management.php";
        break;
    case 'cart':
        require "admins/cart.php";
        break;
    case 'dashboard':
        require 'admins/dashboard.php';
        break;

    // =========== Home ===============
    default:
        require "views/home.php";
        break;
}