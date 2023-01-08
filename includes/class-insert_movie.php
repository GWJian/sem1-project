<?php

require "functions.php";

if(isset($_POST['submit']))
{

    //connect to data base
    $database = connectToDB()


    $statement = $database -> prepare(
	"INSERT INTO movies (movie_name,image_url,genre,language,duration,releasedate,classification,movie_trailer_url,synopsis)
	VALUES(:moviename,:image_url,:genre,:language,:duration,:releasedate,:classification,:movieTrailer,:synopsis)";
    );
    

    $statement -> execute([
        'movie_name' => $_POST['movies'],
        'image_url' => $_POST['movies'],
        'genre' => $_POST['movies'],
        'language' => $_POST['movies'],
        'duration' => $_POST['movies'],
        'releasedate' => $_POST['movies'],
        'movie_trailer_url' => $_POST['movies'],
        'synopsis' => $_POST['movies']
    ]);

    header('Location:/movie_management');
    exit;

}

?>