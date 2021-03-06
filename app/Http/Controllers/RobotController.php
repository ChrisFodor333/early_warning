<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Basic;
use App\Models\Machine;
use App\Models\Basic_old;
use App\Models\Complex;
use App\Models\Complex_old;
use Requests;
use Redirect;
use DataTables;
use Validator;
use Session;
use Auth;
use DB;
use Lava;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;// or use GuzzleHttp\Client as GuzzleClient;


use Illuminate\Database\Eloquent\Model;

class RobotController extends Controller
{

  public function sendrobot(Request $request) {
        if($request->submit == "submit")
        {
            $rules = array(
                'file' => 'required'
            );


            $validator = Validator::make(Requests::all(), $rules);


            if ($validator->fails()) {
                return Redirect::to('/pro-admin/robot')
                    ->withErrors($validator);
            }
            else {
                // SEND THE ROBOT
                 if($request->hasFile('file')){
                   $filenameWithExt = $request->file('file')->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $request->file('file')->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    // Upload Image
                    $path = $request->file('file')->storeAs('public/csvs',$fileNameToStore);


                        /*
                        $filename = $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
                        $tempPath = $file->getRealPath();
                        $fileSize = $file->getSize(); //Get size of uploaded file in bytes
                        //Check for file extension and size
                        $this->checkUploadedFileProperties($extension, $fileSize);
                        //Where uploaded file will be stored on the server
                        $location = 'uploads'; //Created an "uploads" folder for that
                        // Upload file
                        $file->move($location, $filename);
                        // In case the uploaded file path is to be stored in the database
                        $filepath = public_path($location . "/" . $filename);
                        // Reading file
                        */
                        $file = fopen("storage/app/".$path, "r");
                        $importData_arr = array(); // Read through the file and store the contents as an array
                        $i = 0;
                        //Read the contents of the uploaded file
                        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                        $num = count($filedata);
                        // Skip first row (Remove below comment if you want to skip the first row)
                        if ($i == 0) {
                        $i++;
                        continue;
                        }
                        for ($c = 0; $c < $num; $c++) {
                        $importData_arr[$i][] = $filedata[$c];
                        }
                        $i++;
                        }
                        fclose($file); //Close after reading
                        $j = 0;
                        $ico_array = array();

                        $ico = "";

                        foreach ($importData_arr as $importData) {
                        $ico = $importData[5]; //Get i??o
                        array_push($ico_array, $ico);
                        $j++;
                        }
                        // CALL CRAWLER HERE FOR THE ICO_ARRAY
                        // TUTO BUDE FOR EACH

                        $result = "";

                        foreach ($ico_array as $ico) {


                        $client = new Client();
                        $goutteClient = new Client(HttpClient::create(['timeout' => 60]));

                        $crawler = $client->request('GET', 'https://www.registeruz.sk/cruz-public/domain/accountingentity/simplesearch');

                        $form = $crawler->filter('.mx-auto > form')->form();
                        // current stage of for each

                        $crawler = $client->submit($form, ['accountingEntityName' => $ico]);
                        if ($crawler->selectLink('Detail')->count() > 0) {
                        $link = $crawler->selectLink('Detail')->link();
                        $crawler = $client->click($link);
                      } else {
                        continue;
                      }


                        //$my_href = $crawler->filter('a[class="p-3 p-lg-0 my-lg-1 row align-items-center"]')->first()->link();
                        if ($crawler->selectLink('???? POD:')->count() > 2 ) {

                        $green = 0;
                        $orange = 0;
                        $red = 0;
                        $nacount = 0;

                        //31426085
                        $my_href = $crawler->selectLink('???? POD:')->link();
                        $crawler = $client->click($my_href);
                        // GET CURRENT YEAR - col-12 d-none d-lg-block col-lg-3 col-xl-4 text-gray fs-16 font-weight-medium
                        $currentyear = 0;
                        $crawler->filter('div[class="col-12 d-none d-lg-block col-lg-3 col-xl-4 text-gray fs-16 font-weight-medium"]')->each(function ($node) use (&$currentyear) {
                          $currentyear = intval(substr($node->text(),-4));
                          //print $currentyear;
                        });
                        // TO USE THE OTHER 2
                        if ($crawler->selectLink('Strana akt??v')->count() > 0 ) {
                        $aktiva = $crawler->selectLink('Strana akt??v')->link();
                        $crawler = $client->click($aktiva);
                        // tvalue_item text-right
                        $aktiva_array = array();
                        $i = 0;
                        $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$aktiva_array) {
                          if($node->text() == "") {

                            array_push($aktiva_array, "0");
                          }
                          else {
                              array_push($aktiva_array, $node->text());
                          }
                          });

                          $sorted_aktiva = array();
                          $i = -2;
                          foreach ($aktiva_array as $aktiva) {
                            if($i % 4 == 0) {
                            array_push($sorted_aktiva,$aktiva);
                            }
                            $i++;
                          }
                          //print_r($sorted_aktiva);

                          $pasiva = $crawler->selectLink('Strana pas??v')->link();
                          $crawler = $client->click($pasiva);
                          // tvalue_item text-right
                          $pasiva_array = array();
                          $i = 0;
                          $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$pasiva_array) {
                            if($node->text() == "") {
                              array_push($pasiva_array, "0");
                            }
                            else {
                                array_push($pasiva_array, $node->text());
                            }
                            });
                            $sorted_pasiva = array();
                            $i = 0;
                            foreach ($pasiva_array as $pasiva) {
                              if($i % 2 == 0) {
                              array_push($sorted_pasiva,$pasiva);
                              }
                              $i++;
                            }

                            //print_r($sorted_pasiva);

                            $income_statement = $crawler->selectLink('V??kaz ziskov a str??t')->link();
                            $crawler = $client->click($income_statement);
                            // tvalue_item text-right
                            $income_statement_array = array();
                            $i = 0;
                            $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$income_statement_array) {
                              if($node->text() == "") {
                                array_push($income_statement_array, "0");
                              }
                              else {
                                  array_push($income_statement_array, $node->text());
                              }
                              });
                              $sorted_income_statement = array();
                              $i = 0;
                              foreach ($income_statement_array as $income_statement) {
                                if($i % 2 == 0) {
                                array_push($sorted_income_statement,$income_statement);
                                }
                                $i++;
                              }
                              //print_r($sorted_income_statement);
                              /*
                              $sorted_income_statement [0] = 1
                              $sorted_aktiva  [0] = 1
                              $sorted_pasiva [0] = 79
                              */

