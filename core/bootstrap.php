<?php

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;

App::bind('config', require 'config.php');

//Database Connection and Initialize Query Builder
// App::bind('database', new QueryBuilder(

//     Connection::make(App::get('config')['database'])
    
// ));

function view($name, $data = [])

{
    extract($data);

    return require "app/views/{$name}.view.php";

}

function redirect($path)

{

    header("Location: /{$path}");
}

