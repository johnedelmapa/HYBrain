<?php

namespace App\Models;

use PDO;
use App\Core\App;
use App\Core\Database\QueryBuilder;


class User extends QueryBuilder
{

    protected $table = 'users';
    protected $fillables = ['name','birthdate','telephone','address'];
    public $primaryKey = 'id';


    public function showUsers()  
    {
        // $statement = $this->pdo->prepare($this->selectAll());   

        // $statement->execute();
        
        // return $statement->fetchAll(PDO::FETCH_CLASS);

        return $this->selectAll()->get();
    }

    public function insertUser(Array $array)
    {

        return $this->insert($array)->execute();

    }


    
    public function deleteUser(Array $array)
    {

        return $this->delete($array)->execute();

        // $users =  $this->pdo->prepare($this->delete($this->table, $id));

        // return $users;
          
    }

    public function updateUser($params, $id) 
    {

        return $this->update($params, $id)->execute();
    }

}