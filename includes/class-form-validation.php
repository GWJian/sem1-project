<?php

//static class
class FORMVALIDATION
{
<<<<<<< HEAD
    /**
     * make sure emaill is unique
     */
    public static function checkEmailUniqueness( $email )
    {
        //check if email already used by another user
=======

    public static function checkEmailUniqueness( $email )
    {
>>>>>>> 418df55e98ba05fb01cae793236a375089e385e2
        $user = DB::connect()->select(
            'SELECT * FROM users WHERE email = :email',
            [
                'email' => $email
            ]
        );

<<<<<<< HEAD
        //if user with the same email is laready exists
=======
>>>>>>> 418df55e98ba05fb01cae793236a375089e385e2
        if ( $user )
        {
            return 'Email already been used';
        }

        return false;
    }


<<<<<<< HEAD
    /**
     * do all the form validation
     */
=======

>>>>>>> 418df55e98ba05fb01cae793236a375089e385e2

     public static function validate( $data, $rules = [] )
     {
        $error=false;
        
<<<<<<< HEAD
        //do all the form validation
=======
>>>>>>> 418df55e98ba05fb01cae793236a375089e385e2
        foreach( $rules as $key => $condition )
        {
            switch( $condition )
            {
<<<<<<< HEAD
                //make sure the value is not empty
                case 'required';
                // round 1 - $data[$key] = $_POST['email']
=======
                case 'required';
>>>>>>> 418df55e98ba05fb01cae793236a375089e385e2
                    if ( empty( $data[$key] ) )
                    {
                        $error .= 'This field (' . $key . ') is empty <br/>';
                    }
                    break;
<<<<<<< HEAD
                //make sure password is match
=======
>>>>>>> 418df55e98ba05fb01cae793236a375089e385e2
                case 'is_password_match';
                    if ( $data['password'] !== $data['confirm_password'] ) {
                        $error .= 'Password do not match <br/>';
                    }
                    break;
<<<<<<< HEAD
                //make sure email is valid
=======
>>>>>>> 418df55e98ba05fb01cae793236a375089e385e2
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