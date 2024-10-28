<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // re route ke dashboard
    public function showIndex(){
        return view('universal.dashboard');
    }

    // route ke home

    // route ke profile
    public function showProfile(){

    }

    // route ke setting
    public function showSetting(){

    }

}
