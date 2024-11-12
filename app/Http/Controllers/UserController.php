<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;

class UserController extends Controller
{
    public function index(){
        $users = User::with('role')->get();
        return view('user.index', ['users' => $users]);
    }

    public function update(Request $request, $user_id){
        $user = User::findOrFail($user_id);
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');
        $user->role_id = $request->input('role_id');
        $user->save();

        return redirect()->route('userlist')->with('success', 'User updated successfully.');
    }

    public function edit($user_id){
        $user = User::findOrFail($user_id);
        $roles = Roles::all();
        return view('user.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function destroy($user_id){
        $user = User::findOrFail($user_id);
        $user->delete();

        return redirect()->route('userlist')->with('success', 'User deleted successfully.');
    }
}
