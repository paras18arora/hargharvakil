<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class financialreportingController extends Controller
{
   public function show()
    {
    	return view('financialreporting');
    }
}
