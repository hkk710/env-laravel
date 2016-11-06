<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class industrialController extends Controller
{
    public function index() {
    	return view('industrial/industrial');
    }
}
