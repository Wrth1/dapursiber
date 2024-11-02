<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Roles extends Model
{
    use HasFactory;

// role_is($user_x, "Admin") -> false
// role_is($user_x, "User") -> true

    static function role_is($user, $role) {
        $role_id = DB::table('roles')
        ->select("id")
        ->where("role_name", $role)
        ->first();
        // dd($role_id);
        return $user->role_id == $role_id->id;
    }
}
