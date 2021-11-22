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
use App\Jobs\SendRobot;



use Illuminate\Database\Eloquent\Model;

class RegisterController extends Controller
{

    public function sendrobot(Request $request) {

      $city = request()->get('city');
      $currentyear = request()->get('currentyear');
      $maxrecords = request()->get('maxrecords');
      $date = request()->get('date');
      if($date == null ) {
        $date = date("Y-m");
      }
      if($currentyear == "Not specified") {
        $currentyear = null;
      }

      $machine =  new Machine;
      $max = $machine->where('query',$date)->max('id_vykaz');
      if($max == null) {
        $max = 0;
      }

      SendRobot::dispatch($city, $currentyear, $maxrecords, $date, $max);
      return Redirect::to('/pro-admin/robot')->with('status', "The robot will now work in the background");


    } //function


} //class
