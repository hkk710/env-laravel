<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class municipalController extends Controller
{
    public function index() {
    	return view('municipal/municipal');
    }
}
