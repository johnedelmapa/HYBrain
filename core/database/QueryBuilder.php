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

    // public function __construct($pdo){
    //     $this->pdo = $pdo;
    // }

    public function __construct()
	{
		$this->pdo = Connection::make(App::get('config')['database']); 
	}

    public function selectAll(){

        $this->statement = "SELECT * FROM $this->table";
        return $this;
 
        // $statement = $this->pdo->prepare("select * from {$table}");   

        // $statement->execute();
        
        // return $statement->fetchAll(PDO::FETCH_CLASS);

        // echo 'Check Connection'; 
    }

    public function insert($params) 
    {

        $values = '';

        $x = 1;

        foreach ($params as $field) {
            
             $values .= '?';
            
            if ($x < count($params)) {

                    $values .= ', ';
            }

             $x++;
        }

        // die(var_dump($this->statement = "INSERT INTO $this->table (" . implode(', ', $this->fillables) . ") VALUES ({$values})"));

        $this->statement = "INSERT INTO $this->table (" . implode(', ', $this->fillables) . ") VALUES ({$values})";

        $this->fields = $params;

        // die(var_dump($this));
 
        return $this;
       

        // $data = implode (' ', $params);

        // $this->statement = "INSERT INTO $this->table ($this->fillables) VALUES ($data)";

        // die(var_dump($this));

        // return $this;

        //insert into names (name, email) values (:name, :email)
        //die(var_dump(array_keys($parameters)));

        // echo 'Check Connection';

        // var_dump ($this->statement = "INSET INTO $this->table Values $this->fields");

        // $sql = sprintf(

        //     'insert into %s (%s) values (%s)',

        //     $table,

        //     implode(', ', array_keys($parameters)),
            
        //     ':' . implode(', :', array_keys($parameters))

        // );

        // try {

        //     $statement = $this->pdo->prepare($sql);

        //     $statement->execute($parameters);

        // } catch (Exception $e) {

        //     die('Whoops, something went wrong.');

        // }

        //die(var_dump($sql));
    }

    public function delete($params)
    {

        $values = implode (' ', $params);

        $this->statement = "DELETE FROM $this->table WHERE id = ($values)";

        return $this;

        //  die(var_dump($this));
        
        // $this->statement = sprintf('Delete from %s where id = %s', $table, $id);
        
        // // return $this->pdo->prepare($this->statement)->execute();
        // return $this->statement;

        // $this->statement = sprintf('Delete from %s where id = %s', $table, $id['id']);
        // return $this->pdo->prepare($this->statement)->execute();
    }

    public function execute()
    {

        $this->query = $this->pdo->prepare($this->statement);

        $this->bind($this->fields);

        $this->query->execute();
        
        return true;

        // $this->query = $this->pdo->prepare($this->statement);
        // $this->query->execute();
        // return true;
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

    public function update($parameters, $id)
    { 

        $this->statement = "UPDATE $this->table SET " . implode(' = ?, ', array_keys($parameters)) . " = ? ". " WHERE ID = {$id}";
        $this->fields = $parameters;

        // die(var_dump($this->statement));
        
        return $this;

        // $this->statement = sprintf('UPDATE %s SET %s WHERE %s = ' . $id, 

        //         $this->table,

        //         implode(' = ?, ', array_keys($parameters)) . ' = ? ',

        //     $field
        // );

        // $this->fields = $parameters;

        // die(var_dump($this));

        // return $this;


    }


} 
