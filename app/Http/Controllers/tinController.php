<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tinController extends Controller
{
    public function show()
    {
    	return view('tin');
    }
}
