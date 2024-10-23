<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showUserPage(){
        return view('user');
    }
    
    public function viewUsers(){
        // return data user
    }
}
