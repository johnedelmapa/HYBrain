<?php

    return [

        'database' => [

            'name' => 'todolist',
            'username' => 'root',
            'password' => '1234',
            'connection' => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
            ]
        ]

    ];

?>