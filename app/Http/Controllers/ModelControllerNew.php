<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Requests;
use App\Models\Basic;
use App\Models\Complex;

class ModelControllerNew extends Controller
{

  public function calculate(Request $request) {


  $green = 0;
  $orange = 0;
  $red = 0;
  $nacount = 0;

  //COMPANY DETAILS
  $company = request()->get('companyname');
  $currentyear = request()->get('currentyear');
  $data['currentyear'] =  $currentyear;



  // DATA FROM THE FORM - CURRENT YEAR
  $aad4 = request()->get('total-assets');
  $isd4 = request()->get('revenue-merch');
  $isd21 = request()->get('amortization');
  $isd62 = request()->get('profit-loss-before-tax');
  $laed27 = request()->get('provisions');

  $aad33 = request()->get('current-assets');
  $isd7 = request()->get('production');
  $isd22 = request()->get('revenue-sale');
  $isd64 = request()->get('profit-loss-after-tax');
  $laed44 = request()->get('current-liabilities');

  $aad34 = request()->get('inventory');
  $isd8 = request()->get('revenue-p-s');
  $isd25 = request()->get('operating-income');
  $laed5 = request()->get('equity');
  $laed59 = request()->get('ad');

  $aad58 = request()->get('financial-accounts');
  $isd9 = request()->get('internal-inventory');
  $isd31 = request()->get('securities-shares');
  $laed23 = request()->get('retained-earnings');

  $aad64 = request()->get('ad-total');
  $isd10 = request()->get('own-work-cap');
  $isd42 = request()->get('interest-expense');
  $laed26 = request()->get('liabilities');

  // LAST YEAR
  $ise4= request()->get('revenue-merch2');
  $ise22 = request()->get('revenue-sale2');
  $aae14= request()->get('ppe2');
  $laee57= request()->get('long-term-bank-loans2');

  $ise7= request()->get('production2');
  $ise30 = request()->get('securities-shares2');
  $aae24 = request()->get('non-current-assets2');

  $ise9 = request()->get('internalinventory2');
  $ise64 = request()->get('profit-loss-after-tax2');
  $laee5 = request()->get('equity2');

  $ise10 = request()->get('ownwork2');
  $aae4 = request()->get('totalassets2');
  $laee27 = request()->get('provisions2');

  $ise14 = request()->get('addedvalue2');
  $aae6 = request()->get('noncurrentassets2');
  $laee32 = request()->get('noncurrentliabilities2');

  // THE YEAR BEFORE
  $aaf33 = request()->get('assets1');
  $laef44 = request()->get('liabilities1');


  $x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
  $altmancolor = "";

  // ALTMAN
  $totalassets = $aad4;
  $totalliabilities = $laed26 - $laed27;
  if($totalassets == 0 || $totalliabilities == 0) {
    $altman = "N/A";
    $altmancolor = "orange";
    $nacount++;
  } else {

  $x1 = ($aad33 + $aad64 - $laed44 - $laed59) / $totalassets;
  $x2 = $laed23 / $totalassets;
  $x3 = ($isd62 + $isd42) / $totalassets;
  $x4 = $laed5 / $totalliabilities;
  $x5 = ($isd4 + $isd8) / $totalassets;

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
  $totalassets = $aad4;
  $totalliabilities = $laed26 + $laed59;

  if($totalassets == 0 || $totalliabilities == 0  || $laed44== 0) {
    $in05color = "orange";
    $in05 = "N/A";
    $nacount++;
  }
  else {
  $y1 = $totalassets / $totalliabilities;
  if($isd42 == 0) {
    $y2 = 0;
  } else {
      $y2 = ($isd62 + $isd42) / $isd42;
  }
  $y3 = ($isd62 + $isd42) / $totalassets;
  $y4 = ($isd4 + $isd8 - $isd9 - $isd10 + $isd22 + $isd25 - $isd22) / $totalassets;
  $y5 = $aad33 / $laed44;

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

  $totalassets = $aad4;
  $totalliabilities = $laed26;

  if($totalassets == 0 || $totalliabilities == 0) {
    $taffler = "N/A";
    $tafflercolor = "orange";
    $nacount++;
  } else {
  if($laed44 == 0) {
    $t1 = 0;
  }  else {
      $t1 = $isd62 / $laed44;
  }

  $t2 = $aad33 / $laed26;
  $t3 = $laed44 / $totalassets;
  $t4 = ($isd4 + $isd8) / $totalassets;

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

  $totalassetsQT1 = $aad4;
  $cashflow = ($isd64 + $isd21);
  $sales = ($isd4 + $isd8);


  if($totalassets == 0 || $cashflow == 0 || $sales == 0) {
      $quicktest = "N/A";
      $quicktestcolor = "orange";
      $nacount++;
  } else {
  $b1 = ($laed5 / $totalassets)*100;
  $b2 = ($laed26 - $aad58) / $cashflow;
  $b3 = ($cashflow / $sales)*100;
  $b4 = (($isd62 + $isd42) / $totalassets)*100;


  $b1score = 0;
  $b2score = 0;
  $b3score = 0;
  $b4score = 0;

  if($b1 < 0) {
    $b1score = 5;
  }
  if($b1 >= 0 && $b1 < 10) {
    $b1score = 4;
  }
  if($b1 >= 10 && $b1 < 20) {
    $b1score = 3;
  }
  if($b1 >= 20 && $b1 < 30) {
    $b1score = 2;
  }
  if($b1 >= 30) {
    $b1score = 1;
  }

  if($b2 < 3) {
    $b2score = 1;
  }
  if($b2 >= 3 && $b2 < 5) {
    $b2score = 2;
  }
  if($b2 >= 5 && $b2 < 12) {
    $b2score = 3;
  }
  if($b2 >= 12 && $b2 < 30) {
    $b2score = 4;
  }
  if($b2 >= 30) {
    $b2score = 5;
  }


  if($b3 < 0) {
    $b3score = 5;
  }
  if($b3 >= 0 && $b3 < 5) {
    $b3score = 4;
  }
  if($b3 >= 5 && $b3 < 8) {
    $b3score = 3;
  }
  if($b3 >= 8 && $b3 < 10) {
    $b3score = 2;
  }
  if($b3 >= 10) {
    $b3score = 1;
  }

  if($b4 < 0) {
    $b4score = 5;
  }
  if($b4 >= 0 && $b4 < 8) {
    $b4score = 4;
  }
  if($b4 >= 8 && $b4 < 12) {
    $b4score = 3;
  }
  if($b4 >= 12 && $b4 < 15) {
    $b4score = 2;
  }
  if($b4 >= 15) {
    $b4score = 1;
  }
  $data['b2'] =  $b2;
  $data['b3'] =  $b3;
  $data['b4'] =  $b4;
  $data['b2score'] =  $b2score;
  $data['b3score'] =  $b3score;
  $data['b4score'] =  $b4score;

  $quicktest = $b1score + $b2score + $b3score + $b4score;
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

}
$data['quicktest'] =  $quicktest;
$data['quicktestcolor'] =  $quicktestcolor;

  // INDEX BONITY
  $l1 = 0; $l2 = 0; $l3 = 0; $l4 = 0; $l5 = 0; $l6 = 0; $bonity = 0;
  $bonitycolor = "";

  $totalliabilities = ($aad4 - $laed5);
  $totalassets = $aad4;
  $sales = ($isd4 + ($isd7 - $isd9 - $isd10) + $isd22 + $isd31);

  if($totalliabilities == 0 || $totalassets == 0 || $sales == 0) {
    $bonity = "N/A";
    $bonitycolor = "orange";
    $nacount++;
  } else {
  $l1 = ($isd64 + $isd21) / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $isd62 / $totalassets;
  $l4 = $isd62 / $sales;
  $l5 = $aad34 / $sales;
  $l6 = ($isd4 + ($isd7 - $isd9 - $isd10) +$isd22 + $isd31) / $totalassets;

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

  //BINKERTS Model
  $binkert = 0;
  $binkertcolor = "";
  $u1 = 0; $u2 = 0; $u3 = 0; $u4 = 0; $u5 = 0; $u6 = 0; $u7= 0; $u8 = 0;




  if($laef44 == 0 || ($aae6 + $aae14 + $aae24) == 0 || ($ise4 + ($ise7 - $ise9 - $ise10 - $ise22)) == 0 ||
     $ise14== 0 || $aae4 == 0 || $laee5 == 0 ||
     ($aae4 - $laee5) == 0 || ($laee5 + $laee27 + $laee32 + $laee57) == 0) {

     $binkert = "N/A";
     $binkertcolor = "orange";
     $nacount++;

  } else {
  $u1 = $aaf33 / $laef44;
  $u2 = $laee5 / ($aae6 + $aae14 + $aae24);
  $u3 = $ise64 / ($ise4 + ($ise7 - $ise9 - $ise10 - $ise22));
  $u4 = ($ise4 + ($ise7 - $ise9 - $ise10) + $ise22 + $ise30) / $ise14;
  $u5 = $aad4 / $aae4 - 1;
  $u6 = $laed5 / $laee5 - 1;

  $u7 = (($aad4 - $laed5) / ($aae4 - $laee5))-1;
  $u8 = $ise64 / ($laee5 + $laee27 + $laee32 + $laee57);

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

  $result = "";

    if($red != 0 && $red <= 2) {
      $orangewarning = "block";
      $redwarning = "none";
      $result = "First Degree Financial Distress";
    }
    if($red > 2 && $red <= 4) {
      $distress = "second";
      $redwarning = "block";
      $orangewarning = "none";
      $result = "Second Degree Financial Distress";
    }
    if($red > 4) {
      $distress = "third";
      $redwarning = "block";
      $orangewarning = "none";
      $result = "Third Degree Financial Distress";
    }


  if($red == 0 && $green > 0) {
      $greenwarning = "block";
      $orangewarning = "none";
      $redwarning = "none";
      $result = "No Financial Distress";
  }

  if($nacount == 6) {
    $greenwarning = "none";
    $orangewarning = "none";
    $redwarning = "none";
    $result = "Invalid Data";
  }


  $nadisplay = "none";
  if($nacount > 0) {
    $nadisplay = "block";
  } else {
    $nadisplay = "none";
  }

  if($altmancolor == "#00c373")
    $altmancolor2 = "/early_warning/assets/content/uploads/2020/11/green.jpg";
  else
    $altmancolor2 = "/early_warning/assets/content/uploads/2020/11/".$altmancolor.".jpg";

  if($in05color == "#00c373")
      $indexcolor2 = "/early_warning/assets/content/uploads/2020/11/green.jpg";
  else
      $indexcolor2 = "/early_warning/assets/content/uploads/2020/11/".$in05color.".jpg";



  if($tafflercolor == "#00c373")
      $tafflercolor2 = "/early_warning/assets/content/uploads/2020/11/green.jpg";
  else
      $tafflercolor2 = "/early_warning/assets/content/uploads/2020/11/".$tafflercolor.".jpg";

  if($bonitycolor == "#00c373")
      $bonitycolor2 = "/early_warning/assets/content/uploads/2020/11/green.jpg";
  else
      $bonitycolor2 = "/early_warning/assets/content/uploads/2020/11/".$bonitycolor.".jpg";

  if($quicktestcolor == "#00c373")
      $quicktestcolor2= "/early_warning/assets/content/uploads/2020/11/green.jpg";
  else
      $quicktestcolor2 = "/early_warning/assets/content/uploads/2020/11/".$quicktestcolor.".jpg";

  if($binkertcolor == "#00c373")
      $binkertcolor2 = "/early_warning/assets/content/uploads/2020/11/green.jpg";
  else
      $binkertcolor2 = "/early_warning/assets/content/uploads/2020/11/".$binkertcolor.".jpg";



  $data['altmancolor2'] = $altmancolor2;
  $data['indexcolor2'] = $indexcolor2;
  $data['tafflercolor2'] = $tafflercolor2;
  $data['bonitycolor2'] = $bonitycolor2;
  $data['quicktestcolor2'] = $quicktestcolor2;
  $data['binkertcolor2'] = $binkertcolor2;

  $data['greenwarning'] = $greenwarning;
  $data['orangewarning'] = $orangewarning;
  $data['redwarning'] = $redwarning;
  $data['distress'] = $distress;
  $data['nadisplay'] = $nadisplay;

  // ADD TO DATABASE
  $basic =  new Basic;

  $basic->company_name = $company;
  $basic->current_year = $currentyear;
  $basic->altman= $altman;
  $basic->in05 = $in05;
  $basic->quicktest = $quicktest;
  $basic->bonity = $bonity;
  $basic->taffler = $taffler;
  $basic->binkert = $binkert;
  $basic->result = $result;

  $basic->save();


  // RETURN VIEW
  //return view('results',$data);
  // ALTERNATIVE
  return view('results2',$data);
  }

}
