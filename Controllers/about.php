<?php

$users = User::findBy(['email' => 'luis.fajardo@todos.com']);
dd($users[0]->password);

require 'Views/about.view.php';