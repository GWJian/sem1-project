<?php

class MOVIES
{
    public $database;

    public function __construct()
    {
       try {
            //we will try to establish the database connection
            $this->database = connectToDB();
       } catch ( PDOException $error ) {
        die ("Datavase Connection Failed:" . $error->getMessage());
       }
    }

    /**
     * retrieve all movies from database
     */
    public function listAllMovies()
    {
        $movies = [];
        // prepare the database, execute, and the fetchAll
        $statement = $this->database->prepare('SELECT * FROM movies');
        
        //execute
        $statement->execute();

        /**
         * fetch all data brom database
         * use PDO::FETCH_OBJ if you want array -> name
         * use PDO::FETCH_ASSOC if you want object  ['name']
         * or left it empty for PDO::FETCH_BOTH
         */

        //fetchAll
        $movies = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $movies;
    }

    /**
     * 简化版
        *   {
        
        *   // prepare the database, execute, and the fetchAll
        *   $statement = $this->database->prepare('SELECT * FROM movies');
        
        *  //execute
        *  $statement->execute();

        *  //fetchAll
        *  return $statement->fetchAll();

        *  }
     */
}