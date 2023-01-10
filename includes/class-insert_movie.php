<?php

require "functions.php";

if(isset($_POST['submit']))
{

    //connect to data base
    $database = connectToDB();


    $statement = $database -> prepare(
	"INSERT INTO movies (movie_name,image_url,language,releasedate,synopsis,price)
	VALUES(:moviename,:image_url,:language,:releasedate,:synopsis,:price)"
    );
    

    $statement -> execute([
        'movie_name' => $_POST['moviename'],
        'image_url' => $_POST['image'],
        'language' => $_POST['language'],
        'releasedate' => $_POST['releaseDate'],
        'synopsis' => $_POST['synopsis'],
        'price' => $_POST['price']
    ]);

    header('Location:/movie_management');
    exit;

}

?>