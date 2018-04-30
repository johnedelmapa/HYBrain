<?php

namespace App\Controllers;

use App\Core\App;

use App\Models\User;

class UsersController  
    
    {

        protected $user;
    
        public function __construct() {

             $this->user = new User();

        }

        public function index() 
        
        {

            return view('users', ['users' => $this->user->showUsers()]);

            // $users = $this->connect()->selectAll('users');
            // return view('users', compact('users'));
            // or  return view('index', ['user'] => $users);

        }

        public function create()

        {



        }

        public function store()

        {
            
            
            //$this->user->insertUser();

            $this->user->insertUser(['name' => $_POST['name']]);

            return redirect('users');

            //Insert the user assiociated with the request

            // all redirect to all users

            //  $users = $this->connect()->insert('users', [

            //  'name' => $_POST['name']
        
            // ]);
        
            // return redirect('users');
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
            // $this->user->delete($id);

            // $users = $this->connect()->delete('users', ['id' => $_POST['id']]);
    
            // return redirect('users');

            // $this->user->deleteUser('user', ['id' => $_POST['id']]);
            // return redirect('users');

            $this->user->deleteUser(['id' => $_POST['id']]);
            return redirect('users');

        }

    }

