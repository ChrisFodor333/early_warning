<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Requests;
use App\Models\Complex;
use DB;
use Phpml\Classification\KNearestNeighbors;
use Phpml\Classification\SVC;
use Phpml\Classification\NaiveBayes;
use Phpml\SupportVectorMachine\Kernel;
use App\Models\Machine;

class ModelControllerComplex extends Controller
{

  public function calculate(Request $request) {


  $green = 0;
  $orange = 0;
  $red = 0;
  $nacount = 0;

  // SAVE TO DATABASE
  $complex =  new Complex;



  $green2 = 0;
  $orange2 = 0;
  $red2 = 0;
  $nacount2 = 0;


  $green1 = 0;
  $orange1 = 0;
  $red1 = 0;
  $nacount1 = 0;

  //COMPANY DETAILS
  //$company = request()->get('companyname');
  $country = request()->get('country');
  $data['country'] =  $country;
  $currentyear = request()->get('currentyear');
  $data['currentyear'] =  $currentyear;


  $help = "";
  $help2 = "";

  switch ($country) {
    case 'Slovakia':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://uksk.sk/";
      break;

    case 'Hungary':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://ifka.hu/ or https://www.pbn.hu/";
      break;

    case 'Germany':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://www.steinbeis-europa.de/";
      break;

    case 'Romania':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://www.utcluj.ro/";
      break;


    case 'Austria':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://www.zsi.at/";
      break;


    case 'Croatia':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "http://www.czposijek.hr/";
      break;


    case 'Slovenia':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://www.p-tech.si/";
      break;

    case 'Bosnia and Herzegovina':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://www.rars-msp.org/";
      break;


    case 'Serbia':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://pks.rs/";
      break;


    case 'Moldova':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://www.odimm.md/";
      break;


    case 'Ukraine':
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "http://www.impeer.od.ua/";
      break;


    default:
      $help = "For financial support in ".$country. " contact our partners at ";
      $help2 = "https://uksk.sk/";
      break;
  }


  $data['help'] =  $help;
  $data['help2'] =  $help2;


    //$complex->company_name = $company;
    $complex->country = $country;
    $complex->current_year = $currentyear;


  // DATA FROM THE FORM - CURRENT YEAR
  $bs2 = request()->get('total-assets');
  $bs22 = request()->get('revenue-merch');
  $bs25 = request()->get('amortization');
  $bs29 = request()->get('profit-loss-before-tax');
  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $bs29 = request()->get('profit-loss-before-tax') + request()->get('profit-loss-before-taxRB');
  }
  $bs14 = request()->get('provisions');

