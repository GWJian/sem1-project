<?php

class DELETE
{
    /**
     * delete button
     */

    public static function delete_btn ( $del_id )
    {
        if (isset($_POST['delete_movie']))
        {
            'DELETE FROM movies WHERE id = :id';
        }
    }
}


// =============== dont touch=====================
// require "functions.php";

// $database = connectToDB();

    
// if (isset($_POST['delete_movie_id']))
// {
    // // var_dump($_POST['delete_movie_id']);
    // //delete 
    //  $statement = $database->prepare(
    //      'DELETE FROM movies WHERE id = :id'
    //  );

    //  $statement->execute([
    //      'id' => $_POST['delete_movie_id']
    //  ]);

    // header('Location:/movie_management');
    // exit;
// }