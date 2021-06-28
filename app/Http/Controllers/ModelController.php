<?php


namespace App\Http\Controllers;

use Request;

class ModelController extends Controller
{

  public function calculate(Request $request) {




  // DATA FROM THE FORM
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

  // ALTMAN
  $x1 = $workingcapital / $totalassets;
  $x2 = $retainedearnings / $totalassets;
  $x3 = $ebit / $totalassets;
  $x4 = $equity / $totalliabilities;
  $x5 = $totalrevenues / $totalassets;
  $altman = (0.717 * $x1) + (0.847 * $x2) + (3.107 * $x3) + (0.42 * $x4) + (0.998 * $x5);
  $data['altman'] =  $altman;
  $altmancolor = "";
  if($altman < 1.2)
      $altmancolor = "red";
  if($altman > 2.9)
      $altmancolor = "green";
  if($altman >= 1.2 && $altman <= 2.9)
      $altmancolor = "orange";

  $data['altmancolor'] =  $altmancolor;

  // IN05
  $y1 = $totalassets / $totalliabilities;
  $y2 = $ebit / $interestexpenses;
  $y3 = $ebit / $totalassets;
  $y4 = $totalrevenues / $totalassets;
  $y5 = $currentassets / $currentliabilities;

  $in05 = (0.13 *  $y1) + (0.04 * $y2) + (3.97 * $y3) + (0.21 * $y4) + (0.09 * $y5);
  $data['in05'] =  $in05;

  $in05color = "";
  if($in05 < 0.9)
      $in05color = "red";
  if($in05 > 1.6)
      $in05color = "green";
  if($in05 >= 0.9 && $in05 <= 1.6)
      $in05color = "orange";

  $data['in05color'] =  $in05color;

  // TAFFLER
  $t1 = $earningsbeforetax / $shorttermliabilities;
  $t2 = $currentassets / $totalliabilities;
  $t3 = $shorttermliabilities / $totalassets;
  $t4 = $sales / $totalassets;

  $taffler = (0.53 * $t1) + (0.13 * $t2) + (0.18 * $t3) + (0.16 * $t4);
  $data['taffler'] =  $taffler;

  $tafflercolor = "";
  if($taffler < 0.2)
      $tafflercolor = "red";
  if($taffler > 0.3)
      $tafflercolor = "green";
  if($taffler >= 0.2 && $taffler <= 0.3)
      $tafflercolor = "orange";

  $data['tafflercolor'] =  $tafflercolor;

  // QUICK TEST
  $b1 = $equity / $totalassets;
  $b2 = $liabilitescash /$cashflow;
  $b3 = $cashflow / $sales;
  $b4 = $ebit / $totalassets;

  $quicktest = $b1 + $b2 + $b3 + $b4;
  $data['quicktest'] =  $quicktest;



  $quicktestcolor = "";
  if($quicktest < 9.0)
      $quicktestcolor = "green";
  if($quicktest > 15.0)
      $quicktestcolor = "red";
  if($quicktest >= 9.0 && $quicktest <= 15.0)
      $quicktestcolor = "orange";

  $data['quicktestcolor'] =  $quicktestcolor;


  // INDEX BONITY
  $l1 = $cashflow / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $operatingprofit / $totalassets;
  $l4 = $operatingprofit / $sales;
  $l5 = $inventories / $sales;
  $l6 = $totalrevenues / $sales;

  $bonity = (1.5 * $l1) + (0.08 * $l2) + (10 * $l3) + (5 * $l4) + (0.3 * $l5) + (0.1 * $l6);
  $data['bonity'] =  $bonity;

  $bonitycolor = "";
  if($bonity < -1.0)
      $bonitycolor = "red";
  if($bonity > 1.0)
      $bonitycolor = "green";
  if($bonity >= -1.0 && $bonity <= 1.0)
      $bonitycolor = "orange";

  $data['bonitycolor'] =  $bonitycolor;


  // RETURN VIEW
  return view('results',$data);
  }

}
