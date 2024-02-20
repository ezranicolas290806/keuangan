<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatakategoriController extends Controller
{
    function index() {
    return view('admin.datakategori');
    }
}