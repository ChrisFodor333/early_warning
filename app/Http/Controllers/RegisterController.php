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

      SendRobot::dispatch();
      return Redirect::to('/pro-admin/robot')->with('status', "The robot will now work in the background");


    } //function


} //class
