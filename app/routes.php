<?php

    $router->get('', 'PagesController@home');

    $router->get('about', 'PagesController@about');

    $router->get('about/culture', 'PagesController@aboutculture');

    $router->get('contact', 'PagesController@contact');

    $router->get('update', 'PagesController@update');

   // $router->post('names', 'controllers/add-name.php');

    $router->get('users', 'UsersController@index');

    $router->post('users', 'UsersController@store');

    $router->post('users/delete', 'UsersController@destroy');



      