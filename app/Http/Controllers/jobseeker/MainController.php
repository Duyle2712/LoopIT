<?php

namespace App\Http\Controllers\jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function getHome(){
        return view('pages/jobseeker/home');
    }

    function getDashboard(){
        return view('pages/jobseeker/js_dashboard');
    }

    function getProfile_js(){
        return view('pages/jobseeker/js_profile');
    }

    function getJob_search(){
        return view('pages/jobseeker/job_search');
    }

    function getJob_detail(){
        return view('pages/jobseeker/job_detail');
    }

    function getJob_manage(){
        return view('pages/jobseeker/js_jobmanage');
    }

    function getJob_noti(){
        return view('pages/jobseeker/js_notijob');
    }

    function getRec_see(){
        return view('pages/jobseeker/js_recruitersee');
    }

    function getSearch(){
        return view('pages/jobseeker/job_search');
    }
}
