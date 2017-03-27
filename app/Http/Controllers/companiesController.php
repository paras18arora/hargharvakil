<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class companiesController extends Controller
{
    public function show()
    {
    	return view('companies');
    }
}
