<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pulse;
use App\Charts\PulseChart;

use DB;
use App\Providers\ChartsServiceProvider;
use ConsoleTVs\Charts\Facades\Charts;



class PulseController extends Controller
{
    //
    public function index()
    {
        $pulses = Pulse::all();
        $chart = new PulseChart;
        $chart->labels(['One', 'Two', 'Three', 'four']);
        $chart->dataset('My dataset 1', 'line', [1, 2, 3, 5]);

        // $pulses = Pulse::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        // $chart = new Charts::database($pulses, 'bar', 'highcharts')
     //        ->title("Поповнення новими клієнтами")
     //        ->elementLabel("К-сть нових клієнтів")
     //        ->dimensions(1000, 500)
     //        ->responsive(false)
     //        ->groupByMonth(date('Y'), true);


        return view('pulse.index', compact('pulses', 'chart'));

}
}