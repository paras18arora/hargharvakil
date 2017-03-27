<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class contractsController extends Controller
{
    public function show()
    {
    	return view('contracts');
    }
}
