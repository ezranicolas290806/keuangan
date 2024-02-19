<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){

       // echo "halaman index";
       return view('dashboard.index');

    }
}




