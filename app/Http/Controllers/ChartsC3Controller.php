<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Charts\Test2;
//use Charts;
class ChartsC3Controller extends Controller
{
  public function index(){

  $chart = new Test2;
  
  $chart->dataset('My dataset 2', 'bar', [4, 3, 10, 1]);


  return view('ChartsC3', compact('chart'));

  //return view('sample_view', ['chart' => $chart]));
}
}
