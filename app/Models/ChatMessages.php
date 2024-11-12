<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultation_id',
        'sender_id',
        'message',
        'sent_at',
    ];

    static function get_messages($consultation_id){
        return ChatMessages::where('consultation_id', $consultation_id)->get();
    }
}
