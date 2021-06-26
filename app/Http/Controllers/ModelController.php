<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{

  public function calculate(Request $request) {


   //$data['input1'] =  Request::get('input1');
   $data['input2'] =  '0';
      return view('results',$data);
  }

}
