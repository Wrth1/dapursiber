<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Consultations extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'consultant_id',
        'date',
        'status',
    ];

    static function get_consultation_list($user_id) {
        $consultaiondatalist = DB::table('consultations')
        ->join('users as u', 'consultations.user_id', '=', 'u.id')
        ->join('users as c', 'consultations.consultant_id', '=', 'c.id')
        ->select(
            'c.username as consultant_name',
            'consultations.date as consultation_date',
            'consultations.status as status',
            'consultations.id as id')
        ->where([
            ['consultations.user_id', $user_id],
            ['consultations.status', 'ongoing']
        ])
        ->get();

        return $consultaiondatalist;
    }

    static function get_consultation_data($consultation_id) {
        $consultationdata = DB::table('consultations')
        ->join('users as u', 'consultations.user_id', '=', 'u.id')
        ->join('users as c', 'consultations.consultant_id', '=', 'c.id')
        ->select(
            'c.username as consultant_name',
            'consultations.date as consultation_date',
            'consultations.status as status',
            'consultations.id as id')
        ->where('consultations.id', $consultation_id)
        ->first();

        return $consultationdata;
    }

}
