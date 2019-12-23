<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Device;

use DB;
use App\Http\Controllers\Controller;



use App\SampleChart;
use App\Charts\SampleChartChart;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

 use App\Pulse;
use App\User;
use App\StudTest;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function showDevice()
    {
        $devices = DB::table('devices')->get();
        foreach ($devices as $device)
        {
            echo'<pre>', $device->id, '</pre>';
        }


    $device = DB::table('devices')->where('size', 'h1')->first();
    echo $device->size;
    }


public function chart()
    {
        $users = StudTest::all();


$chart_options = [
    'chart_title' => 'Кількість зареєстрованих користувачів щомісячно',
    'report_type' => 'group_by_date',
    'model' => 'App\User',
    'group_by_field' => 'created_at',
    'group_by_period' => 'month',
    'chart_type' => 'bar',
];
$chart1 = new LaravelChart($chart_options);



     $chart_options = [
        'chart_title' => 'Оцінки користувачів за тести',
        'report_type' => 'group_by_string',
        'model' => 'App\StudTest',
        'group_by_field' => 'testing_mark',
        'chart_type' => 'pie',
        'filter_field' => 'testing_date',
        'backgroundColor'=>'rgba(255, 255, 255, 0.5)',

    ];

    $chart2 = new LaravelChart($chart_options);

    $chart_options = [
   'chart_title' => 'Кількість пройдених тестів',
    'report_type' => 'group_by_string',
        'model' => 'App\StudTest',
        'group_by_field' => 'theme_id',
        'chart_type' => 'pie',
        'filter_field' => 'testing_date',
    ];
$chart3 = new LaravelChart($chart_options);



    $chart_options = [
    'chart_title' => 'Кількість зареєстрованих користувачів всього за рік',
    'report_type' => 'group_by_date',
    'model' => 'App\User',
    'group_by_field' => 'created_at',
    'group_by_period' => 'year',
    'chart_type' => 'bar',
    ];
$chart4 = new LaravelChart($chart_options);

   $chart_options = [
    'chart_title' => 'Кількість зареєстрованих користувачів щоденно',
    'report_type' => 'group_by_date',
    'model' => 'App\User',
    'group_by_field' => 'created_at',
    'group_by_period' => 'day',
    'chart_type' => 'bar',
    ];
$chart5 = new LaravelChart($chart_options);

return view('samplechart.index', compact('users','chart1','chart2','chart3','chart4','chart5'));


}

  public function resadmin()
    {

        $results = DB::table('users')->where('role','=','student')->join('testing','testing.users_id','=','users.id')->join('topic','topic.theme_id','=','testing.theme_id')->orderby('theme_name')->get();
        return view('results',['results'=>$results]);
    }

      public function stdntadmin()
    {

        $stdtch = DB::table('users')->where('role','=','student')->join('testing','testing.users_id','=','users.id')->join('topic','topic.theme_id','=','testing.theme_id')->orderby('theme_name')->get();
        return view('stdtch',['results'=>$stdtch]);
    }


}
