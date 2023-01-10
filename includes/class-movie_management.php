<?php

class PRODUCT
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
     * retrieve all product from database
     */
    public function listAllProducts()
    {
        $product = [];
        // prepare the database, execute, and the fetchAll
        $statement = $this->database->prepare('SELECT * FROM products');
        
        //execute
        $statement->execute();

        /**
         * fetch all data brom database
         * use PDO::FETCH_OBJ if you want array -> name
         * use PDO::FETCH_ASSOC if you want object  ['name']
         * or left it empty for PDO::FETCH_BOTH
         */

        //fetchAll
        $product = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $product;
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