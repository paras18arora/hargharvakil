<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class legalnoticeController extends Controller
{
    public function show()
    {
    	return view('legalnotice');
    }
}
