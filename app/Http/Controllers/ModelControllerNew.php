<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Requests;
use App\Models\Basic;
use App\Models\Complex;
use DB;

class ModelControllerNew extends Controller
{

  public function calculate(Request $request) {


  $green = 0;
  $orange = 0;
  $red = 0;
  $nacount = 0;

  //COMPANY DETAILS
  //$company = request()->get('companyname');
  $country = request()->get('country');
  $data['country'] =  $country;

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

  $currentyear = request()->get('currentyear');
  $data['currentyear'] =  $currentyear;



  // DATA FROM THE FORM - CURRENT YEAR
  $b2 = request()->get('total-assets');
  $b25 = request()->get('amortization');
  $b29 = request()->get('profit-loss-before-tax');
  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $b29 = request()->get('profit-loss-before-tax') + request()->get('profit-loss-before-taxRB');
  }
  $b14 = request()->get('provisions');

  $b6 = request()->get('current-assets');

  $b22 = request()->get('revenue-merch');
  $b23_1 = request()->get('revenue-p');
  $b23_2 = request()->get('revenue-s');
  if($country == "Hungary" || $country == "Croatia") {
    $b23_1 = 0;
    $b23_2 = 0;
  }

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $b23_2 = 0;
  }


  $b30 = request()->get('profit-loss-after-tax');
  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $b30 = request()->get('profit-loss-after-tax') + request()->get('profit-loss-after-taxRB');
  }
  $b16 = request()->get('current-liabilities');

  $b7 = request()->get('inventory');

  $b11 = request()->get('equity');
  $b20 = request()->get('ad');
  if($country == "Bosnia and Herzegovina") {
  $b20 = request()->get('ad') + request()->get('adB');
  }

  $b9 = request()->get('financial-accounts');
  $b27 = request()->get('securities-shares');
  $b12 = request()->get('net-profit-loss');
  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $b12 = request()->get('net-profit-loss') + request()->get('net-profit-lossRB');
  }

  $b8 = request()->get('current-receivables');
  $b17 = request()->get('financial-assistance');
  $b19 = request()->get('current-bank-loans');
  $b26 = request()->get('ncia');
  $b10 = request()->get('ad-total');
  if($country == "Romania") {
    $b10 = request()->get('ad-total') + request()->get('ad-totalR');
  }

  $b28 = request()->get('interest-expense');
  $b13 = request()->get('liabilities');

  // LAST YEAR
  $c4= request()->get('ppe2');
  $c22= request()->get('revenue-merch2');
  $c18= request()->get('long-term-bank-loans2');
  $c23_1= request()->get('revenue-p2');
  $c23_2= request()->get('revenue-s2');

  if($country == "Hungary" || $country == "Croatia") {
    $c23_1 = 0;
    $c23_2 = 0;
  }

  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
    $c23_2 = 0;
  }

  $c26= request()->get('ncia2');

  $c27 = request()->get('securities-shares2');
  $c5 = request()->get('non-current-assets2');
  $c30 = request()->get('profit-loss-after-tax2');
  if($country == "Romania" || $country == "Bosnia and Herzegovina") {
      $c30 = request()->get('profit-loss-after-tax2') + request()->get('profit-loss-after-tax2RB');
  }
  $c11 = request()->get('equity2');
  $c2 = request()->get('totalassets2');
  $c14 = request()->get('provisions2');
  $c24 = request()->get('addedvalue2');
  $c3 = request()->get('noncurrentassets2');
  $c15 = request()->get('noncurrentliabilities2');

  // THE YEAR BEFORE
  $d6 = request()->get('assets1');
  $d16 = request()->get('liabilities1');


  $x1 = 0; $x2 = 0; $x3 = 0; $x4 = 0; $x5 = 0; $altman = 0;
  $altmancolor = "";

  // ALTMAN
  $totalassets = $b2;
  $totalliabilities = $b13 - $b14;
  if($totalassets == 0 || $totalliabilities == 0) {
    $altman = "N/A";
    $altmancolor = "orange";
    $nacount++;
  } else {

  // X1 = 3774785 + 26152 - 3885356 - 726782 / 43183601  = -811,201  => -0.0187849318077944
  // X2 = 323728 / 43183601 = 0.0074965494424608
  $x1 = ($b7 + $b8 + $b9 + $b10 - $b16 - $b17 - $b19 - $b20) / $b2;
  $x2 = $b12 / $totalassets;
  $x3 = ($b29 + $b28) / $totalassets;
  $x4 = $b11 / ($b13 - $b14);
  $x5 = ($b22 + $b23_1 + $b23_2 + $b26 + $b27) / $totalassets;




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

  // IN05
  $y1 = 0; $y2 = 0; $y3 = 0; $y4 = 0; $y5 = 0; $in05 = 0;
  $in05color = "";
  $totalassets = $b2;
  $totalliabilities = $b13 + $b20;

  if($totalassets == 0 || $totalliabilities == 0  || $b16== 0) {
    $in05color = "orange";
    $in05 = "N/A";
    $nacount++;
  }
  else {
  $y1 = $totalassets / ($b13 + $b20);
  if($b28 == 0) {
    $y2 = 0;
  } else {
      $y2 = ($b29 + $b28) / $b28;
  }
  $y3 = ($b29 + $b28) / $totalassets;
  $y4 = ($b22 + $b23_1 + $b23_2 - $b27 + $b26) / $totalassets;
  $y5 = $b6 / ($b16 + $b19);

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

  // TAFFLER
  $t1 = 0; $t2 = 0; $t3 = 0; $t4 = 0; $taffler = 0;
  $tafflercolor = "";

  $totalassets = $b2;
  $totalliabilities = $b13;

  if($totalassets == 0 || $totalliabilities == 0) {
    $taffler = "N/A";
    $tafflercolor = "orange";
    $nacount++;
  } else {
  if($b16 == 0) {
    $t1 = 0;
  }  else {
      $t1 = $b29 / $b16;
  }

  $t2 = $b6 / $b13;
  $t3 = $b16 / $totalassets;
  $t4 = ($b22 + + $b23_1 + $b23_2) / $totalassets;

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

  // QUICK TEST
  $bq1 = 0; $bq2 = 0; $bq3 = 0; $bq4 = 0; $quicktest = 0;
  $quicktestcolor = "";

  $cashflow = ($b30 + $b25);
  $sales = $b22 + $b23_1 + $b23_2;


  if($totalassets == 0 || $cashflow == 0 || $sales == 0) {
      $quicktest = "N/A";
      $quicktestcolor = "orange";
      $nacount++;
  }
   else {
  $bq1 = ($b11 / $totalassets)*100;
  $bq2 = ($b13 - $b9) / $cashflow;
  $bq3 = ($cashflow / $sales)*100;
  $bq4 = (($b29 + $b28) / $totalassets)*100;


  $b1score = 0;
  $b2score = 0;
  $b3score = 0;
  $b4score = 0;

  if($bq1 < 0) {
    $b1score = 5;
  }
  if($bq1 >= 0 && $bq1 < 10) {
    $b1score = 4;
  }
  if($bq1 >= 10 && $bq1 < 20) {
    $b1score = 3;
  }
  if($bq1 >= 20 && $bq1 < 30) {
    $b1score = 2;
  }
  if($bq1 >= 30) {
    $b1score = 1;
  }

  if($bq2 < 3) {
    $b2score = 1;
  }
  if($bq2 >= 3 && $bq2 < 5) {
    $b2score = 2;
  }
  if($bq2 >= 5 && $bq2 < 12) {
    $b2score = 3;
  }
  if($bq2 >= 12 && $bq2 < 30) {
    $b2score = 4;
  }
  if($bq2 >= 30) {
    $b2score = 5;
  }


  if($bq3 < 0) {
    $b3score = 5;
  }
  if($bq3 >= 0 && $bq3 < 5) {
    $b3score = 4;
  }
  if($bq3 >= 5 && $bq3 < 8) {
    $bq3score = 3;
  }
  if($bq3 >= 8 && $bq3 < 10) {
    $b3score = 2;
  }
  if($bq3 >= 10) {
    $b3score = 1;
  }

  if($bq4 < 0) {
    $b4score = 5;
  }
  if($bq4 >= 0 && $bq4 < 8) {
    $b4score = 4;
  }
  if($bq4 >= 8 && $bq4 < 12) {
    $b4score = 3;
  }
  if($bq4 >= 12 && $bq4 < 15) {
    $bq4score = 2;
  }
  if($bq4 >= 15) {
    $b4score = 1;
  }
  $data['b2'] =  $bq2;
  $data['b3'] =  $bq3;
  $data['b4'] =  $bq4;
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

  // INDEX BONITY
  $l1 = 0; $l2 = 0; $l3 = 0; $l4 = 0; $l5 = 0; $l6 = 0; $bonity = 0;
  $bonitycolor = "";

  $totalliabilities = ($b2 - $b11);
  $totalassets = $b2;
  $sales = ($b22 + $b23_2 + $b23_1 + $b26 + $b27);

  if($totalliabilities == 0 || $totalassets == 0 || $sales == 0) {
    $bonity = "N/A";
    $bonitycolor = "orange";
    $nacount++;
  } else {
  $l1 = ($b30 + $b25) / $totalliabilities;
  $l2 = $totalassets / $totalliabilities;
  $l3 = $b29 / $totalassets;
  $l4 = $b29 / $sales;
  $l5 = $b7 / $sales;
  $l6 = ($b22 + $b23_1 + $b23_2 + $b26 + $b27) / $totalassets;

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

  //BINKERTS Model
  $binkert = 0;
  $binkertcolor = "";
  $u1 = 0; $u2 = 0; $u3 = 0; $u4 = 0; $u5 = 0; $u6 = 0; $u7= 0; $u8 = 0;




  if($d16 == 0 || ($c3 + $c4 + $c5) == 0 || ($c22 + ($c23_1  + $c23_2 - $c26)) == 0 ||
     $c24== 0 || $c2 == 0 || $c11 == 0 ||
     ($c2 - $c11) == 0 || ($c11 + $c14 + $c15 + $c18) == 0) {

     $binkert = "N/A";
     $binkertcolor = "orange";
     $nacount++;

  } else {
  $u1 = $d6 / $d16;
  $u2 = $c11 / ($c3 + $c4 + $c5);
  $u3 = $c30 / ($c22 + ($c23_1 + $c23_2 - $c26));
  $u4 = ($c22 + $c23_1 + $c23_2 + $c26 + $c27) / $c24;
  $u5 = $b2 / $c2 - 1;
  $u6 = $b11 / $c11 - 1;

  $u7 = (($b2 - $b11) / ($c2 - $c11))-1;
  $u8 = $c30 / ($c11 + $c14 + $c15 + $c18);

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


  // FINAL RESULTS

  $greenwarning = "none";
  $orangewarning = "none";
  $redwarning = "none";
  $dist = "";
  $distress = "";
  $distress2 = "";

  $result = "";

    if($red != 0 && $red <= 2) {
      $orangewarning = "block";
      $redwarning = "none";
      $result = "First Degree Financial Distress";
    }
    if($red > 2 && $red <= 4) {
      $dist = "the financial distress of the II. degree";
      $distress = "the financial distress of the second degree – medium risk of bankruptcy";
      $distress2 = " (maximum 4 of the six prediction models detected risk of bankruptcy or financial distress).";
      $redwarning = "block";
      $orangewarning = "none";
      $result = "Second Degree Financial Distress";
    }
    if($red > 4) {
      $dist = "the financial distress of the III. degree";
      $distress = "the financial distress of the third degree – high risk of bankruptcy";
      $distress2 = " (at least 5 of the six prediction models detected risk of bankruptcy or financial distress).";
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
  $data['distress2'] = $distress2;
  $data['dist'] = $dist;
  $data['nadisplay'] = $nadisplay;

  // ADD TO DATABASE
  $basic =  new Basic;

  //$basic->company_name = $company;
  $basic->country = $country;
  $basic->current_year = $currentyear;
  $basic->altman= $altman;
  $basic->in05 = $in05;
  $basic->quicktest = $quicktest;
  $basic->bonity = $bonity;
  $basic->taffler = $taffler;
  $basic->binkert = $binkert;
  $basic->result = $result;


  $ratio = 0;
  if($quicktest != "N/A" && $altman != "N/A" && $in05 != "N/A" && $bonity != "N/A" && $taffler != "N/A") {
  $ratio = (floatval($altman) + floatval($in05) + floatval((1/$quicktest)) + floatval($bonity) + floatval($taffler)) / 5;
  }
  $basic->ratio = $ratio;
  $basic->save();


  // LAST ID
  $my_id = $basic->id_basic;
  // NUMBER OF ROWS
  //$number_of_rows = $basic->count();
  $number_of_rows = $basic->where('country',$country)->distinct('ratio')->count('ratio');
  /*
  SELECT id_basic, percentage as pe,
         (SELECT COUNT(*)+1
            FROM basic WHERE percentage < pe) AS position_firma
    FROM basic WHERE id_basic = $myid

  */
  $position = DB::table('basic')
                   ->select('id_basic',
                    DB::raw('ratio AS rt'),
                    DB::raw('(SELECT COUNT(DISTINCT(ratio))+1 FROM basic WHERE ratio < rt AND country = "'.$country.'") AS position_firma'))
                   ->where('id_basic', $my_id)->first();

  $percentage = number_format(floatval(($position->position_firma / $number_of_rows) * 100),2);


  $affected = DB::table('basic')
              ->where('id_basic', $my_id)
              ->update(['percentage' => $percentage]);
  $data['percentage'] = $percentage;



  // RETURN VIEW
  //return view('results',$data);
  // ALTERNATIVE
  return view('results2',$data);
  }

}