                              // ARRAY INDEXES TO INPUTS
                              $country = "Slovakia";

                              // DATA FROM THE FORM - CURRENT YEAR
                              /*
                              str_replace(' ', '', $sorted_aktiva[0])
                              */
                              $b2 = intval(str_replace(' ', '', $sorted_aktiva[0]));
                              $b6 = intval(str_replace(' ', '', $sorted_aktiva[32]));
                              $b7 = intval(str_replace(' ', '', $sorted_aktiva[33]));
                              $b8 = intval(str_replace(' ', '', $sorted_aktiva[52]));
                              $b9 = intval(str_replace(' ', '', $sorted_aktiva[70]));

                              $b10 = intval(str_replace(' ', '', $sorted_aktiva[73]));
                              $b11 = intval(str_replace(' ', '', $sorted_pasiva[1])); // 80
                              $b12 = intval(str_replace(' ', '', $sorted_pasiva[18]));
                              $b13 = intval(str_replace(' ', '', $sorted_pasiva[22]));
                              $b16 = intval(str_replace(' ', '', $sorted_pasiva[43]));

                              $b14 = intval(str_replace(' ', '', $sorted_pasiva[57]));
                              $b19 = intval(str_replace(' ', '', $sorted_pasiva[60]));
                              $b17 = intval(str_replace(' ', '', $sorted_pasiva[61]));
                              $b20 = intval(str_replace(' ', '', $sorted_pasiva[62]));

                              $b22 = intval(str_replace(' ', '', $sorted_income_statement[2]));

                              $b23_1 = intval(str_replace(' ', '', $sorted_income_statement[3]));
                              $b23_2 = intval(str_replace(' ', '', $sorted_income_statement[4]));
                              $b26 = intval(str_replace(' ', '', $sorted_income_statement[7]));
                              $b25 = intval(str_replace(' ', '', $sorted_income_statement[20]));

                              $b27 = intval(str_replace(' ', '', $sorted_income_statement[29]));

                              $b28 = intval(str_replace(' ', '', $sorted_income_statement[48]));
                              $b29 = intval(str_replace(' ', '', $sorted_income_statement[55]));
                              $b30 = intval(str_replace(' ', '', $sorted_income_statement[60]));


                              // LAST YEAR
                              $crawler = $client->request('GET', 'https://www.registeruz.sk/cruz-public/domain/accountingentity/simplesearch');

                              $form = $crawler->filter('.mx-auto > form')->form();
                              // current stage of for each

                              $crawler = $client->submit($form, ['accountingEntityName' => $ico]);
                              $link = $crawler->selectLink('Detail')->link();
                              $crawler = $client->click($link);






