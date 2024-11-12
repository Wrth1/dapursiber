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

    static function get_consultations_by_id($id) {
        $consultaiondatalist = DB::table('consultations')
        ->join('users as u', 'consultations.user_id', '=', 'u.id')
        ->join('users as c', 'consultations.consultant_id', '=', 'c.id')
        ->select(
            'c.username as consultant_name',
            'consultations.date as consultation_date',
            'consultations.status as status',
            'consultations.id as id')
        ->where(function($query) use ($id) {
            $query->where('consultations.user_id', $id)
                  ->orWhere('consultations.consultant_id', $id);
        })
        ->where('consultations.status', 'ongoing')
        ->get();

        return $consultaiondatalist;
    }

    static function get_consultation_data($consultation_id) {
        $consultationdata = DB::table('consultations')
        ->join('users as u', 'consultations.user_id', '=', 'u.id')
        ->join('users as c', 'consultations.consultant_id', '=', 'c.id')
        ->select(
            'u.id as user_id',
            'c.id as consultant_id',
            'u.username as user_name',
            'c.username as consultant_name',
            'consultations.date as consultation_date',
            'consultations.status as status',
            'consultations.id as id')
        ->where('consultations.id', $consultation_id)
        ->first();

        return $consultationdata;
    }

    static function is_owned_by_user($consultation_id, $user_id) {
        // dd($consultation_id);
        $consultationdata = DB::table('consultations')
        ->select('user_id',
            'consultant_id')
        ->where('id', $consultation_id)
        ->first();
        // dd($consultationdata);
        if ($consultationdata && ($consultationdata->user_id == $user_id || $consultationdata->consultant_id == $user_id)) {
            return true;
        }
        else {
            return false;
        }
    }

}
