<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index (){
        return view('pages.admins.home');
    }
    public function getTest() {
        return view('pages.admins.test');
    }
}
