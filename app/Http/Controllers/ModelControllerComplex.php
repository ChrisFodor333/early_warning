<?php


namespace App\Http\Controllers;

use Request;

class ModelControllerComplex extends Controller
{

  public function calculate(Request $request) {


  $green = 0;
  $orange = 0;
  $red = 0;
  $nacount = 0;


  $green2 = 0;
  $orange2 = 0;
  $red2 = 0;
  $nacount2 = 0;


  $green1 = 0;
  $orange1 = 0;
  $red1 = 0;
  $nacount1 = 0;

  //COMPANY DETAILS
  $company = Request::get('companyname');
  $currentyear = Request::get('currentyear');
  $data['currentyear'] =  $currentyear;

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
  $aae4 = Request::get('total-assets2');
  $aae34 = Request::get('inventory2');
  $ise8 = Request::get('revenue-p-s2');
  $ise22 = Request::get('revenue-sale2');
  $ise62 = Request::get('profit-loss-before-tax2');
  $laee27 = Request::get('provisions2');

  $aae6 = Request::get('intangible-assets2');
  $aae58 = Request::get('financial-accounts2');
  $ise9 = Request::get('internal-inventory2');
  $ise25 = Request::get('operating-income2');
  $ise64 = Request::get('profit-loss-after-tax2');
  $laee32 = Request::get('non-current-liabilities-2');

  $aae14 = Request::get('ppe2');
  $aae64 = Request::get('ad-total2');
  $ise10 = Request::get('own-work2');
  $ise30 = Request::get('revenue-shares2');
  $laee5 = Request::get('equity2');
  $laee44 = Request::get('current-liabilities2');

  $aae24 = Request::get('financial-assets2');
  $ise4 = Request::get('revenue-merch2');
  $ise14 = Request::get('added-value2');
  $ise31 = Request::get('securities-shares2');
  $laee23 = Request::get('retained-earnings2');
  $laee57 = Request::get('bank-loans2');

  $aae33 = Request::get('current-assets2');
  $ise7 = Request::get('production2');
  $ise21 = Request::get('amortization2');
  $ise42 = Request::get('interest-expense2');
  $laee26 = Request::get('liabilities2');
  $laee59 = Request::get('ad2');

  // THE YEAR BEFORE

  $aaf4 = Request::get('total-assets1');
  $isf4 = Request::get('revenue-merch1');
  $isf21 = Request::get('amortization1');
  $isf62 = Request::get('profit-loss-before-tax1');
  $laef27 = Request::get('provisions1');

  $aaf33 = Request::get('current-assets1');
  $isf7 = Request::get('production1');
  $isf22 = Request::get('revenue-sale1');
  $isf64 = Request::get('profit-loss-after-tax1');
  $laef44 = Request::get('current-liabilities1');

  $aaf34 = Request::get('inventory1');
  $isf8 = Request::get('revenue-p-s1');
  $isf25 = Request::get('operating-income1');
  $laef5 = Request::get('equity1');
  $laef59 = Request::get('ad1');

  $aaf58 = Request::get('financial-accounts1');
  $isf9 = Request::get('internal-inventory1');
  $isf31 = Request::get('securities-shares1');
  $laef23 = Request::get('retained-earnings1');

  $aaf64 = Request::get('ad-total1');
  $isf10 = Request::get('own-work-cap1');
  $isf42 = Request::get('interest-expense1');
  $laef26 = Request::get('liabilities1');




  // ALTMAN
  $x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
  $altmancolor = "";


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

// END OF ALTMAN


// ALTMAN YEAR 2
$x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
$altmancolor = "";


$totalassets = $aae4;
$totalliabilities = $laee26 - $laee27;
if($totalassets == 0 || $totalliabilities == 0) {
  $altman = "N/A";
  $altmancolor = "orange";
  $nacount2++;
} else {

$x1 = ($aae33 + $aae64 - $laee44 - $laee59) / $totalassets;
$x2 = $laee23 / $totalassets;
$x3 = ($ise62 + $ise42) / $totalassets;
$x4 = $laee5 / $totalliabilities;
$x5 = ($ise4 + $ise8) / $totalassets;

$altman = (0.717 * $x1) + (0.847 * $x2) + (3.107 * $x3) + (0.42 * $x4) + (0.998 * $x5);
$altman = number_format($altman,2);
if($altman < 1.2) {
    $altmancolor = "red";
    $red2++;
  }
if($altman > 2.9) {
    $altmancolor = "#00c373";
    $green2++;
  }
if($altman >= 1.2 && $altman <= 2.9) {
    $altmancolor = "orange";
    $orange2++;
  }
}
$data['altman2'] =  $altman;
$data['altmancolor2'] =  $altmancolor;

// END OF ALTMAN


// ALTMAN YEAR 1
$x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
$altmancolor = "";


$totalassets = $aaf4;
$totalliabilities = $laef26 - $laef27;
if($totalassets == 0 || $totalliabilities == 0) {
  $altman = "N/A";
  $altmancolor = "orange";
  $nacount1++;
} else {

$x1 = ($aaf33 + $aaf64 - $laef44 - $laef59) / $totalassets;
$x2 = $laef23 / $totalassets;
$x3 = ($isf62 + $isf42) / $totalassets;
$x4 = $laef5 / $totalliabilities;
$x5 = ($isf4 + $isf8) / $totalassets;

$altman = (0.717 * $x1) + (0.847 * $x2) + (3.107 * $x3) + (0.42 * $x4) + (0.998 * $x5);
$altman = number_format($altman,2);
if($altman < 1.2) {
    $altmancolor = "red";
    $red1++;
  }
if($altman > 2.9) {
    $altmancolor = "#00c373";
    $green1++;
  }
if($altman >= 1.2 && $altman <= 2.9) {
    $altmancolor = "orange";
    $orange1++;
  }
}
$data['altman1'] =  $altman;
$data['altmancolor1'] =  $altmancolor;

// END OF ALTMAN


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
 // END OF IN05

 // IN05
 $y1 = 0; $y2 = 0; $y3 = 0; $y4 = 0; $y5 = 0; $in05 = 0;
 $in05color = "";
 $totalassets = $aae4;
 $totalliabilities = $laee26 + $laee59;

 if($totalassets == 0 || $totalliabilities == 0  || $laee44== 0) {
   $in05color = "orange";
   $in05 = "N/A";
   $nacount2++;
 }
 else {
 $y1 = $totalassets / $totalliabilities;
 if($ise42 == 0) {
   $y2 = 0;
 } else {
     $y2 = ($ise62 + $ise42) / $ise42;
 }
 $y3 = ($ise62 + $ise42) / $totalassets;
 $y4 = ($ise4 + $ise8 - $ise9 - $ise10 + $ise22 + $ise25 - $ise22) / $totalassets;
 $y5 = $aae33 / $laee44;

 $in05 = (0.13 *  $y1) + (0.04 * $y2) + (3.97 * $y3) + (0.21 * $y4) + (0.09 * $y5);
 $in05 = number_format($in05,2);


 if($in05 < 0.9) {
     $in05color = "red";
     $red2++;
   }
 if($in05 > 1.6) {
     $in05color = "#00c373";
     $green2++;
   }
 if($in05 >= 0.9 && $in05 <= 1.6) {
     $in05color = "orange";
     $orange2++;
   }
}
 $data['in052'] =  $in05;
 $data['in05color2'] =  $in05color;
// END OF IN05


// IN05
$y1 = 0; $y2 = 0; $y3 = 0; $y4 = 0; $y5 = 0; $in05 = 0;
$in05color = "";
$totalassets = $aaf4;
$totalliabilities = $laef26 + $laef59;

if($totalassets == 0 || $totalliabilities == 0  || $laef44== 0) {
  $in05color = "orange";
  $in05 = "N/A";
  $nacount1++;
}
else {
$y1 = $totalassets / $totalliabilities;
if($isf42 == 0) {
  $y2 = 0;
} else {
    $y2 = ($isf62 + $isf42) / $isf42;
}
$y3 = ($isf62 + $isf42) / $totalassets;
$y4 = ($isf4 + $isf8 - $isf9 - $isf10 + $isf22 + $isf25 - $isf22) / $totalassets;
$y5 = $aaf33 / $laef44;

$in05 = (0.13 *  $y1) + (0.04 * $y2) + (3.97 * $y3) + (0.21 * $y4) + (0.09 * $y5);
$in05 = number_format($in05,2);


if($in05 < 0.9) {
    $in05color = "red";
    $red1++;
  }
if($in05 > 1.6) {
    $in05color = "#00c373";
    $green1++;
  }
if($in05 >= 0.9 && $in05 <= 1.6) {
    $in05color = "orange";
    $orange1++;
  }
}
$data['in051'] =  $in05;
$data['in05color1'] =  $in05color;
// END OF IN05

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

  //END OF TAFFLER

  // TAFFLER
  $t1 = 0; $t2 = 0; $t3 = 0; $t4 = 0; $taffler = 0;
  $tafflercolor = "";

  $totalassets = $aae4;
  $totalliabilities = $laee26;

  if($totalassets == 0 || $totalliabilities == 0) {
    $taffler = "N/A";
    $tafflercolor = "orange";
    $nacount2++;
  } else {
  if($laee44 == 0) {
    $t1 = 0;
  }  else {
      $t1 = $ise62 / $laee44;
  }

  $t2 = $aae33 / $laee26;
  $t3 = $laee44 / $totalassets;
  $t4 = ($ise4 + $ise8) / $totalassets;

  $taffler = (0.53 * $t1) + (0.13 * $t2) + (0.18 * $t3) + (0.16 * $t4);
  $taffler = number_format($taffler,2);

  if($taffler < 0.2) {
      $tafflercolor = "red";
      $red2++;
    }
  if($taffler > 0.3) {
      $tafflercolor = "#00c373";
      $green2++;
    }
  if($taffler >= 0.2 && $taffler <= 0.3) {
      $tafflercolor = "orange";
      $orange2++;
    }
  }
  $data['taffler2'] =  $taffler;
  $data['tafflercolor2'] =  $tafflercolor;

  //END OF TAFFLER


  // TAFFLER
  $t1 = 0; $t2 = 0; $t3 = 0; $t4 = 0; $taffler = 0;
  $tafflercolor = "";

  $totalassets = $aaf4;
  $totalliabilities = $laef26;

  if($totalassets == 0 || $totalliabilities == 0) {
    $taffler = "N/A";
    $tafflercolor = "orange";
    $nacount1++;
  } else {
  if($laef44 == 0) {
    $t1 = 0;
  }  else {
      $t1 = $isf62 / $laef44;
  }

  $t2 = $aaf33 / $laef26;
  $t3 = $laef44 / $totalassets;
  $t4 = ($isf4 + $isf8) / $totalassets;

  $taffler = (0.53 * $t1) + (0.13 * $t2) + (0.18 * $t3) + (0.16 * $t4);
  $taffler = number_format($taffler,2);

  if($taffler < 0.2) {
      $tafflercolor = "red";
      $red1++;
    }
  if($taffler > 0.3) {
      $tafflercolor = "#00c373";
      $green1++;
    }
  if($taffler >= 0.2 && $taffler <= 0.3) {
      $tafflercolor = "orange";
      $orange1++;
    }
}
  $data['taffler1'] =  $taffler;
  $data['tafflercolor1'] =  $tafflercolor;

  //END OF TAFFLER



  // QUICK TEST
  $b1 = 0; $b2 = 0; $b3 = 0; $b4 = 0; $quicktest = 0;
  $quicktestcolor = "";

  $totalassets = $aad4;
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

//END OF QUICK TEST


// QUICK TEST YEAR 2
$b1 = 0; $b2 = 0; $b3 = 0; $b4 = 0; $quicktest = 0;
$quicktestcolor = "";

$totalassets = $aae4;
$cashflow = ($ise64 + $ise21);
$sales = ($ise4 + $ise8);


if($totalassets == 0 || $cashflow == 0 || $sales == 0) {
    $quicktest = "N/A";
    $quicktestcolor = "orange";
    $nacount2++;
} else {
$b1 = ($laee5 / $totalassets)*100;
$b2 = ($laee26 - $aae58) / $cashflow;
$b3 = ($cashflow / $sales)*100;
$b4 = (($ise62 + $ise42) / $totalassets)*100;


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
    $green2++;
  }
if($quicktest > 15.0) {
    $quicktestcolor = "red";
    $red2++;
  }
if($quicktest >= 9.0 && $quicktest <= 15.0) {
    $quicktestcolor = "orange";
    $orange2++;
  }

}
$data['quicktest2'] =  $quicktest;
$data['quicktestcolor2'] =  $quicktestcolor;

//END OF QUICK TEST


// QUICK TEST YEAR 1
$b1 = 0; $b2 = 0; $b3 = 0; $b4 = 0; $quicktest = 0;
$quicktestcolor = "";

$totalassets = $aaf4;
$cashflow = ($isf64 + $isf21);
$sales = ($isf4 + $isf8);


if($totalassets == 0 || $cashflow == 0 || $sales == 0) {
    $quicktest = "N/A";
    $quicktestcolor = "orange";
    $nacount1++;
} else {
$b1 = ($laef5 / $totalassets)*100;
$b2 = ($laef26 - $aaf58) / $cashflow;
$b3 = ($cashflow / $sales)*100;
$b4 = (($isf62 + $isf42) / $totalassets)*100;


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
    $green1++;
  }
if($quicktest > 15.0) {
    $quicktestcolor = "red";
    $red1++;
  }
if($quicktest >= 9.0 && $quicktest <= 15.0) {
    $quicktestcolor = "orange";
    $orange1++;
  }

}
$data['quicktest1'] =  $quicktest;
$data['quicktestcolor1'] =  $quicktestcolor;

