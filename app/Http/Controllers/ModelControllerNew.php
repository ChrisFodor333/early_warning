<?php


namespace App\Http\Controllers;

use Request;

class ModelControllerNew extends Controller
{

  public function calculate(Request $request) {


  $green = 0;
  $orange = 0;
  $red = 0;

  // DATA FROM THE FORM - CURRENT YEAR
  $aad4 = Request::get('total-assets');
  $isd4 = Request::get('revenue-merch');
  $isd21 = Request::get('amortization');
  $isd62 = Request::get('profit-loss-before-tax');
  $laed27 = Request::get('provisions');

  $aad33 = Request::get('current-assets');
  $isd7 = Request::get('production');
  $isd22 = Request::get('revenue-sale');
  $isd64 = Request::get('profit-loss-after-tax');
  $laed44 = Request::get('current-liabilities');

  $aad34 = Request::get('inventory');
  $isd8 = Request::get('revenue-p-s');
  $isd25 = Request::get('operating-income');
  $laed5 = Request::get('equity');
  $laed59 = Request::get('ad');

  $aad58 = Request::get('financial-accounts');
  $isd9 = Request::get('internal-inventory');
  $isd31 = Request::get('securities-shares');
  $laed23 = Request::get('retained-earnings');

  $aad64 = Request::get('ad-total');
  $isd10 = Request::get('own-work-cap');
  $isd42 = Request::get('interest-expense');
  $laed26 = Request::get('liabilities');

  // LAST YEAR
  $ise4= Request::get('revenue-merch2');
  $ise22 = Request::get('revenue-sale2');
  $aae14= Request::get('ppe2');
  $laee57= Request::get('long-term-bank-loans2');

  $ise7= Request::get('production2');
  $ise30 = Request::get('securities-shares2');
  $aae24 = Request::get('non-current-assets2');

  $ise9 = Request::get('internalinventory2');
  $ise64 = Request::get('profit-loss-after-tax2');
  $laee5 = Request::get('equity2');

  $ise10 = Request::get('ownwork2');
  $aae4 = Request::get('totalassets2');
  $laee27 = Request::get('provisions2');

  $ise14 = Request::get('addedvalue2');
  $aae6 = Request::get('noncurrentassets2');
  $laee32 = Request::get('noncurrentliabilities2');

  // THE YEAR BEFORE
  $aaf33 = Request::get('assets1');
  $laef44 = Request::get('liabilities1');


  $x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
  $altmancolor = "";

  // ALTMAN
  if($totalassets == 0 || $totalliabilities == 0) {
    $altman = "N/A";
    $altmancolor = "orange";
  } else {

  $x1 = $workingcapital / $totalassets;
  $x2 = $retainedearnings / $totalassets;
  $x3 = $ebit / $totalassets;
  $x4 = $equity / $totalliabilities;
  $x5 = $totalrevenues / $totalassets;

  $altman = (0.717 * $x1) + (0.847 * $x2) + (3.107 * $x3) + (0.42 * $x4) + (0.998 * $x5);
  $altman = number_format($altman,2);
  if($altman < 1.2) {
      $altmancolor = "red";
      $red++;
    }
  if($altman > 2.9) {
      $altmancolor = "#00c373";
      $green++;
    }
  if($altman >= 1.2 && $altman <= 2.9) {
      $altmancolor = "orange";
      $orange++;
    }
 }
  $data['altman'] =  $altman;
  $data['altmancolor'] =  $altmancolor;

  // IN05
  $y1 = 0; $y2 = 0; $y3 = 0; $y4 = 0; $y5 = 0; $in05 = 0;
  $in05color = "";

  if($totalassets == 0 || $totalliabilities == 0 || $interestexpenses == 0 || $currentliabilities == 0) {
    $in05color = "orange";
    $in05 = "N/A";
  }
  else {
  $y1 = $totalassets / $totalliabilities;
  $y2 = $ebit / $interestexpenses;
  $y3 = $ebit / $totalassets;
  $y4 = $totalrevenues / $totalassets;
  $y5 = $currentassets / $currentliabilities;

  $in05 = (0.13 *  $y1) + (0.04 * $y2) + (3.97 * $y3) + (0.21 * $y4) + (0.09 * $y5);
  $in05 = number_format($in05,2);


  if($in05 < 0.9) {
      $in05color = "red";
      $red++;
    }
  if($in05 > 1.6) {
      $in05color = "#00c373";
      $green++;
    }
  if($in05 >= 0.9 && $in05 <= 1.6) {
      $in05color = "orange";
      $orange++;
    }
 }
  $data['in05'] =  $in05;
  $data['in05color'] =  $in05color;

  // TAFFLER
  $t1 = 0; $t2 = 0; $t3 = 0; $t4 = 0; $taffler = 0;
  $tafflercolor = "";

  if($totalassets == 0 || $totalliabilities == 0 || $shorttermliabilities == 0) {
    $taffler = "N/A";
    $tafflercolor = "orange";
  } else {
  $t1 = $earningsbeforetax / $shorttermliabilities;
  $t2 = $currentassets / $totalliabilities;
  $t3 = $shorttermliabilities / $totalassets;
  $t4 = $sales / $totalassets;

  $taffler = (0.53 * $t1) + (0.13 * $t2) + (0.18 * $t3) + (0.16 * $t4);
  $taffler = number_format($taffler,2);

  if($taffler < 0.2) {
      $tafflercolor = "red";
      $red++;
    }
  if($taffler > 0.3) {
      $tafflercolor = "#00c373";
      $green++;
    }
  if($taffler >= 0.2 && $taffler <= 0.3) {
      $tafflercolor = "orange";
      $orange++;
    }
}
  $data['taffler'] =  $taffler;
  $data['tafflercolor'] =  $tafflercolor;

  // QUICK TEST
  $b1 = 0; $b2 = 0; $b3 = 0; $b4 = 0; $quicktest = 0;
  $quicktestcolor = "";

  if($totalassets == 0 || $cashflow == 0 || $sales == 0) {
      $quicktest = "N/A";
      $quicktestcolor = "orange";
  } else {
  $b1 = $equity / $totalassets;
  $b2 = $liabilitescash / $cashflow;
  $b3 = $cashflow / $sales;
  $b4 = $ebit / $totalassets;

  $quicktest = $b1 + $b2 + $b3 + $b4;
  $quicktest = number_format($quicktest,2);



  if($quicktest < 9.0) {
      $quicktestcolor = "#00c373";
      $green++;
    }
  if($quicktest > 15.0) {
      $quicktestcolor = "red";
      $red++;
    }
  if($quicktest >= 9.0 && $quicktest <= 15.0) {
      $quicktestcolor = "orange";
      $orange++;
    }

/*
if($quicktest < 4.0) {
    $quicktestcolor = "#00c373";
    $green++;
  }
if($quicktest > 20.0) {
    $quicktestcolor = "red";
    $red++;
  }
if($quicktest >= 4.0 && $quicktest <= 20.0) {
    $quicktestcolor = "orange";
    $orange++;
  } */
}
$data['quicktest'] =  $quicktest;
$data['quicktestcolor'] =  $quicktestcolor;

  // INDEX BONITY
  $l1 = 0; $l2 = 0; $l3 = 0; $l4 = 0; $l5 = 0; $l6 = 0; $bonity = 0;
  $bonitycolor = "";
  if($totalliabilities == 0 || $totalassets == 0 || $sales == 0) {
    $bonity = "N/A";
    $bonitycolor = "orange";
  } else {
  $l1 = $cashflow / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $operatingprofit / $totalassets;
  $l4 = $operatingprofit / $sales;
  $l5 = $inventories / $sales;
  $l6 = $totalrevenues / $sales;

  $bonity = (1.5 * $l1) + (0.08 * $l2) + (10 * $l3) + (5 * $l4) + (0.3 * $l5) + (0.1 * $l6);
  $bonity = number_format($bonity,2);

  if($bonity < -1.0) {
      $bonitycolor = "red";
      $red++;
    }
  if($bonity > 1.0) {
      $bonitycolor = "#00c373";
      $green++;
    }
  if($bonity >= -1.0 && $bonity <= 1.0) {
      $bonitycolor = "orange";
      $orange++;
    }
  }
  $data['bonity'] =  $bonity;
  $data['bonitycolor'] =  $bonitycolor;

  //BINKERTOV Model
  $binkert = 0;
  $binkertcolor = "";
  $u1 = 0; $u2 = 0; $u3 = 0; $u4 = 0; $u5 = 0; $u6 = 0; $u7= 0; $u8 = 0;

  $u8div = $equity2 + $reserves2 + $longtermliabilities2;

  if($liabilites1 == 0 || $longtermassets2 == 0 || $sales2 == 0 ||
     $addedvalue2 == 0 || $totalassets3previous == 0 || $equity3previous == 0 ||
     $totalliabilites3prev == 0 || $equity2 == 0 || $reserves2 == 0 || $longtermliabilities2 == 0) {

     $binkert = "N/A";
     $binkertcolor = "orange";

  } else {
  $u1 = $assets1 / $liabilites1;
  $u2 = $equity2 / $longtermassets2;
  $u3 = $eat2 / $sales2;
  $u4 = $totalrevenues2 / $addedvalue2;
  $u5 = $totalassets3 / $totalassets3previous;
  $u6 = $equity3 / $equity3previous;
  $u7 = $totalliabilities3 / $totalliabilites3prev;
  $u8 = $eat2 / $u8div;

  $binkert = (0.18 * $u1) + (0.147 * $u2) + (0.237 * $u3) + (0.377 * $u4) + (0.514 * $u5) + (0.505 * $u6) + (0.271 * $u7) + (0.207 * $u8);
  $binkert = number_format($binkert,2);

  if($binkert > 4.35) {
    $binkertcolor = "#00c373";
    $green++;
  }

  if($binkert < -4.35) {
    $binkertcolor = "red";
    $red++;
  }

  if($binkert < 4.35 && $binkert > -4.35)
    $binkertcolor = "orange";
    $orange++;
  }


  $data['binkert'] =  $binkert;
  $data['binkertcolor'] =  $binkertcolor;


  // FINAL RESULTS

  $greenwarning = "none";
  $orangewarning = "none";
  $redwarning = "none";

  $distress = "";

  if($red > $green && $red > $orange) {
    $redwarning = "block";
    if($red <= 4)
      $distress = "second";
    else
      $distress = "third";
  }

  if($orange > $green && $orange > $red) {
      $orangewarning = "block";
  }

  if($green > $orange && $green > $red) {
      $greenwarning = "block";
  }


  $data['greenwarning'] = $greenwarning;
  $data['orangewarning'] = $orangewarning;
  $data['redwarning'] = $redwarning;
  $data['distress'] = $distress;


  // RETURN VIEW
  return view('results',$data);
  }

}
