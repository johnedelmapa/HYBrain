<?php

    class QueryBuilder {

        protected $pdo;


        public function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function selectAll($table){
            
            $statement = $this->pdo->prepare("select * from {$table}");   

            $statement->execute();
            
            return $statement->fetchAll(PDO::FETCH_CLASS);
        }


        public function insert($table, $parameters) 
        
        {

            //insert into names (name, email) values (:name, :email)
            //die(var_dump(array_keys($parameters)));

            $sql = sprintf(

                'insert into %s (%s) values (%s)',

                $table,

                implode(', ', array_keys($parameters)),
                
                ':' . implode(', :', array_keys($parameters))

            );

            try {

                $statement = $this->pdo->prepare($sql);

                $statement->execute($parameters);

            } catch (Exception $e) {

                die('Whoops, something went wrong.');

            }
  
            //die(var_dump($sql));

        }

         public function delete($table, $id)

        {
            var_dump($id);

             $sql = sprintf(

                'Delete from %s where id = %s',

                $table,
                $id['id']

            );

            try {

                $statement = $this->pdo->prepare($sql);

                $statement->execute();

            } catch (Exception $e) {

                die('Whoops, something went wrong.');

            }
    
        }
    } 

?>