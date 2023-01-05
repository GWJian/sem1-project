<?php


//get route from the global variable
$path = $_SERVER[ "REQUEST_URI" ];

//remoe beginning & ending slash
$path = trim( $path , '/' );

//remove all the URL parameters that starts with ?
$path = parse_url( $path , PHP_URL_PATH );

// var_dump( $path );

switch( $path ) {
    case 'about_us':
        require "views/about_us.php";
        break;
    case 'contant_us':
        require "views/contant_us.php";
        break;
    case 'login':
        require "views/login.php";
        break;
    case 'logout':
        require "views/logout.php";
        break;
    case 'movie_deteil':
        require "views/movie_deteil.php";
        break;      
    case 'logout':
        require "views/logout.php";
        break;
    case 'movie':
        require "views/movie.php";
        break;
    case 'privacy_policy':
        require "views/privacy_policy.php";
        break;
    case 'signup':
        require "views/signup.php";
        break;
    case 'term_of_use':
        require "views/term_of_use.php";
        break;

    // =========== Admin ==============
    case 'add_movie':
        require "admins/add_movie.php";
        break;
    case 'admin_page':
        require "admins/admin_page.php";
        break;
    case 'edit_movie':
        require "admins/edit_movie.php";
        break;
    case 'movie_management':
        require "admins/movie_management.php";
        break;

    // =========== Home ===============
    default:
        require "views/home.php";
        break;
}
