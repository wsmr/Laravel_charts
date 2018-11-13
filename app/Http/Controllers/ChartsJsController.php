<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Charts\Test;
//use Charts;
class ChartsJsController extends Controller
{
  public function index(){

  $chart = new Test;
  $chart->labels(['One', 'Two', 'Three', 'Four']);
  $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
  $chart->dataset('My dataset 2', 'line', [4, 3, 10, 1]);


  return view('ChartsJs', compact('chart'));

  //return view('sample_view', ['chart' => $chart]));
}
}
