<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tdsController extends Controller
{
    public function show()
    {
    	return view('tds');
    }
}
