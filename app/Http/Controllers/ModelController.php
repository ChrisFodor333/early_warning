<?php


namespace App\Http\Controllers;

use Request;

class ModelController extends Controller
{

  public function calculate(Request $request) {


  // $data['totalassets'] =  Request::get('total-assets');
  $totalassets = Request::get('total-assets');
  $workingcapital = Request::get('working-capital');
  $earningsbeforetax = Request::get('earnings-before-tax');
  $operatingprofit = Request::get('operating-profit');
  $retainedearnings = Request::get('retained-earnings');
  $totalliabilities = Request::get('total-liabilities');
  $shorttermliabilities = Request::get('short-term-liabilities');
  $inventories = Request::get('inventories');
  $ebit = Request::get('ebit');
  $interestexpenses = Request::get('interest-expenses');
  $sales = Request::get('sales');
  $equity = Request::get('equity');
  $currentassets = Request::get('current-assets');
  $cashflow = Request::get('cash-flow');
  $totalrevenues = Request::get('total-revenues');
  $currentliabilities = Request::get('current-liabilities');
  $liabilitescash = Request::get('liabilites-cash');


  return view('results',$data);
  }

}
