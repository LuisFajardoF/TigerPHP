<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'role',
        'email',
        'password',
    ];

    public $timestamps = false;
}