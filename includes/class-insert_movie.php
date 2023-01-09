<?php

require "functions.php";

if(isset($_POST['submit']))
{

    //connect to data base
    $database = connectToDB();


    $statement = $database -> prepare(
	"INSERT INTO movies (movie_name,image_url,genre,language,duration,releasedate,classification,movie_trailer_url,synopsis,price)
	VALUES(:moviename,:image_url,:genre,:language,:duration,:releasedate,:classification,:movieTrailer,:synopsis,:price)"
    );
    

    $statement -> execute([
        'movie_name' => $_POST['moviename'],
        'image_url' => $_POST['image'],
        'genre' => $_POST['genre'],
        'language' => $_POST['language'],
        'duration' => $_POST['duration'],
        'releasedate' => $_POST['releaseDate'],
        'classification' => $_POST['classification'],
        'movie_trailer_url' => $_POST['movieTrailer'],
        'synopsis' => $_POST['synopsis'],
        'price' => $_POST['price']
    ]);

    header('Location:/movie_management');
    exit;

}

?>