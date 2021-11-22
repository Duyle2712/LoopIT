<?php

namespace App\Http\Controllers\recruiter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    function  index()
    {
        return view('pages.recruiter.home');       
    }
    function getJobPosting()
    {
        return view('pages.recruiter.job_posting'); 
    }

    
}
