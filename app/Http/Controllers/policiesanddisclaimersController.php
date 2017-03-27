<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class policiesanddisclaimersController extends Controller
{
    public function show()
    {
    	return view('policiesanddisclaimers');
    }
}
