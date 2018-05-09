<?php

namespace App\Core;

class Request 
{
    public static function uri()
    {     
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD']; //GET OR POST
    }

    public static function request($field = null)
    {
        if (isset($_POST[$field])) {
            return $_POST[$field];
        }

        if (isset($_GET[$field])) {
            return $_GET[$field];
        }

        $request = array();

        if ($field == null) {
            if (isset($_POST)) {
                foreach ($_POST as $key => $value) {
                    $request[$key] = $value;
                }
            }

            if (isset($_GET)) {
                foreach ($_GET as $key => $value) {
                    $request[$key] = $value;
                }
            }
        }
        
        return $request;
    }
}

