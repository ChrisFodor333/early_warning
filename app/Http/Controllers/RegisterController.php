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



use Illuminate\Database\Eloquent\Model;

class RegisterController extends Controller
{

    public function sendrobot(Request $request) {

      $url = file_get_contents('https://www.registeruz.sk/cruz-public/api/uctovne-vykazy?zmenene-od=2020-01-01&max-zaznamov=10000');
      $obj = json_decode($url);
      $myids = $obj->id;
      $testid = "6881167";


      $url2 = file_get_contents('https://www.registeruz.sk/cruz-public/api/uctovny-vykaz?id=' . $testid);
      $json = json_decode($url2);

      $aktiva_array = null;
      $pasiva_array = null;
      $income_statement_array = null;
      $mesto = null;
      $skNace = null;
      $currentyear = null;

      $sorted_aktiva = array();
      $sorted_pasiva = array();
      $sorted_income_statement = array();

      $lastyear_aktiva = array();
      $lastyear_pasiva = array();
      $lastyear_income = array();



      if($json->obsah->tabulky[0]->data ?? null) {
      $aktiva_array = $json->obsah->tabulky[0]->data;
      $i = -2;
      foreach ($aktiva_array as $aktiva) {
        if($i % 4 == 0) {
        array_push($sorted_aktiva,$aktiva);
        }
        $i++;
      }

      $i= 1;
      foreach ($aktiva_array as $aktiva) {
        if($i % 4 == 0) {
        array_push($lastyear_aktiva,$aktiva);
        }
        $i++;
      }
      }




      if($json->obsah->tabulky[1]->data ?? null) {
      $pasiva_array = $json->obsah->tabulky[1]->data;

      $i = 0;
      foreach ($pasiva_array as $pasiva) {
        if($i % 2 == 0) {
        array_push($sorted_pasiva,$pasiva);
        }
        $i++;
      }

      $i = 1;
      foreach ($pasiva_array as $pasiva) {
        if($i % 2 == 0) {
        array_push($lastyear_pasiva,$pasiva);
        }
        $i++;
      }
      }





      if($json->obsah->tabulky[2]->data ?? null) {
      $income_statement_array = $json->obsah->tabulky[2]->data;

      $i = 0;
      foreach ($income_statement_array as $income_statement) {
        if($i % 2 == 0) {
        array_push($sorted_income_statement,$income_statement);
        }
        $i++;
      }

      $i = 1;
      foreach ($income_statement_array as $income_statement) {
        if($i % 2 == 0) {
        array_push($lastyear_income,$income_statement);
        }
        $i++;
      }

      }
      if($json->obsah->titulnaStrana->adresa->mesto ?? null) {
      $mesto = $json->obsah->titulnaStrana->adresa->mesto;
      }

      if($json->obsah->titulnaStrana->skNace ?? null) {
      $skNace = $json->obsah->titulnaStrana->skNace;
      }

      if($json->obsah->titulnaStrana->obdobieOd ?? null) {
      $currentyear = substr($json->obsah->titulnaStrana->obdobieOd,0,4);
      }

      if($aktiva_array != null && $pasiva_array != null && $income_statement_array != null) {
        
      }

    }


}
