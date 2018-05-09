<?php

namespace App\Core\Database;

use App\Core\App;
use App\Core\Database\Connection;
use PDO;

class QueryBuilder 
{

    protected $pdo;
    
    protected $statement;

    protected $fields;

    protected $query;


    public function __construct()
	{
		$this->pdo = Connection::make(App::get('config')['database']); 
	}

    public function select($fields = null)
    {
        $this->statement = 'SELECT * FROM ';
        return $this;
    }

    public function table($table = null)
    {
        $this->statement .=  $this->table; 
        return $this;
    }

    public function where($field, $value)
    {
        if (is_string($value)) {
            $this->statement .= ' WHERE `' . $field . '` = ' . "'" . $value . "'";
            return $this;
        }

        $this->statement .=  ' WHERE `' . $field . '` = ' . $value;
        return $this;
    } 

    public function and($field, $value)
    {
         if (is_string($value)) {
            $this->statement .= ' AND `' . $field . '` = ' . "'" . $value . "'";
            return $this;
        }

        $this->statement .=  ' AND `' . $field . '` = ' . $value;
        return $this;

    }

    public function or($field, $value)
    {
         if (is_string($value)) {
            $this->statement .= ' OR `' . $field . '` = ' . "'" . $value . "'";
            return $this;
        }

        $this->statement .=  ' OR `' . $field . '` = ' . $value;
        return $this;

    }
    
    public function limit($number)
    {

        $this->statement .= " LIMIT $number";
        return $this;
    }

    public function orderBy($field, $order)
    {

       $this->statement .= ' ORDER BY ' . $field .' '. $order;
       return $this;
    }

    public function like($field, $letter){

        if($letter . '%' == $letter . '%') {
            $this->statement .= ' WHERE ' .  $field . ' LIKE ' .'' ."'".($letter).'%'."' ";
            return $this;

        } elseif('%' . $letter == '%' . $letter){

           $this->statement .= ' WHERE ' .  $field . ' LIKE ' .'' ."'".'%'.($letter)."' ";
            return $this;
        }

        return null;
    }

    public function insert() 
    {

        $this->statement = "INSERT INTO ";
        return $this;

    }

    public function values($params){
        
        $values = '';
        $x = 1;

        foreach ($params as $field) {
            
             $values .= '?';
            
            if ($x < count($params)) {

                    $values .= ', ';
            }

             $x++;
        }

        $this->statement .= " (" . implode(', ', $this->fillables) . ") VALUES ({$values})";
        $this->fields = $params;
        return $this;

    }

    public function delete()
    {

        $this->statement = "DELETE FROM ";
        return $this;
    }

    public function filter($request)
    {
        $fieldss = [];
        foreach($request as $key => $value) {
            if (in_array($key, $this->fillables)) {
                $fieldss[$key] = $value;
            }
        }

        return $fieldss;
    }

    public function execute()
    {

        $this->query = $this->pdo->prepare($this->statement);

        $this->bind($this->fields);

        if ($this->query->execute()) {
            return true;
        }
        
        return false;
    }

    public function get()
    {
        $this->execute();
        return $this->query->fetchAll(PDO::FETCH_CLASS);
    }
    

     public function bind($fields = [])
    {
          
        if ($fields != null) {

            $x = 1;

            foreach ($fields as $value) {
               
               $this->query->bindvalue($x,$value);

                $x++;
            }

            return $this;

        }
        
    }

    public function update()
    { 

        $this->statement = " UPDATE ";
        return $this;

    }

    public function set($parameters)
    {

     $this->statement = $this->statement .  " SET " . implode(' = ?, ', array_keys($parameters)). " = ? ";
     $this->fields = $parameters;
     return $this;   
    }

} 
