<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;



class ResultController extends Controller
{

  
    public function index()
    {

        $results = DB::table('users')->where('role','=','student')->join('testing','testing.users_id','=','users.id')->join('topic','topic.theme_id','=','testing.theme_id')->orderby('theme_name')->get();
        return view('results',['results'=>$results]);
    }

     public function resadmin()
    {

        $results = DB::table('users')->where('role','=','student')->join('testing','testing.users_id','=','users.id')->join('topic','topic.theme_id','=','testing.theme_id')->orderby('theme_name')->get();
        return view('results',['results'=>$results]);
    }
}
