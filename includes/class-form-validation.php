<?php

//static class
class FORMVALIDATION
{

    public static function checkEmailUniqueness( $email )
    {
        $user = DB::connect()->select(
            'SELECT * FROM users WHERE email = :email',
            [
                'email' => $email
            ]
        );

        if ( $user )
        {
            return 'Email already been used';
        }

        return false;
    }




     public static function validate( $data, $rules = [] )
     {
        $error=false;
        
        foreach( $rules as $key => $condition )
        {
            switch( $condition )
            {
                case 'required';
                    if ( empty( $data[$key] ) )
                    {
                        $error .= 'This field (' . $key . ') is empty <br/>';
                    }
                    break;
                case 'is_password_match';
                    if ( $data['password'] !== $data['confirm_password'] ) {
                        $error .= 'Password do not match <br/>';
                    }
                    break;
                case 'email_check';
                    if ( !filter_var( $data[$key], FILTER_VALIDATE_EMAIL ) ) 
                    {
                        $error .= 'Email is invalid <br/>';
                    }
                    break;
            }
        }//end - foreach

        return $error;
     }
}






?>