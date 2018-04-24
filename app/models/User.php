<?php

namespace App\Models;

use App\Core\App;

class User
{

    public function connect()
    {
        
        $connection = App::get('database');
        return $connection;
    }

}