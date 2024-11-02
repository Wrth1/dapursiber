<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    use HasFactory;

    static function get_messages($consultation_id){
        return ChatMessages::where('consultation_id', $consultation_id)->get();
    }
}
