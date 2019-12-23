<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SampleChart;
use App\Charts\SampleChartChart;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

 use App\Pulse;
use App\User;
use App\StudTest;

use DB;




class SampleChartController extends Controller
{
    //
 public function index()
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
        'chart_title' => 'Оцінки, які отримували користувачі',
        'report_type' => 'group_by_string',
        'model' => 'App\StudTest',
        'group_by_field' => 'testing_mark',
        'chart_type' => 'pie',
        'filter_field' => 'testing_date',
        // 'filter_period' => 'month', // show users only registered this month
    ];
$chart2 = new LaravelChart($chart_options);





return view('samplechart.index', compact('users','chart1','chart2'));

}
}

