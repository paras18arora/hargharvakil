<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\User;
use DB;
class MailController extends Controller
{
 public function send(Request $request)
    {
      //  $title = $request->input('title');
        $email=$request->input('mail');
        $name=$request->input('name');
        $contact=$request->input('subject');
        $message=$request->input('message');
      
      $message=(String)$message;

       $id1 =  DB::table('form_submissions')->insertGetId(
    array('name' => $name, 'contact' => $contact, 'message' => $message, 'email' => $email));

        Mail::send('emails.send',['email' => $email, 'name' => $name], function ($message) use ($email)
        {
        
            $message->from('admin@hargharvakil.in', 'hargharvakil');

            $message->to($email);

        });
      
        Mail::send('emails.send1',['email' => $email,'comments' => $message], function ($message)
        {
        
            $message->from('admin@hargharvakil.in', 'hargharvakil');

            $message->to('paras18.arora@gmail.com');

        });

    return $email;
    }
}
