<?php
/**
 * Created by PhpStorm.
 * User: Andreas
 * Date: 2015-08-31
 * Time: 13:17
 */

namespace model;



class LoginModel
{
    //dummy data
    private static $userName = "Admin";
    private static $password = "Password";

    public $userIsLoggedIn = false;


<<<<<<< HEAD
        return false;
    }

    protected function setUserLoggedIn($username)
    {
        $_SESSION[self::$userLoggedInSession] = true;
        return true;
    }


    public function setUsernameInSession($name)
=======
    public function correctLoginCredidentials($userName, $password)
<<<<<<< HEAD
>>>>>>> 06f2d2fa6b9544548e570506b1f9ab8342f191ed
=======
>>>>>>> master
>>>>>>> f533cd31c7e4af0e004b0feead6e4ec63e3cc3e4
    {
        if(self::$userName == trim($userName) && self::$password == trim($password)){
            return true;
        }

        return false;
    }

<<<<<<< HEAD

    public function isUserLoggedIn()
    {
        return isset($_SESSION[self::$userLoggedInSession]);
    }



    public function logoutUser()
    {
        session_unset();
    }
=======

<<<<<<< HEAD
>>>>>>> 06f2d2fa6b9544548e570506b1f9ab8342f191ed
=======
>>>>>>> master
>>>>>>> f533cd31c7e4af0e004b0feead6e4ec63e3cc3e4
}