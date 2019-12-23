<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailClass;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    //
    public function send_form(Request $request)
    {
    	$name = $request->name;
    	$email = $request->email;
    	$msg = $request->msg;

    	Mail::to('vasha-pochta@gmail.com')->send(new MailClass($name, $email, $msg));
    	
    }
}
