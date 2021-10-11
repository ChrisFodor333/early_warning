<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Basic;
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


use Illuminate\Database\Eloquent\Model;

class HistoryController extends Controller
{




  public function overviewhistoricalcomplex($id) {
    if(session()->has('admin')) {
        if ($id == null) {
            return abort(404);
        }
        $complex = Complex_old::find($id);

        $altman = $complex->altman1;
        $in05 =   $complex->in051;
        $quicktest = $complex->quicktest1;
        $bonity = $complex->bonity1;
        $taffler = $complex->taffler1;

        $binkert = $complex->binkert;
        $result = $complex->result1;

        $currentyear = $complex->current_year;
        $data['currentyear'] = $currentyear;
        $altman2 = $complex->altman2;
        $in052 =   $complex->in052;
        $quicktest2 = $complex->quicktest2;
        $bonity2 = $complex->bonity2;
        $taffler2 = $complex->taffler2;
        $result2 = $complex->result2;

        $altman1 = $complex->altman3;
        $in051 =   $complex->in053;
        $quicktest1 = $complex->quicktest3;
        $bonity1 = $complex->bonity3;
        $taffler1 = $complex->taffler3;
        $result1 = $complex->result3;

        $data['altman'] = $altman;
        $data['in05'] = $in05;
        $data['quicktest'] = $quicktest;
        $data['bonity'] = $bonity;
        $data['taffler'] = $taffler;
        $data['binkert'] = $binkert;
        $data['result'] = $result;

        $data['altman2'] = $altman2;
        $data['in052'] = $in052;
        $data['quicktest2'] = $quicktest2;
        $data['bonity2'] = $bonity2;
        $data['taffler2'] = $taffler2;
        $data['result2'] = $result2;

        $data['altman1'] = $altman1;
        $data['in051'] = $in051;
        $data['quicktest1'] = $quicktest1;
        $data['bonity1'] = $bonity1;
        $data['taffler1'] = $taffler1;
        $data['result1'] = $result1;

        $altmancolor = "";
        $in05color = "";
        $tafflercolor = "";
        $quicktestcolor = "";
        $bonitycolor = "";
        $binkertcolor = "";

        $altmancolor2 = "";
        $in05color2 = "";
        $tafflercolor2 = "";
        $quicktestcolor2 = "";
        $bonitycolor2 = "";
        $binkertcolor2 = "";

        $altmancolor1 = "";
        $in05color1 = "";
        $tafflercolor1 = "";
        $quicktestcolor1 = "";
        $bonitycolor1 = "";
        $binkertcolor1 = "";

        $nacount = 0; $nacount2 = 0; $nacount1 = 0;
        $red = 0; $orange = 0; $green = 0;
        $red2 = 0; $orange2 = 0; $green2 = 0;
        $red1 = 0; $orange1 = 0; $green1 = 0;

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
        if($altman == "N/A") {
            $altmancolor = "orange";
            $nacount++;
          }


        if($altman2 < 1.2) {
            $altmancolor2 = "red";
            $red2++;
          }
        if($altman2 > 2.9) {
            $altmancolor2 = "#00c373";
            $green2++;
          }
        if($altman2 >= 1.2 && $altman2 <= 2.9) {
            $altmancolor2 = "orange";
            $orange2++;
          }
        if($altman2 == "N/A") {
            $altmancolor2 = "orange";
            $nacount2++;
          }


        if($altman1 < 1.2) {
            $altmancolor1 = "red";
            $red1++;
          }
        if($altman1 > 2.9) {
            $altmancolor1 = "#00c373";
            $green1++;
          }
        if($altman1 >= 1.2 && $altman1 <= 2.9) {
            $altmancolor1 = "orange";
            $orange1++;
          }
        if($altman1 == "N/A") {
            $altmancolor1 = "orange";
            $nacount1++;
          }


            // NOT FINISHED
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
            if($in05 == "N/A") {
              $in05color = "orange";
              $nacount++;
            }



              if($in052 < 0.9) {
                      $in05color2 = "red";
                      $red2++;
                    }
              if($in05color2 > 1.6) {
                      $in05color2 = "#00c373";
                      $green2++;
                    }
              if($in052 >= 0.9 && $in052 <= 1.6) {
                      $in05color2 = "orange";
                      $orange2++;
                    }
              if($in052 == "N/A") {
                $in05color2 = "orange";
                $nacount2++;
                  }


                if($in051 < 0.9) {
                        $in05color1 = "red";
                        $red1++;
                      }
                if($in051 > 1.6) {
                        $in05color1 = "#00c373";
                        $green1++;
                      }
                if($in051 >= 0.9 && $in051 <= 1.6) {
                        $in05color1 = "orange";
                        $orange1++;
                      }
                if($in051 == "N/A") {
                  $in05color1 = "orange";
                  $nacount1++;
                }


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

            if($taffler == "N/A") {
                $tafflercolor = "orange";
                $nacount++;
              }


                if($taffler2 < 0.2) {
                    $tafflercolor2 = "red";
                    $red2++;
                  }
                if($taffler2 > 0.3) {
                    $tafflercolor2 = "#00c373";
                    $green2++;
                  }
                if($taffler2 >= 0.2 && $taffler2 <= 0.3) {
                    $tafflercolor2 = "orange";
                    $orange2++;
                  }

                if($taffler2 == "N/A") {
                    $tafflercolor2 = "orange";
                    $nacount2++;
                  }

                    if($taffler1 < 0.2) {
                        $tafflercolor1 = "red";
                        $red1++;
                      }
                    if($taffler1 > 0.3) {
                        $tafflercolor1 = "#00c373";
                        $green1++;
                      }
                    if($taffler1 >= 0.2 && $taffler1 <= 0.3) {
                        $tafflercolor1 = "orange";
                        $orange1++;
                      }
                    if($taffler1 == "N/A") {
                        $tafflercolor1 = "orange";
                        $nacount1++;
                      }


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

            if($quicktest == "N/A") {
                $quicktestcolor = "orange";
                $nacount++;
              }


            if($quicktest2 < 9.0) {
                $quicktestcolor2 = "#00c373";
                $green2++;
              }
            if($quicktest2 > 15.0) {
                $quicktestcolor2 = "red";
                $red2++;
              }
            if($quicktest2 >= 9.0 && $quicktest2 <= 15.0) {
                $quicktestcolor2 = "orange";
                $orange2++;
              }

            if($quicktest2 == "N/A") {
                $quicktestcolor2 = "orange";
                $nacount2++;
              }


            if($quicktest1 < 9.0) {
                $quicktestcolor1 = "#00c373";
                $green1++;
              }
            if($quicktest1 > 15.0) {
                $quicktestcolor1 = "red";
                $red1++;
              }
            if($quicktest1 >= 9.0 && $quicktest1 <= 15.0) {
                $quicktestcolor1 = "orange";
                $orange1++;
              }

            if($quicktest1 == "N/A") {
                $quicktestcolor1 = "orange";
                $nacount1++;
              }


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

            if($bonity2 == "N/A") {
              $bonitycolor2 = "orange";
              $nacount2++;
            }

              if($bonity2 < -1.0) {
                  $bonitycolor2 = "red";
                  $red2++;
                }
              if($bonity2 > 1.0) {
                  $bonitycolor2 = "#00c373";
                  $green2++;
                }
              if($bonity2 >= -1.0 && $bonity2 <= 1.0) {
                  $bonitycolor2 = "orange";
                  $orange2++;
                }

              if($bonity2 == "N/A") {
                $bonitycolor2 = "orange";
                $nacount2++;
              }

                if($bonity1 < -1.0) {
                    $bonitycolor1 = "red";
                    $red1++;
                  }
                if($bonity1 > 1.0) {
                    $bonitycolor1 = "#00c373";
                    $green1++;
                  }
                if($bonity1 >= -1.0 && $bonity1 <= 1.0) {
                    $bonitycolor1 = "orange";
                    $orange1++;
                  }

                if($bonity1 == "N/A") {
                  $bonitycolor1 = "orange";
                    $nacount1++;
                  }


              if($binkert > 4.35) {
                $binkertcolor = "#00c373";
                $green++;
              }

              if($binkert < -4.35) {
                $binkertcolor = "red";
                $red++;
              }

              if($binkert < 4.35 && $binkert > -4.35) {
                $binkertcolor = "orange";
                $orange++;
              }

              if($binkert == "N/A") {
                  $binkertcolor = "orange";
                  $nacount++;
              }


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


                $data['altmancolor'] = $altmancolor;
                $data['altmancolor2'] = $altmancolor2;
                $data['altmancolor1'] = $altmancolor1;

                $data['in05color'] = $in05color;
                $data['in05color2'] = $in05color2;
                $data['in05color1'] = $in05color1;

                $data['tafflercolor'] = $tafflercolor;
                $data['tafflercolor2'] = $tafflercolor2;
                $data['tafflercolor1'] = $tafflercolor1;


                $data['bonitycolor'] = $bonitycolor;
                $data['bonitycolor2'] = $bonitycolor2;
                $data['bonitycolor1'] = $bonitycolor1;

                $data['quicktestcolor'] = $quicktestcolor;
                $data['quicktestcolor2'] = $quicktestcolor2;
                $data['quicktestcolor1'] = $quicktestcolor1;

                $data['binkertcolor'] = $binkertcolor;

        return view('admin/overviewcomplex',$data);
    } else {
        return view('admin/login');
    }
  }


public function deletehistorical($id) {

      if(session()->has('admin')) {
          if ($id == null) {
              return abort(404);
          }
          $user = Basic_old::find($id);

          $user->delete();
          return redirect('/pro-admin/historicaltable');
      } else {
          return view('admin/login');
      }
  }

