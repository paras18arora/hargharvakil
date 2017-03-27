<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class dinController extends Controller
{
    public function show()
    {
    	return view('din');
    }
}
