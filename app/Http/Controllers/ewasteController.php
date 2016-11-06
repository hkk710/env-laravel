<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ewasteController extends Controller
{
    public function index() {
    	return view('ewaste/ewaste');
    }
}