  public function deletehistoricalcomplex($id) {

      if(session()->has('admin')) {
          if ($id == null) {
              return abort(404);
          }
          $user = Complex_old::find($id);

          $user->delete();
          return redirect('/pro-admin/historicaltablecomplex');
      } else {
          return view('admin/login');
      }
  }

public function overviewhistorical($id) {
  if(session()->has('admin')) {
      if ($id == null) {
          return abort(404);
      }

     $basic = Basic_old::find($id);
     $altman = $basic->altman;
     $in05 =   $basic->in05;
     $quicktest = $basic->quicktest;
     $bonity = $basic->bonity;
     $taffler = $basic->taffler;
     $binkert = $basic->binkert;
     $result = $basic->result;

     $year = $basic->current_year;
     $data['currentyear'] = $year;


     $nacount = 0;

     $data['altman'] = $altman;
     $data['in05'] = $in05;
     $data['quicktest'] = $quicktest;
     $data['bonity'] = $bonity;
     $data['taffler'] = $taffler;
     $data['binkert'] = $binkert;
     $data['result'] = $result;

     $altmancolor = "";
     $in05color = "";
     $tafflercolor = "";
     $quicktestcolor = "";
     $bonitycolor = "";
     $binkertcolor = "";


     $red = 0; $orange = 0; $green = 0;

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
     if($altman == "N/A") {
         $altmancolor = "orange";
         $nacount++;
       }

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
     if($in05 == "N/A") {
       $in05color = "orange";
       $nacount++;
     }


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

     if($taffler == "N/A") {
         $tafflercolor = "orange";
         $nacount++;
       }


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

     if($quicktest == "N/A") {
         $quicktestcolor = "orange";
         $nacount++;
       }


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

     if($bonity == "N/A") {
       $bonitycolor = "orange";
       $nacount++;
          }

       if($binkert > 4.35) {
         $binkertcolor = "#00c373";
         $green++;
       }

       if($binkert < -4.35) {
         $binkertcolor = "red";
         $red++;
       }

       if($binkert < 4.35 && $binkert > -4.35) {
         $binkertcolor = "orange";
         $orange++;
       }

       if($binkert == "N/A") {
           $binkertcolor = "orange";
           $nacount++;
         }


       $data['altmancolor'] = $altmancolor;
       $data['in05color'] = $in05color;
       $data['tafflercolor'] = $tafflercolor;
       $data['quicktestcolor'] = $quicktestcolor;
       $data['bonitycolor'] = $bonitycolor;
       $data['binkertcolor'] = $binkertcolor;


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


       return view('admin/overview',$data);


  } //session
   else {
      return view('admin/login');
  }
}

}
