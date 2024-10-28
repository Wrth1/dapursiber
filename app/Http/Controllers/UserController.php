<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function update(){

    }

    public function edit($user_id){
        return view('user.edit', [
            'user_id' => $user_id
        ]);
    }

    public function destroy(){

    }


}
