<?php

    namespace App\Controllers;

    use App\Core\App;

    class UsersController 
    
    {
    
        public function index() 

        {

            $users = App::get('database')->selectAll('users');

            return view('users', compact('users'));

            // or  return view('index', ['user'] => $users);

        }

        public function create()

        {



        }

        public function store()

        {

            //Insert the user assiociated with the request

            // all redirect to all users

            App::get('database')->insert('users', [

                'name' => $_POST['name']
        
            ]);
        
            return redirect('users');
        }

        
         public function show($id)

         {
        
        
         }

         public function edit($id)

         {


        
         }

         public function update(Request $request, $id)
        
        {


        }

         public function destroy()

        {

            // var_dump($_POST['id']);

            App::get('database')->delete('users', [

            'id' => $_POST['id']
        
            ]);
        
            return redirect('users');

    
        }

    }


?>