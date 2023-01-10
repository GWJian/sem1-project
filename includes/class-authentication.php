<?php

class AUTHENTICATION
{

    public static function login( $email, $password )
    {
        
    }

    public static function signup( $name, $email , $password )
    {
        return DB::connect()->insert(
            'INSERT INTO users (name,email,password)
            VALUES (:name, :email, :password)',
            [
                'name' => $name,
                'email' => $email,
                'password' => password_hash( $password,PASSWORD_DEFAULT ),
            ]
        );
    }

    public static function logout()
    {
        unset( $_SESSION['user'] );
    }


    public static function isLoggedIn()
    {
        return isset ( $_SESSION['user'] );
    }


     public static function setSession( $user_id )
     {
        $user = DB::connect()->select(
            'SELECT * FROM users WHERE id = :id',
            [
                'id'=>$user_id
            ]
        );

        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        ];
     }
}