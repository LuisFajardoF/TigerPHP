<?php 

namespace App\Controllers;

use Core\{App, Auth};

class LoginController
{
    public function show()
    {
        return view('login-form');    
    }
    public function login()
    {
        $domain = App::get('config')['domain'];
        Auth::tryLogin(($_POST['email'] . $domain), $_POST['password']);

        if (Auth::check()) {
            return redirect('/index');
        } 
        
        return redirect('/');    
    }    
    public function logout()
    {
        Auth::logout();

        return redirect('/');    
    }    
}