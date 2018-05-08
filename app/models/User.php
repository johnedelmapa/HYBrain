<?php

namespace App\Models;

use App\Models\Model;

class User extends Model
{
    //Table Name
    protected $table = 'users';
    // Primary Key
    public $primaryKey = 'id';
    // Fillables
    protected $fillables = ['name','birthdate','telephone','address'];

}