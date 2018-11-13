<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Charts\Test3;
//use Charts;
class ChartsFusionController extends Controller
{
  public function index(){

  $chart = new Test3;
  $chart->labels(['One', 'Two', 'Three', 'Four']);
  $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
  $chart->dataset('My dataset 1', 'line', [4, 3, 10, 1]);


  return view('ChartsFusion', compact('chart'));

  //return view('sample_view', ['chart' => $chart]));
}
}
