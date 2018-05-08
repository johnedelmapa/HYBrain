<?php

namespace App\Models;

use PDO;
use App\Core\App;
use App\Core\Database\QueryBuilder;

class Model extends QueryBuilder 
{

    public function all()  
    {
        return $this->select()->table()->get();
    }

    public function create($request)
    {
        return $this->insert()->table()->values($this->filter($request))->execute();
    }

    public function find($id)
    {

        return $this->select()->table()->where('id', $id)->get();
    }

    public function change($request, $id) 
    {

        return $this->update()->table()->set($this->filter($request))->where('id', $id)->execute(); 
    }

    public function remove()
    {

        return $this->delete()->table()->where('id', $_POST['id'])->execute();       
    }

}