//END OF QUICK TEST

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

  // END OF BONITY

  // INDEX BONITY YEAR 2
  $l1 = 0; $l2 = 0; $l3 = 0; $l4 = 0; $l5 = 0; $l6 = 0; $bonity = 0;
  $bonitycolor = "";

  $totalliabilities = ($aae4 - $laee5);
  $totalassets = $aae4;
  $sales = ($ise4 + ($ise7 - $ise9 - $ise10) + $ise22 + $ise31);

  if($totalliabilities == 0 || $totalassets == 0 || $sales == 0) {
    $bonity = "N/A";
    $bonitycolor = "orange";
    $nacount2++;
  } else {
  $l1 = ($ise64 + $ise21) / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $ise62 / $totalassets;
  $l4 = $ise62 / $sales;
  $l5 = $aae34 / $sales;
  $l6 = ($ise4 + ($ise7 - $ise9 - $ise10) +$ise22 + $ise31) / $totalassets;

  $bonity = (1.5 * $l1) + (0.08 * $l2) + (10 * $l3) + (5 * $l4) + (0.3 * $l5) + (0.1 * $l6);
  $bonity = number_format($bonity,2);

  if($bonity < -1.0) {
      $bonitycolor = "red";
      $red2++;
    }
  if($bonity > 1.0) {
      $bonitycolor = "#00c373";
      $green2++;
    }
  if($bonity >= -1.0 && $bonity <= 1.0) {
      $bonitycolor = "orange";
      $orange2++;
    }
  }
  $data['bonity2'] =  $bonity;
  $data['bonitycolor2'] =  $bonitycolor;

  // END OF BONITY


  // INDEX BONITY YEAR 1
  $l1 = 0; $l2 = 0; $l3 = 0; $l4 = 0; $l5 = 0; $l6 = 0; $bonity = 0;
  $bonitycolor = "";

  $totalliabilities = ($aaf4 - $laef5);
  $totalassets = $aaf4;
  $sales = ($isf4 + ($isf7 - $isf9 - $isf10) + $isf22 + $isf31);

  if($totalliabilities == 0 || $totalassets == 0 || $sales == 0) {
    $bonity = "N/A";
    $bonitycolor = "orange";
    $nacount1++;
  } else {
  $l1 = ($isf64 + $isf21) / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $isf62 / $totalassets;
  $l4 = $isf62 / $sales;
  $l5 = $aaf34 / $sales;
  $l6 = ($isf4 + ($isf7 - $isf9 - $isf10) +$isf22 + $isf31) / $totalassets;

  $bonity = (1.5 * $l1) + (0.08 * $l2) + (10 * $l3) + (5 * $l4) + (0.3 * $l5) + (0.1 * $l6);
  $bonity = number_format($bonity,2);

  if($bonity < -1.0) {
      $bonitycolor = "red";
      $red1++;
    }
  if($bonity > 1.0) {
      $bonitycolor = "#00c373";
      $green1++;
    }
  if($bonity >= -1.0 && $bonity <= 1.0) {
      $bonitycolor = "orange";
      $orange1++;
    }
  }
  $data['bonity1'] =  $bonity;
  $data['bonitycolor1'] =  $bonitycolor;

  // END OF BONITY

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

  $greenwarning2 = "none";
  $orangewarning2 = "none";
  $redwarning2 = "none";
  $distress2 = "";

  $greenwarning1 = "none";
  $orangewarning1 = "none";
  $redwarning1 = "none";
  $distress1 = "";


    if($red <= 2) {
      $orangewarning = "block";
      $redwarning = "none";
    }
    if($red > 2 && $red <= 4) {
      $distress = "second";
      $redwarning = "block";
      $orangewarning = "none";
    }
    if($red > 4) {
      $distress = "third";
      $redwarning = "block";
      $orangewarning = "none";
    }


  if($red == 0 && $green > 0) {
      $greenwarning = "block";
      $orangewarning = "none";
      $redwarning = "none";
  }

  if($nacount == 6) {
    $greenwarning = "none";
    $orangewarning = "none";
    $redwarning = "none";
  }


  $nadisplay = "none";
  if($nacount > 0) {
    $nadisplay = "block";
  } else {
    $nadisplay = "none";
  }

  // YEAR 2 Results
  if($red2 <= 2) {
    $orangewarning2 = "block";
    $redwarning2 = "none";
  }
  if($red2 > 2 && $red2 <= 4) {
    $distress2 = "second";
    $redwarning2 = "block";
    $orangewarning2 = "none";
  }
  if($red2 > 4) {
    $distress2 = "third";
    $redwarning2 = "block";
    $orangewarning2 = "none";
  }


