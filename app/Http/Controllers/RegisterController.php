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
      $testid = "4546241";


      $url2 = file_get_contents('https://www.registeruz.sk/cruz-public/api/uctovny-vykaz?id=' . $testid);
      $json = json_decode($url2);

      $aktiva = null;
      $pasiva = null;
      $income = null;
      $mesto = null;
      $skNace = null;
      $currentyear = null;


      if($json->obsah->tabulky[0]->data ?? null) {
      $aktiva = $json->obsah->tabulky[0]->data;
      }

      if($json->obsah->tabulky[1]->data ?? null) {
      $pasiva = $json->obsah->tabulky[1]->data;
      }

      if($json->obsah->tabulky[2]->data ?? null) {
      $income = $json->obsah->tabulky[2]->data;
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

      print_r($mesto);




      //$myarray = json_decode($url2, true);
      //print_r($myarray);

    }


}
