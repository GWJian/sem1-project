<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Final_project',
        'root',
        'kxwGCh40Sn6AvFJB'
    );
    
}

$database = connectToDB();

    
if (isset($_POST['delete_movie_id']))
{
    // var_dump($_POST['delete_movie_id']);
    // delete 
     $statement = $database->prepare(
         'DELETE FROM movies WHERE id = :id'
     );

     $statement->execute([
         'id' => $_POST['delete_movie_id']
     ]);

    header('Location:/movie_management');
    exit;
}