if($red2 == 0 && $green2 > 0) {
    $greenwarning2 = "block";
    $orangewarning2 = "none";
    $redwarning2 = "none";
}

if($nacount2 == 5) {
  $greenwarning2 = "none";
  $orangewarning2 = "none";
  $redwarning2 = "none";
}


$nadisplay2 = "none";
if($nacount2 > 0) {
  $nadisplay2 = "block";
} else {
  $nadisplay2 = "none";
}

// YEAR 1
if($red1 <= 2) {
  $orangewarning1 = "block";
  $redwarning1 = "none";
}
if($red1 > 2 && $red1 <= 4) {
  $distress1 = "second";
  $redwarning1 = "block";
  $orangewarning1 = "none";
}
if($red1 > 4) {
  $distress1 = "third";
  $redwarning1 = "block";
  $orangewarning1 = "none";
}


if($red1 == 0 && $green1 > 0) {
  $greenwarning1 = "block";
  $orangewarning1 = "none";
  $redwarning1 = "none";
}

if($nacount1 == 5) {
$greenwarning1 = "none";
$orangewarning1 = "none";
$redwarning1 = "none";
}


$nadisplay1 = "none";
if($nacount1 > 0) {
$nadisplay1 = "block";
} else {
$nadisplay1 = "none";
}




/*  if($altmancolor == "#00c373")
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
  */

  $data['greenwarning'] = $greenwarning;
  $data['orangewarning'] = $orangewarning;
  $data['redwarning'] = $redwarning;
  $data['distress'] = $distress;
  $data['nadisplay'] = $nadisplay;


  $data['greenwarning2'] = $greenwarning2;
  $data['orangewarning2'] = $orangewarning2;
  $data['redwarning2'] = $redwarning2;
  $data['distress2'] = $distress2;
  $data['nadisplay2'] = $nadisplay2;


  $data['greenwarning1'] = $greenwarning1;
  $data['orangewarning1'] = $orangewarning1;
  $data['redwarning1'] = $redwarning1;
  $data['distress1'] = $distress1;
  $data['nadisplay1'] = $nadisplay1;

  // RETURN VIEW
  //return view('results',$data);
  // ALTERNATIVE
  return view('complexresults',$data);
  }

}