  $bs6 = request()->get('current-assets');
  $bs26 = request()->get('revenue-sale');
  $bs30 = request()->get('profit-loss-after-tax');
  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $bs30 = request()->get('profit-loss-after-tax') + request()->get('profit-loss-after-taxRB');
  }

  $bs16 = request()->get('current-liabilities');

  $bs7= request()->get('inventory');
  $bs23_1 = request()->get('revenue-p');
  $bs23_2 = request()->get('revenue-s');
  if($country == "Hungary" || $country == "Croatia") {
    $bs23_1 = 0;
    $bs23_2 = 0;
  }

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $bs23_2 = 0;
  }

  $bs11 = request()->get('equity');
  $bs20 = request()->get('ad');

  if($country == "Bosnia and Herzegovina") {
  $bs20 = request()->get('ad') + request()->get('adB');
  }

  $bs9 = request()->get('financial-accounts');
  $bs27 = request()->get('securities-shares');

  $bs10 = request()->get('ad-total');

  if($country == "Romania") {
    $bs10 = request()->get('ad-total') + request()->get('ad-totalR');
  }

  $bs28 = request()->get('interest-expense');
  $bs13 = request()->get('liabilities');

  $bs12 = request()->get('net-profit-loss');

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $bs12 = request()->get('net-profit-loss') + request()->get('net-profit-lossRB');
  }

  $bs8 = request()->get('current-receivables');
  $bs17 = request()->get('financial-assistance');
  if($country == "Croatia") {
    $bs17 = 0;
  }
  $bs19 = request()->get('current-bank-loans');

  // LAST YEAR
  $cs2 = request()->get('total-assets2');
  $cs7= request()->get('inventory2');
  $cs23_1 = request()->get('revenue-p2');
  $cs23_2 = request()->get('revenue-s2');
  if($country == "Hungary" || $country == "Croatia") {
    $cs23_1 = 0;
    $cs23_2 = 0;
  }

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $cs23_2 = 0;
  }

  $cs26 = request()->get('revenue-sale2');
  $cs29 = request()->get('profit-loss-before-tax2');
  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $cs29 = request()->get('profit-loss-before-tax2') + request()->get('profit-loss-before-tax2RB');
  }
  $cs14 = request()->get('provisions2');

  $cs3 = request()->get('intangible-assets2');
  $cs9 = request()->get('financial-accounts2');
  $cs30 = request()->get('profit-loss-after-tax2');

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $cs30 = request()->get('profit-loss-after-tax2') + request()->get('profit-loss-after-tax2RB');
  }

  $cs15 = request()->get('non-current-liabilities-2');

  $cs4 = request()->get('ppe2');
  $cs10 = request()->get('ad-total2');

  if($country == "Romania") {
    $cs10 = request()->get('ad-total2') + request()->get('ad-total2R');
  }

  $cs11 = request()->get('equity2');
  $cs16 = request()->get('current-liabilities2');

  $cs5 = request()->get('financial-assets2');
  $cs22 = request()->get('revenue-merch2');
  $cs24 = request()->get('added-value2');
  if($country == "Hungary") {
    $cs24 = request()->get('revenue-merch2') + request()->get('own-performance2') - request()->get('materialcosts2');
  }
  $cs27 = request()->get('securities-shares2');
  $cs18 = request()->get('bank-loans2');

  $cs6 = request()->get('current-assets2');
  $cs25 = request()->get('amortization2');
  $cs28 = request()->get('interest-expense2');
  $cs13 = request()->get('liabilities2');
  $cs20 = request()->get('ad2');

  if($country == "Bosnia and Herzegovina") {
  $cs20 = request()->get('ad2') + request()->get('a2dB');
  }

  $cs12 = request()->get('net-profit-loss2');

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $cs12 = request()->get('net-profit-loss2') + request()->get('net-profit-loss2RB');
  }

  $cs8 = request()->get('current-receivables2');
  $cs17 = request()->get('financial-assistance2');
  if($country == "Croatia") {
    $cs17 = 0;
  }
  $cs19 = request()->get('current-bank-loans2');

  // THE YEAR BEFORE

  $ds2 = request()->get('total-assets1');
  $ds22 = request()->get('revenue-merch1');
  $ds25 = request()->get('amortization1');
  $ds29 = request()->get('profit-loss-before-tax1');
  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $ds29 = request()->get('profit-loss-before-tax1') + request()->get('profit-loss-before-tax3RB');
  }
  $ds14 = request()->get('provisions1');

  $ds6 = request()->get('current-assets1');
  $ds26 = request()->get('revenue-sale1');
  $ds30 = request()->get('profit-loss-after-tax1');

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $ds30 = request()->get('profit-loss-after-tax1') + request()->get('profit-loss-after-tax3RB');
  }

  $ds16 = request()->get('current-liabilities1');

  $ds7= request()->get('inventory1');
  $ds23_1 = request()->get('revenue-p1');
  $ds23_2 = request()->get('revenue-s1');
  if($country == "Hungary" || $country == "Croatia") {
    $ds23_1 = 0;
    $ds23_2 = 0;
  }

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $ds23_2 = 0;
  }


  $ds11 = request()->get('equity1');
  $ds20 = request()->get('ad1');

  if($country == "Bosnia and Herzegovina") {
  $ds20 = request()->get('ad1') + request()->get('ad3B');
  }

  $ds9 = request()->get('financial-accounts1');
  $isf9 = request()->get('internal-inventory1');
  $ds27 = request()->get('securities-shares1');

  $ds10 = request()->get('ad-total1');

  if($country == "Romania") {
    $ds10 = request()->get('ad-total1') + request()->get('ad-total3R');
  }


  $ds28 = request()->get('interest-expense1');
  $ds13 = request()->get('liabilities1');

  $ds12 = request()->get('net-profit-loss1');

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $ds12 = request()->get('net-profit-loss1') + request()->get('net-profit-loss3RB');
  }

  $ds8 = request()->get('current-receivables1');
  $ds17 = request()->get('financial-assistance1');
  if($country == "Croatia") {
    $ds17 = 0;
  }
  $ds19 = request()->get('current-bank-loans1');




  // ALTMAN
  $x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
  $altmancolor = "";


  $totalassets = $bs2;
  $totalliabilities = $bs13 - $bs14;
  if($totalassets == 0 || $totalliabilities == 0) {
    $altman = "N/A";
    $altmancolor = "orange";
    $nacount++;
  } else {

    $x1 = ($bs7 + $bs8 + $bs9 + $bs10 - $bs16 - $bs17 - $bs19 - $bs20) / $totalassets;
    $x2 = $bs12 / $totalassets;
    $x3 = ($bs29 + $bs28) / $totalassets;
    $x4 = $bs11 / $totalliabilities;
    $x5 = ($bs22 + $bs23_1 + $bs23_2 + $bs26 + $bs27) / $totalassets;


  $altman = (0.717 * $x1) + (0.847 * $x2) + (3.107 * $x3) + (0.42 * $x4) + (0.998 * $x5);
  $altman = number_format($altman,2, '.', '');
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
  $complex->altman1= $altman;
  $alt1 = $altman;


// END OF ALTMAN


// ALTMAN YEAR 2
$x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
$altmancolor = "";


$totalassets = $cs2;
$totalliabilities = $cs13 - $cs14;
if($totalassets == 0 || $totalliabilities == 0) {
  $altman = "N/A";
  $altmancolor = "orange";
  $nacount2++;
} else {

$x1 = ($cs7 + $cs8 + $cs9 + $cs10 - $cs16 - $cs17 - $cs19 - $cs20) / $totalassets;
$x2 = $cs12 / $totalassets;
$x3 = ($cs29 + $cs28) / $totalassets;
$x4 = $cs11 / $totalliabilities;
$x5 = ($cs22 + $cs23_1 + $cs23_2 + $cs26 + $cs27) / $totalassets;


$altman = (0.717 * $x1) + (0.847 * $x2) + (3.107 * $x3) + (0.42 * $x4) + (0.998 * $x5);
$altman = number_format($altman,2, '.', '');
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
$complex->altman2= $altman;
$alt2 = $altman;

// END OF ALTMAN


// ALTMAN YEAR 1
$x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
$altmancolor = "";


$totalassets = $ds2;
$totalliabilities = $ds13 - $ds14;
if($totalassets == 0 || $totalliabilities == 0) {
  $altman = "N/A";
  $altmancolor = "orange";
  $nacount1++;
} else {

$x1 = ($ds7 + $ds8 + $ds9 + $ds10 - $ds16 - $ds17 - $ds19 - $ds20) / $totalassets;
$x2 = $ds12 / $totalassets;
$x3 = ($ds29 + $ds28) / $totalassets;
$x4 = $ds11 / $totalliabilities;
$x5 = ($ds22 + $ds23_1 + $ds23_2 + $ds26 + $ds27) / $totalassets;

$altman = (0.717 * $x1) + (0.847 * $x2) + (3.107 * $x3) + (0.42 * $x4) + (0.998 * $x5);
$altman = number_format($altman,2, '.', '');
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
$complex->altman3= $altman;
$alt3 = $altman;

// END OF ALTMAN


  // IN05
  $y1 = 0; $y2 = 0; $y3 = 0; $y4 = 0; $y5 = 0; $in05 = 0;
  $in05color = "";
  $totalassets = $bs2;
  $totalliabilities = $bs13 + $bs20;

  if($totalassets == 0 || $totalliabilities == 0  || $bs16== 0) {
    $in05color = "orange";
    $in05 = "N/A";
    $nacount++;
  }
  else {
  $y1 = $totalassets / $totalliabilities;
  if($bs28 == 0) {
    $y2 = 0;
  } else {
      $y2 = ($bs29 + $bs28) / $bs28;
  }
  $y3 = ($bs29 + $bs28) / $totalassets;
  $y4 = ($bs22 + $bs23_1 + $bs23_2 + $bs27 + $bs26) / $totalassets;
  $y5 = $bs6 / ($bs16 + $bs19);

  $in05 = (0.13 *  $y1) + (0.04 * $y2) + (3.97 * $y3) + (0.21 * $y4) + (0.09 * $y5);
  $in05 = number_format($in05,2, '.', '');


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
  $complex->in051 = $in05;
  $ind1 = $in05;
 // END OF IN05

 // IN05
 $y1 = 0; $y2 = 0; $y3 = 0; $y4 = 0; $y5 = 0; $in05 = 0;
 $in05color = "";
 $totalassets = $cs2;
 $totalliabilities = $cs13 + $cs20;

 if($totalassets == 0 || $totalliabilities == 0  || $cs16== 0) {
   $in05color = "orange";
   $in05 = "N/A";
   $nacount2++;
 }
 else {
 $y1 = $totalassets / $totalliabilities;
 if($cs28 == 0) {
   $y2 = 0;
 } else {
     $y2 = ($cs29 + $cs28) / $cs28;
 }
 $y3 = ($cs29 + $cs28) / $totalassets;
 $y4 = ($cs22 + $cs23_1 + $cs23_2 + $cs27 +$cs26) / $totalassets;
 $y5 = $cs6 / ($cs16 + $cs19);

 $in05 = (0.13 *  $y1) + (0.04 * $y2) + (3.97 * $y3) + (0.21 * $y4) + (0.09 * $y5);
 $in05 = number_format($in05,2, '.', '');


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
 $complex->in052 = $in05;
 $ind2 = $in05;
// END OF IN05


// IN05
$y1 = 0; $y2 = 0; $y3 = 0; $y4 = 0; $y5 = 0; $in05 = 0;
$in05color = "";
$totalassets = $ds2;
$totalliabilities = $ds13 + $ds20;

if($totalassets == 0 || $totalliabilities == 0  || $ds16== 0) {
  $in05color = "orange";
  $in05 = "N/A";
  $nacount1++;
}
else {
$y1 = $totalassets / $totalliabilities;
if($ds28 == 0) {
  $y2 = 0;
} else {
    $y2 = ($ds29 + $ds28) / $ds28;
}
$y3 = ($ds29 + $ds28) / $totalassets;
$y4 = ($ds22 + $ds23_1 + $ds23_2 + $ds27 + $ds26) / $totalassets;
$y5 = $ds6 / ($ds16 + $ds19);

$in05 = (0.13 *  $y1) + (0.04 * $y2) + (3.97 * $y3) + (0.21 * $y4) + (0.09 * $y5);
$in05 = number_format($in05,2, '.', '');


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
$complex->in053 = $in05;
$ind3 = $in05;
// END OF IN05

  // TAFFLER
  $t1 = 0; $t2 = 0; $t3 = 0; $t4 = 0; $taffler = 0;
  $tafflercolor = "";

  $totalassets = $bs2;
  $totalliabilities = $bs13;

  if($totalassets == 0 || $totalliabilities == 0) {
    $taffler = "N/A";
    $tafflercolor = "orange";
    $nacount++;
  } else {
  if($bs16 == 0) {
    $t1 = 0;
  }  else {
      $t1 = $bs29 / $bs16;
  }

  $t2 = $bs6 / $bs13;
  $t3 = $bs16 / $totalassets;
  $t4 = ($bs22 + $bs23_1 + $bs23_2) / $totalassets;

  $taffler = (0.53 * $t1) + (0.13 * $t2) + (0.18 * $t3) + (0.16 * $t4);
  $taffler = number_format($taffler,2, '.', '');

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
  $complex->taffler1 = $taffler;
  $taff1 = $taffler;

  //END OF TAFFLER

  // TAFFLER
  $t1 = 0; $t2 = 0; $t3 = 0; $t4 = 0; $taffler = 0;
  $tafflercolor = "";

  $totalassets = $cs2;
  $totalliabilities = $cs13;

  if($totalassets == 0 || $totalliabilities == 0) {
    $taffler = "N/A";
    $tafflercolor = "orange";
    $nacount2++;
  } else {
  if($cs16 == 0) {
    $t1 = 0;
  }  else {
      $t1 = $cs29 / $cs16;
  }

  $t2 = $cs6 / $cs13;
  $t3 = $cs16 / $totalassets;
  $t4 = ($cs22 + $cs23_1 + $cs23_2) / $totalassets;

  $taffler = (0.53 * $t1) + (0.13 * $t2) + (0.18 * $t3) + (0.16 * $t4);
  $taffler = number_format($taffler,2, '.', '');

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
  $complex->taffler2 = $taffler;
  $taff2 = $taffler;

  //END OF TAFFLER


  // TAFFLER
  $t1 = 0; $t2 = 0; $t3 = 0; $t4 = 0; $taffler = 0;
  $tafflercolor = "";

  $totalassets = $ds2;
  $totalliabilities = $ds13;

  if($totalassets == 0 || $totalliabilities == 0) {
    $taffler = "N/A";
    $tafflercolor = "orange";
    $nacount1++;
  } else {
  if($ds16 == 0) {
    $t1 = 0;
  }  else {
      $t1 = $ds29 / $ds16;
  }

  $t2 = $ds6 / $ds13;
  $t3 = $ds16 / $totalassets;
  $t4 = ($ds22 + $ds23_1 + $ds23_2) / $totalassets;

  $taffler = (0.53 * $t1) + (0.13 * $t2) + (0.18 * $t3) + (0.16 * $t4);
  $taffler = number_format($taffler,2, '.', '');

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
  $complex->taffler3 = $taffler;
  $taff3 = $taffler;

  //END OF TAFFLER



  // QUICK TEST
  $b1 = 0; $b2 = 0; $b3 = 0; $b4 = 0; $quicktest = 0;
  $quicktestcolor = "";

  $totalassets = $bs2;
  $cashflow = ($bs30 + $bs25);
  $sales = ($bs22 + $bs23_1 + $bs23_2);


  if($totalassets == 0 || $cashflow == 0 || $sales == 0) {
      $quicktest = "N/A";
      $quicktestcolor = "orange";
      $nacount++;
  } else {
  $b1 = ($bs11 / $totalassets)*100;
  $b2 = ($bs13 - $bs9) / $cashflow;
  $b3 = ($cashflow / $sales)*100;
  $b4 = (($bs29 + $bs28) / $totalassets)*100;


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
  $quicktest = number_format($quicktest,2, '.', '');


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
$complex->quicktest1 = $quicktest;
$quickt1 = $quicktest;

//END OF QUICK TEST


// QUICK TEST YEAR 2
$b1 = 0; $b2 = 0; $b3 = 0; $b4 = 0; $quicktest = 0;
$quicktestcolor = "";

$totalassets = $cs2;
$cashflow = ($cs30 + $cs25);
$sales = ($cs22 + $cs23_1 + $cs23_2);


if($totalassets == 0 || $cashflow == 0 || $sales == 0) {
    $quicktest = "N/A";
    $quicktestcolor = "orange";
    $nacount2++;
} else {
$b1 = ($cs11 / $totalassets)*100;
$b2 = ($cs13 - $cs9) / $cashflow;
$b3 = ($cashflow / $sales)*100;
$b4 = (($cs29 + $cs28) / $totalassets)*100;


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
$quicktest = number_format($quicktest,2, '.', '');


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
$complex->quicktest2 = $quicktest;
$quickt2 = $quicktest;
//END OF QUICK TEST


// QUICK TEST YEAR 1
$b1 = 0; $b2 = 0; $b3 = 0; $b4 = 0; $quicktest = 0;
$quicktestcolor = "";

$totalassets = $ds2;
$cashflow = ($ds30 + $ds25);
$sales = ($ds22 + $ds23_1 + $ds23_2);


if($totalassets == 0 || $cashflow == 0 || $sales == 0) {
    $quicktest = "N/A";
    $quicktestcolor = "orange";
    $nacount1++;
} else {
$b1 = ($ds11 / $totalassets)*100;
$b2 = ($ds13 - $ds9) / $cashflow;
$b3 = ($cashflow / $sales)*100;
$b4 = (($ds29 + $ds28) / $totalassets)*100;


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
$quicktest = number_format($quicktest,2, '.', '');


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
$complex->quicktest3 = $quicktest;
$quickt3 = $quicktest;

//END OF QUICK TEST

  // INDEX BONITY
  $l1 = 0; $l2 = 0; $l3 = 0; $l4 = 0; $l5 = 0; $l6 = 0; $bonity = 0;
  $bonitycolor = "";

  $totalliabilities = ($bs2 - $bs11);
  $totalassets = $bs2;
  $sales = ($bs22 + $bs23_1 + $bs23_2 + $bs26 + $bs27);

  if($totalliabilities == 0 || $totalassets == 0 || $sales == 0) {
    $bonity = "N/A";
    $bonitycolor = "orange";
    $nacount++;
  } else {
  $l1 = ($bs30 + $bs25) / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $bs29 / $totalassets;
  $l4 = $bs29 / $sales;
  $l5 = $bs7 / $sales;
  $l6 = $sales / $totalassets;

  $bonity = (1.5 * $l1) + (0.08 * $l2) + (10 * $l3) + (5 * $l4) + (0.3 * $l5) + (0.1 * $l6);
  $bonity = number_format($bonity,2, '.', '');

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
  $complex->bonity1 = $bonity;
  $bon1 = $bonity;

  // END OF BONITY

  // INDEX BONITY YEAR 2
  $l1 = 0; $l2 = 0; $l3 = 0; $l4 = 0; $l5 = 0; $l6 = 0; $bonity = 0;
  $bonitycolor = "";

  $totalliabilities = ($cs2 - $cs11);
  $totalassets = $cs2;
  $sales = ($cs22 + $cs23_1 + $cs23_2 + $cs26 + $cs27);

  if($totalliabilities == 0 || $totalassets == 0 || $sales == 0) {
    $bonity = "N/A";
    $bonitycolor = "orange";
    $nacount2++;
  } else {
  $l1 = ($cs30 + $cs25) / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $cs29 / $totalassets;
  $l4 = $cs29 / $sales;
  $l5 = $cs7/ $sales;
  $l6 = $sales / $totalassets;

  $bonity = (1.5 * $l1) + (0.08 * $l2) + (10 * $l3) + (5 * $l4) + (0.3 * $l5) + (0.1 * $l6);
  $bonity = number_format($bonity,2, '.', '');

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
  $complex->bonity2 = $bonity;
  $bon2 = $bonity;

  // END OF BONITY


  // INDEX BONITY YEAR 1
  $l1 = 0; $l2 = 0; $l3 = 0; $l4 = 0; $l5 = 0; $l6 = 0; $bonity = 0;
  $bonitycolor = "";

  $totalliabilities = ($ds2 - $ds11);
  $totalassets = $ds2;
  $sales = ($ds22 + $ds23_1 + $ds23_2 + $ds26 + $ds27);

  if($totalliabilities == 0 || $totalassets == 0 || $sales == 0) {
    $bonity = "N/A";
    $bonitycolor = "orange";
    $nacount1++;
  } else {
  $l1 = ($ds30 + $ds25) / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $ds29 / $totalassets;
  $l4 = $ds29 / $sales;
  $l5 = $ds7/ $sales;
  $l6 = $sales / $totalassets;

  $bonity = (1.5 * $l1) + (0.08 * $l2) + (10 * $l3) + (5 * $l4) + (0.3 * $l5) + (0.1 * $l6);
  $bonity = number_format($bonity,2, '.', '');

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
  $complex->bonity3 = $bonity;
  $bon3 = $bonity;
  // END OF BONITY

  //BINKERTS Model
  $binkert = 0;
  $binkertcolor = "";
  $u1 = 0; $u2 = 0; $u3 = 0; $u4 = 0; $u5 = 0; $u6 = 0; $u7= 0; $u8 = 0;

  if($ds16 == 0 || ($cs3 + $cs4 + $cs5) == 0 || ($cs22 + $cs23_1 + $cs23_2 - $cs26) == 0 ||
     $cs24== 0 || $cs2 == 0 || $cs11 == 0 ||
     ($cs2 - $cs11) == 0 || ($cs11 + $cs14 + $cs15 + $cs18) == 0) {

     $binkert = "N/A";
     $binkertcolor = "orange";
     $nacount++;

  } else {
  $u1 = $ds6 / $ds16;
  $u2 = $cs11 / ($cs3 + $cs4 + $cs5);
  $u3 = $cs30 / ($cs22 + $cs23_1 + $cs23_2 - $cs26);
  $u4 = ($cs22 + $cs23_1 + $cs23_2 + $cs26 + $cs27) / $cs24;
  $u5 = $bs2 / $cs2 - 1;
  $u6 = $bs11 / $cs11 - 1;

  $u7 = (($bs2 - $bs11) / ($cs2 - $cs11))-1;
  $u8 = $cs30 / ($cs11 + $cs14 + $cs15 + $cs18);

  $binkert = (0.18 * $u1) + (0.147 * $u2) + (0.237 * $u3) + (0.377 * $u4) + (0.514 * $u5) + (0.505 * $u6) + (0.271 * $u7) + (0.207 * $u8);
  $binkert = number_format($binkert,2, '.', '');




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
  $complex->binkert = $binkert;


  // FINAL RESULTS

  $greenwarning = "none";
  $orangewarning = "none";
  $redwarning = "none";
  $distress = "";
  $distress_2 = "";
  $dist = "";

  $greenwarning2 = "none";
  $orangewarning2 = "none";
  $redwarning2 = "none";
  $distress2 = "";
  $distress2_2 = "";
  $dist2 = "";

  $greenwarning1 = "none";
  $orangewarning1 = "none";
  $redwarning1 = "none";
  $distress1 = "";
  $distress1_2 = "";
  $dist1 = "";

  $result1 = "";
  $result2 = "";
  $result3 = "";

    if($red <= 2) {
      $orangewarning = "block";
      $redwarning = "none";
      $result1 = "First Degree Financial Distress";
    }
    if($red > 2 && $red <= 4) {
      $dist = "the financial distress of the II. degree";
      $distress = "the financial distress of the second degree – medium risk of bankruptcy";
      $distress_2 = " (maximum 4 of the six prediction models detected risk of bankruptcy or financial distress).";
      $redwarning = "block";
      $orangewarning = "none";
      $result1 = "Second Degree Financial Distress";
    }
    if($red > 4) {
      $dist = "the financial distress of the III. degree";
      $distress = "the financial distress of the third degree – high risk of bankruptcy";
      $distress_2 = " (at least 5 of the six prediction models detected risk of bankruptcy or financial distress).";
      $redwarning = "block";
      $orangewarning = "none";
      $result1 = "Third Degree Financial Distress";
    }


  if($red == 0 && $green > 0) {
      $greenwarning = "block";
      $orangewarning = "none";
      $redwarning = "none";
      $result1 = "No Financial Distress";
  }

  if($nacount == 6) {
    $greenwarning = "none";
    $orangewarning = "none";
    $redwarning = "none";
    $result1 = "Invalid Data";
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
    $result2 = "First Degree Financial Distress";
  }
  if($red2 > 2 && $red2 <= 4) {
    $dist2 = "the financial distress of the II. degree";
    $distress2 = "the financial distress of the second degree – medium risk of bankruptcy";
    $distress2_2 = " (maximum 4 of the six prediction models detected risk of bankruptcy or financial distress).";
    $redwarning2 = "block";
    $orangewarning2 = "none";
    $result2 = "Second Degree Financial Distress";
  }
  if($red2 > 4) {
    $dist2 = "the financial distress of the III. degree";
    $distress2 = "the financial distress of the third degree – high risk of bankruptcy";
    $distress2_2 = " (at least 5 of the six prediction models detected risk of bankruptcy or financial distress).";
    $redwarning2 = "block";
    $orangewarning2 = "none";
    $result2 = "Third Degree Financial Distress";
  }


if($red2 == 0 && $green2 > 0) {
    $greenwarning2 = "block";
    $orangewarning2 = "none";
    $redwarning2 = "none";
    $result2 = "No Financial Distress";
}

if($nacount2 == 5) {
  $greenwarning2 = "none";
  $orangewarning2 = "none";
  $redwarning2 = "none";
  $result2 = "Invalid Data";
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
  $result3 = "First Degree Financial Distress";
}
if($red1 > 2 && $red1 <= 4) {
  $dist1 = "the financial distress of the II. degree";
  $distress1 = "the financial distress of the second degree – medium risk of bankruptcy";
  $distress1_2 = " (maximum 4 of the six prediction models detected risk of bankruptcy or financial distress).";
  $redwarning1 = "block";
  $orangewarning1 = "none";
  $result3 = "Second Degree Financial Distress";
}
if($red1 > 4) {
  $dist1 = "the financial distress of the III. degree";
  $distress1 = "the financial distress of the third degree – high risk of bankruptcy";
  $distress1_2 = " (at least 5 of the six prediction models detected risk of bankruptcy or financial distress).";
  $redwarning1 = "block";
  $result3 = "Third Degree Financial Distress";
}


if($red1 == 0 && $green1 > 0) {
  $greenwarning1 = "block";
  $orangewarning1 = "none";
  $redwarning1 = "none";
  $result3 = "No Financial Distress";
}

if($nacount1 == 5) {
$greenwarning1 = "none";
$orangewarning1 = "none";
$redwarning1 = "none";
$result3 = "Invalid Data";
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
  $data['distress_2'] = $distress_2;
  $data['dist'] = $dist;
  $data['nadisplay'] = $nadisplay;


  $data['greenwarning2'] = $greenwarning2;
  $data['orangewarning2'] = $orangewarning2;
  $data['redwarning2'] = $redwarning2;
  $data['distress2'] = $distress2;
  $data['distress2_2'] = $distress2_2;
  $data['dist2'] = $dist2;
  $data['nadisplay2'] = $nadisplay2;


  $data['greenwarning1'] = $greenwarning1;
  $data['orangewarning1'] = $orangewarning1;
  $data['redwarning1'] = $redwarning1;
  $data['distress1'] = $distress1;
  $data['distress1_2'] = $distress1_2;
  $data['dist1'] = $dist1;
  $data['nadisplay1'] = $nadisplay1;

  $complex->result1 = $result1;
  $complex->result2 = $result2;
  $complex->result3 = $result3;

  $ratio1 = 0; $ratio2 = 0; $ratio3 = 0;

  if($quickt1 != "N/A" && $alt1 != "N/A" && $ind1 != "N/A" && $bon1 != "N/A" && $taff1 != "N/A") {
  $ratio1 = (floatval($alt1) + floatval($ind1) + floatval((1/$quickt1)) + floatval($bon1) + floatval($complex->taff1));
  }
  if($quickt2 != "N/A" && $alt2 != "N/A" && $ind2 != "N/A" && $bon2 != "N/A" && $taff2 != "N/A") {
  $ratio2 = (floatval($alt2) + floatval($ind2) + floatval((1/$quickt2)) + floatval($bon2) + floatval($complex->taff2));
  }
  if($quickt3 != "N/A" && $alt3 != "N/A" && $ind3 != "N/A" && $bon3 != "N/A" && $taff3 != "N/A") {
  $ratio3 = (floatval($alt3) + floatval($ind3) + floatval((1/$quickt3)) + floatval($bon3) + floatval($complex->taff3));
  }

  $ratio = $ratio1 + $ratio2 + $ratio3  / 15;
  $complex->ratio = $ratio;

  $complex->save();

  // LAST ID
  $my_id = $complex->id_complex;
  // NUMBER OF ROWS
  $number_of_rows = $complex->where('country',$country)->distinct('ratio')->count('ratio');

  $position = DB::table('complex')
                   ->select('id_complex',
                    DB::raw('ratio AS rt'),
                    DB::raw('(SELECT COUNT(DISTINCT(ratio))+1 FROM complex WHERE ratio < rt AND country = "'.$country.'") AS position_firma'))
                   ->where('id_complex', $my_id)->first();

  $percentage = number_format(floatval(($position->position_firma / $number_of_rows) * 100),2);


  $affected = DB::table('complex')
              ->where('id_complex', $my_id)
              ->update(['percentage' => $percentage]);
  $data['percentage'] = $percentage;



  $classifier = new KNearestNeighbors();
  $classifier2 = new NaiveBayes();
  $classification = "";
  $classification2 = "";
  $records= Machine::all();
  $samples = array();
  $labels = array();

  $records->each(function($record) use (&$labels, &$samples)
  {
      array_push($labels,$record->result);
      if($record->altman != "N/A" && $record->in05 != "N/A" && $record->quicktest != "N/A" && $record->bonity != "N/A" && $record->taffler != "N/A" && $record->binkert != "N/A") {
      $features = array(floatval($record->altman), floatval($record->in05), floatval($record->quicktest), floatval($record->bonity), floatval($record->taffler), floatval($record->binkert));
      //$features = array($record->ratio);
      array_push($samples,$features);
      }

  });

  //$samples = [[1.38, 0.98, 11.00, 2.06, 0.50, 1.26], [-1.01, 0.49, 13.00, 4.67, 0.31, -0.71], [1.16, 0.70, 17.00, 0.53, 0.43, 7.93], [-3.98, -3.76, 16.00, -16.36, 0.18, -1.14]];
  //$labels = ['No Financial Distress', 'First Degree Financial Distress', 'Second Degree Financial Distress', 'Third Degree Financial Distress'];
  $classifier->train($samples, $labels);
  $classifier2->train($samples, $labels);
  if($quickt1 != "N/A" && $alt1 != "N/A" && $ind1 != "N/A" && $bon1 != "N/A" && $taff1 != "N/A" && $binkert != "N/A") {
  $classification = $classifier->predict([$alt1, $ind1, $quickt1, $bon1, $taff1, $binkert]);
  $classification2 = $classifier2->predict([$alt1, $ind1, $quickt1, $bon1, $taff1, $binkert]);
} else {
  $classification = "";
  $classification2 = "";
}

$value = 0;

if($classification == "First Degree Financial Distress") {
  $value = $value + 1;
}
if($classification == "Second Degree Financial Distress") {
  $value = $value + 2;
}
if($classification == "Third Degree Financial Distress") {
    $value = $value + 3;
}

if($classification2 == "First Degree Financial Distress") {
  $value = $value + 1;
}
if($classification2 == "Second Degree Financial Distress") {
  $value = $value + 2;
}
if($classification2 == "Third Degree Financial Distress") {
    $value = $value + 3;
}

if($classification == "") {
  $value = 999;
}

if($value <= 2) {
  $classification = "in the financial distress of the I. degree.";
}
if($value > 2 && $value < 5) {
  $classification = "in the financial distress of the II. degree.";
}
if($value >= 5 && $value < 999) {
  $classification = "in the financial distress of the III. degree.";
}

if($value >= 999) {
  $classification = "in a situation, where the model is not able to determine its status based on the parameters";
}


if($value < 1) {
  $classification = "out of danger.";
}


  $data['classification'] = $classification;

  // RETURN VIEW
  //return view('results',$data);
  // ALTERNATIVE
  return view('complexresults',$data);
  }

}
