<?php 

namespace Core;

use App\Models\User;
class Auth 
{
    public static function tryLogin($email, $password)
    {
        $users = User::where('email', $email)->get(); //ORM
    
        if (!empty($users) AND password_verify($password, $users[0]->password)) {
            static::ensureSessionStarted();
            $_SESSION['email'] = $users[0]->email;
            $_SESSION['name'] = $users[0]->name;
            $_SESSION['id'] = $users[0]->id;
            
            return true;
        }

        return false;
    }

    public static function check()
    {
        static::ensureSessionStarted();
        if (empty($_SESSION['id'])) {
            return false;
        }

        return true;
    }

    public static function logout()
    {
        session_start();   
        session_destroy();
    }

    public static function ensureSessionStarted()
    {
        if (empty(session_id())) {
            session_start();
        }
    }
}