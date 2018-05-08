<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;
use App\Models\User;

class UsersController  
{

    protected $user;

    public function __construct() {

            $this->user = new User();

    }

    public function index() 
    {
        return view('users', ['users' => $this->user->all()]);
    }

    public function create()
    {
        return redirect('users');
    }

    public function store()
    {
        // validate

        if (! $this->user->create(Request::request())) {
            // return somewhere or show error message
        }
        
        // return show okay message
        return redirect('users');
    }

    public function show($id)
    {
    
        return view('users', ['users' => $this->user->find($id)]);
    
    }

        public function edit()

        {

        return redirect('users/update');
    
        }

        public function update()
    
    {
        $this->user->change(Request::request(), $_POST['id']);

        // $this->user->updateUser1([         
        //     'name' => $_POST['name'],
        //     'birthdate' => $_POST['birthdate'],
        //     'telephone' => $_POST['telephone'],
        //     'address' => $_POST['address']    
        // ], $_POST['id']);

        return redirect('users');

    }

        public function destroy()

    {

        // var_dump($_POST['id']);
        // $this->user->delete($id);

        // $users = $this->connect()->delete('users', ['id' => $_POST['id']]);

        // return redirect('users');

        // $this->user->deleteUser('user', ['id' => $_POST['id']]);
        // return redirect('users');

        $this->user->remove(['id' => $_POST['id']]);
        return redirect('users');

    }

}

