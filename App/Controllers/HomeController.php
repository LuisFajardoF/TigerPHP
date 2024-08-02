<?php 

namespace App\Controllers;


class HomeController
{
    public function show()
    {
        return view('index');    
    }

    public function create_user()
    {
        return view('create-user');
    }
}