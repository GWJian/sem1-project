<?php

class DB
{
    private $db;

    public function __construct()
    {
        try{
            $this->db = new PDO(
                'mysql:host=devkinsta_db;dbname=Final_project',
                'root',
                'kxwGCh40Sn6AvFJB'
            );
        }catch( PDOException $error ){
            die( "Database connection failed" );
        }
    }

    public static function connect()
    {
        return new self();

    }

    public function select( $sql, $data = [])
    {

        $statement = $this->db->prepare( $sql );
        $statement->execute($data);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }


    public function insert( $sql, $data )
    {
        $statement = $this->db->prepare( $sql );
        $statement->execute( $data );
        return $this->db->lastInsertId();
    }


    public function update()
    {

    }

    public function delete()
    {
<<<<<<< HEAD
        $statement = $this->db->prepare( $sql );
        $statement->execute ([
            'id' => $_POST['delete_movie']
        ]);
=======

>>>>>>> 418df55e98ba05fb01cae793236a375089e385e2
    }
}