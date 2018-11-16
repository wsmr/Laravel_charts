<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Charts\Test;
use App\Chart;

use DB;


class ChartsJsController extends Controller
{
  public function index(){

    $results1 = Chart::where('id', '1')->value('fans');
    $results2 = Chart::where('id', '2')->pluck('fans');
    $results3 = Chart::where('id', '3')->pluck('fans');

    $data1 = DB::table('column_charts')->where('id','1')->pluck('target')->first();
    $data2 = DB::table('column_charts')->where('id','2')->pluck('target')->first();
    $data3 = DB::table('column_charts')->where('id','3')->pluck('target')->first();
    $data4 = DB::table('column_charts')->where('id','4')->pluck('target')->first();

  $chart1 = new Test;
  $chart1->labels(['One', 'Two', 'Three', 'Four']);
  $chart1->dataset('My dataset 1', 'line', [1, 2, 3, 4]);
  $chart1->dataset('My dataset 2', 'line', [4, 3, 10, 1]);


  $chart2 = new Test;
  $chart2->labels(['One', 'Two', 'Three', 'Four']);
  $chart2->dataset('dataset3', 'line',[$results1,$results2,$results3]);
  //$results = = Chart::where('id', $id)->pluck('fans');
  //foreach($results as $r){    echo $r->chart;   }


  $chart3 = new Test;
  $chart3->labels(['One', 'Two', 'Three', 'Four']);
  //$data = DB::table('column_charts')->where('id','1')->select('target')->pluck('id')->first();
  $chart3->dataset('dataset4', 'pie',[$data1,$data2,$data3,$data4]);
  return view('ChartsJs', compact('chart1','chart2','chart3'));


  //return view('sample_view', ['chart' => $chart]));
}
}
