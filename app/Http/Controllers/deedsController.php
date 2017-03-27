<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class deedsController extends Controller
{
    public function show()
    {
    	return view('deeds');
    }
}
