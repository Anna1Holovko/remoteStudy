<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;

class HiTestController extends Controller
{
    //
         public function indexuser()
    {
$count = DB::table('users')->where('role','=','student')->count();
$appusers= DB::table('users')->where('role','=','student')->orderBy('surname')->get();
 return view('appusers',compact('count','appusers'));

    }
    
    public function indexteacher()
    {
        $count = DB::table('users')->where('role','=','teacher')->count();

        $appteachers= DB::table('users')->where('role','=','teacher')->orderBy('surname')->get();
    return view('appteachers',compact('count','appteachers'));
    }

    public function indexmarks(Request $request)
    {
        $appmarks = DB::table('users')->where('role','=','student')->join('testing','testing.users_id','=','users.id')->join('topic','topic.theme_id','=','testing.theme_id')->orderby('surname')->get();
        
        $shwmarks = DB::table('testing')->join('users','users.id', '=', 'users_id')->orderby('surname')->get();
        
        $collection = DB::table('testing')->select('users_id')->groupBy('users_id')->get();

        $collectionmark = DB::table('testing')
                    ->select(DB::raw('avg(testing_mark) as avg'))
                    ->groupBy('users_id')->get();

    return view('appmarks',compact('appmarks','shwmarks','collection', 'collectionmark'));
    }

    public function indexrank()
    {
        $collection = DB::table('testing')->select('users_id')->groupBy('users_id')->get();

        $mark = User::groupBy('id')
            ->join('testing','testing.users_id', '=', 'users.id')
            ->selectRaw('count(*) as total, id')
            ->selectRaw('count(*) as total, surname')
            ->selectRaw('count(*) as total, name')
            ->selectRaw('avg(testing_mark) as avg')
            ->orderby('avg', 'desc')
            ->get();
    return view('apprank',compact('collection', 'mark'));
    }
}