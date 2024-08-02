<?php 

namespace App\Controllers;

use App\Models\User;

class UsersController {

    public function create()
    {
        $domain = \Core\App::get('config')['domain'];

        $user = User::where('username', $_POST['email']);
        
        if ($user == null) {
            //ORM Eloquent
            User::create([
                'username' => $_POST['email'], // username without domain
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'role' => $_POST['role'],
                'email' => $_POST['email'] . $domain,
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ]);
        }

        return redirect('/index');
    }

    public function show()
    {  
        $current_user = User::find($_SESSION['id']);
        
        return view('show-user', [
            'user' => $current_user,
        ]);
    }
}