<?php


require 'vendor/autoload.php';

require 'core/bootstrap.php';


use App\Core\{Router, Request};

//$router = new Router;

// require 'routes.php'; 

// //var_dump($_SERVER['REQUEST_URI']);

// //$router = Router::load('routes.php');

//$uri = trim($_SERVER['REQUEST_URI'], '/');
 
// require $router->direct($uri);

Router::load('app/routes.php')

    ->direct(Request::uri(), Request::method());
  
?>      