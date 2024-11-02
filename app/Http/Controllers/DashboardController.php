<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\Consultations;

class DashboardController extends Controller
{
    // re route ke dashboard
    public function showIndex(){
        if (Roles::role_is(auth()->user(), 'User')){
            return view('universal.dashboard',
                [
                    'consultationdata' => Consultations::get_consultation_list(auth()->user()->id)
                ]
            );
        }
        else if (Roles::role_is(auth()->user(), 'Admin')){
            return view('universal.dashboard');
        }
        else if (Roles::role_is(auth()->user(), 'Consultant')){
            return view('universal.dashboard');
        }
        else{
            return view('universal.dashboard');
        }

    }

    // route ke home

    // route ke profile
    public function showProfile(){

    }

    // route ke setting
    public function showSetting(){

    }

}
