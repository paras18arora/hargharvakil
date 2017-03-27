<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class subscribeController extends Controller
{
    public function newsletter(request $req)
    {
    	 $id1 =  DB::table('subcriptions')->insertGetId(
    array('email' => $req->email);
    }
}
