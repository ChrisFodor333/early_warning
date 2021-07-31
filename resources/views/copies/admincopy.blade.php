<?php 
$basic = Basic::find($id);
$altman = $basic->altman;
$in05 =   $basic->in05;
$quicktest = $basic->quicktest;
$bonity = $basic->bonity;
$taffler = $basic->taffler;
$binkert = $basic->binkert;
$result = $basic->result;

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
if($altman == "n/a")
    $altmancolor = "orange";

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
if($in05 == "n/a")
  $in05color = "orange";


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

if($taffler == "n/a")
    $tafflercolor = "orange";


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

if($quicktest == "n/a")
    $quicktestcolor = "orange";


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

if($bonity == "n/a")
  $bonitycolor = "orange";

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

  if($binkert == "n/a")
      $binkertcolor = "orange";


  $data['altmancolor'] = $altmancolor;
  $data['in05color'] = $in05color;
  $data['tafflercolor'] = $tafflercolor;
  $data['quicktestcolor'] = $quicktestcolor;
  $data['bonitycolor'] = $bonitycolor;
  $data['binkertcolor'] = $binkertcolor;


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


  return view('admin/overview',$data);
