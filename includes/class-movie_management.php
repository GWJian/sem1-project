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
s
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