                                $my_href = $crawler->selectLink('???? POD:')->eq(1)->link();
                                $crawler = $client->click($my_href);
                                $aktiva = $crawler->selectLink('Strana akt??v')->link();
                                $crawler = $client->click($aktiva);
                                // tvalue_item text-right
                                $aktiva_array_2 = array();
                                $i = 0;
                                $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$aktiva_array_2) {
                                  if($node->text() == "") {

                                    array_push($aktiva_array_2, "0");
                                  }
                                  else {
                                      array_push($aktiva_array_2, $node->text());
                                  }
                                  });

                                  $sorted_aktiva_2 = array();
                                  $i = -2;
                                  foreach ($aktiva_array_2 as $aktiva) {
                                    if($i % 4 == 0) {
                                    array_push($sorted_aktiva_2,$aktiva);
                                    }
                                    $i++;
                                  }

                                  $pasiva = $crawler->selectLink('Strana pas??v')->link();
                                  $crawler = $client->click($pasiva);
                                  // tvalue_item text-right
                                  $pasiva_array_2 = array();
                                  $i = 0;
                                  $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$pasiva_array_2) {
                                    if($node->text() == "") {
                                      array_push($pasiva_array_2, "0");
                                    }
                                    else {
                                        array_push($pasiva_array_2, $node->text());
                                    }
                                    });
                                    $sorted_pasiva_2 = array();
                                    $i = 0;
                                    foreach ($pasiva_array_2 as $pasiva) {
                                      if($i % 2 == 0) {
                                      array_push($sorted_pasiva_2,$pasiva);
                                      }
                                      $i++;
                                    }

                                    //print_r($sorted_pasiva);

                                    $income_statement = $crawler->selectLink('V??kaz ziskov a str??t')->link();
                                    $crawler = $client->click($income_statement);
                                    // tvalue_item text-right
                                    $income_statement_array_2 = array();
                                    $i = 0;
                                    $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$income_statement_array_2) {
                                      if($node->text() == "") {
                                        array_push($income_statement_array_2, "0");
                                      }
                                      else {
                                          array_push($income_statement_array_2, $node->text());
                                      }
                                      });
                                      $sorted_income_statement_2 = array();
                                      $i = 0;
                                      foreach ($income_statement_array_2 as $income_statement) {
                                        if($i % 2 == 0) {
                                        array_push($sorted_income_statement_2,$income_statement);
                                        }
                                        $i++;
                                      }

                                      $c2 = intval(str_replace(' ', '', $sorted_aktiva_2[0]));
                                      $c3 = intval(str_replace(' ', '', $sorted_aktiva_2[2]));
                                      $c4= intval(str_replace(' ', '', $sorted_aktiva_2[10]));
                                      $c5 = intval(str_replace(' ', '', $sorted_aktiva_2[20]));
                                      $c11 = intval(str_replace(' ', '', $sorted_pasiva_2[1]));

                                      $c15 = intval(str_replace(' ', '', $sorted_pasiva_2[23]));
                                      $c18 = intval(str_replace(' ', '', $sorted_pasiva_2[42]));
                                      $c14 = intval(str_replace(' ', '', $sorted_pasiva_2[57]));
                                      $c22 = intval(str_replace(' ', '', $sorted_income_statement_2[2]));
                                      $c23_1 = intval(str_replace(' ', '', $sorted_income_statement_2[3]));


                                      $c23_2= intval(str_replace(' ', '', $sorted_income_statement_2[4]));
                                      $c26 = intval(str_replace(' ', '', $sorted_income_statement_2[7]));
                                      $c24 = intval(str_replace(' ', '', $sorted_income_statement_2[27]));
                                      $c27 = intval(str_replace(' ', '', $sorted_income_statement_2[29]));
                                      $c30 = intval(str_replace(' ', '', $sorted_income_statement_2[60]));

                              // YEAR BEFORE
                              $crawler = $client->request('GET', 'https://www.registeruz.sk/cruz-public/domain/accountingentity/simplesearch');

                              $form = $crawler->filter('.mx-auto > form')->form();
                              // current stage of for each

                              $crawler = $client->submit($form, ['accountingEntityName' => $ico]);
                              $link = $crawler->selectLink('Detail')->link();
                              $crawler = $client->click($link);


                                $my_href = $crawler->selectLink('???? POD:')->eq(2)->link();
                                $crawler = $client->click($my_href);
                                $aktiva = $crawler->selectLink('Strana akt??v')->link();
                                $crawler = $client->click($aktiva);
                                // tvalue_item text-right
                                $aktiva_array_3 = array();
                                $i = 0;
                                $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$aktiva_array_3) {
                                  if($node->text() == "") {

                                    array_push($aktiva_array_3, "0");
                                  }
                                  else {
                                      array_push($aktiva_array_3, $node->text());
                                  }
                                  });

                                  $sorted_aktiva_3 = array();
                                  $i = -2;
                                  foreach ($aktiva_array_3 as $aktiva) {
                                    if($i % 4 == 0) {
                                    array_push($sorted_aktiva_3,$aktiva);
                                    }
                                    $i++;
                                  }

                                  $pasiva = $crawler->selectLink('Strana pas??v')->link();
                                  $crawler = $client->click($pasiva);
                                  // tvalue_item text-right
                                  $pasiva_array_3 = array();
                                  $i = 0;
                                  $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$pasiva_array_3) {
                                    if($node->text() == "") {
                                      array_push($pasiva_array_3, "0");
                                    }
                                    else {
                                        array_push($pasiva_array_3, $node->text());
                                    }
                                    });
                                    $sorted_pasiva_3 = array();
                                    $i = 0;
                                    foreach ($pasiva_array_3 as $pasiva) {
                                      if($i % 2 == 0) {
                                      array_push($sorted_pasiva_3,$pasiva);
                                      }
                                      $i++;
                                    }

                                    //print_r($sorted_pasiva);

                                    /*$income_statement = $crawler->selectLink('V??kaz ziskov a str??t')->link();
                                    $crawler = $client->click($income_statement);
                                    // tvalue_item text-right
                                    $income_statement_array_3 = array();
                                    $i = 0;
                                    $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$income_statement_array_3) {
                                      if($node->text() == "") {
                                        array_push($income_statement_array_3, "0");
                                      }
                                      else {
                                        array_push($income_statement_array_3, $node->text());
                                      }
                                      });
                                      $sorted_income_statement_3 = array();
                                      $i = 0;
                                      foreach ($income_statement_array_3 as $income_statement) {
                                        if($i % 2 == 0) {
                                        array_push($sorted_income_statement_3,$income_statement);
                                        }
                                        $i++;
                                      } */

                                      $d6 = intval(str_replace(' ', '', $sorted_aktiva_3[32]));
                                      $d16 = intval(str_replace(' ', '', $sorted_pasiva_3[43]));

                                      } else {
                                        continue;
                                      }
                                      //print $sorted_aktiva_2[32] . $sorted_pasiva_2[43];


      /* THE MODEL */
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

      // FINAL RESULTS

      $result = "";

        if($red != 0 && $red <= 2) {
          $result = "First Degree Financial Distress";
        }
        if($red > 2 && $red <= 4) {
          $result = "Second Degree Financial Distress";
        }
        if($red > 4) {
          $result = "Third Degree Financial Distress";
        }


      if($red == 0 && $green > 0) {
          $result = "No Financial Distress";
      }

      if($nacount == 6) {
        $result = "Invalid Data";
      }


      // ADD TO DATABASE
      if(strlen($currentyear > 1)) {
      $basic =  new Basic;

      $basic->country = $country;
      $basic->current_year = $currentyear;
      $basic->altman= $altman;
      $basic->in05 = $in05;
      $basic->quicktest = $quicktest;
      $basic->bonity = $bonity;
      $basic->taffler = $taffler;
      $basic->binkert = $binkert;
      $basic->result = $result;

      if($quicktest != "N/A") {
      $ratio = (floatval($altman) + floatval($in05) + floatval((1/$quicktest)) + floatval($bonity) + floatval($taffler)) / 5;
      $basic->ratio = $ratio;
      $basic->save();

      $my_id = $basic->id_basic;

      $number_of_rows = $basic->where('country',$country)->distinct('ratio')->count('ratio');

      $position = DB::table('basic')
                       ->select('id_basic',
                        DB::raw('ratio AS rt'),
                        DB::raw('(SELECT COUNT(DISTINCT(ratio))+1 FROM basic WHERE ratio < rt AND country = "'.$country.'") AS position_firma'))
                       ->where('id_basic', $my_id)->first();

      $percentage = number_format(floatval(($position->position_firma / $number_of_rows) * 100),2);


      $affected = DB::table('basic')
                  ->where('id_basic', $my_id)
                  ->update(['percentage' => $percentage]);
                }
              }
                  } else {
                        continue;
                        //print "Mothafucka";
                        }

                     } // FOR EACH
                     return Redirect::to('/pro-admin/robot')->with('status', "The robot completed it's process");

                 } else {
                   return Redirect::to('/pro-admin/robot')
                       ->with('status',  "Oops! Something went wrong");
                 }

               }


            } // IF SUBMITTED
          } // SEND ROBOT FUNCTION
} // class
