<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class annualcompliancesController extends Controller
{
    public function show()
    {
    	return view('annualcompliances');
    }
}
