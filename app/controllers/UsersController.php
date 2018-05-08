<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;
use App\Models\User;

class UsersController  
{

    protected $user;

    public function __construct() 
    {
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
        
        if (!$this->user->create(Request::request())) {
            throw new Exception("Error");
        }
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
        return redirect('users');
    }

    public function destroy()
    {
        $this->user->remove(['id' => $_POST['id']]);
        return redirect('users');
    }

}

