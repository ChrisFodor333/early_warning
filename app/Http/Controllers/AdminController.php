<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Requests;
use Redirect;
use DataTables;
use Validator;
use Session;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


use Illuminate\Database\Eloquent\Model;

class AdminController extends Controller
{

      public function dashboard(Request $request) {

            if(session()->has('admin')) {
              return view('admin/adminpage');
            } else {
              return view('admin/login');
            }
      }

      public function edit($id) {
        if(session()->has('admin')) {
            $user = User::select('*')->where("id_user", "=", $id)->get()->first();
            $data['users'] = $user;
            return view('admin/user_edit', $data);
        } else {
            return view('admin/login');
        }
    }

    public function edit_validator(Request $request) {
        if($request->submit == "submit")
        {
            $user = User::where("id_user","=",$request->input('id'))->first();
            $user->update(["first_name" => $request->input('first_name'),
                "last_name" => $request->input('last_name'),
                "email" => $request->input('email')]);
            return redirect()-> action('App\\Http\\Controllers\AdminController@user_index');

        } else {
            return redirect()-> action('App\\Http\\Controllers\AdminController@user_index');
        }
      }



    public function delete($id) {

        if(session()->has('admin')) {
            if ($id == null) {
                return abort(404);
            }
            $user = User::find($id);

            $user->delete();
            return redirect('/pro-admin/users');
        } else {
            return view('admin/login');
        }
    }

      public function showaddAdmin() {
        if(session()->has('admin')) {
            return view('admin/register_admin');
        } else {
            return view('admin/login');
        }
      }


      public function usertable()
        {

            $users = User::select('*');
            return Datatables::of($users)
                ->addColumn('username', function ($row) {
                    return $row->first_name." ".$row->last_name;
                })
                ->addColumn('email', function ($row) {
                    return $row->email;
                })
                ->addColumn('edit', function($row) {
                    return '<a  href="'. url('/pro-admin/'). '/edit/'. $row->id_user .'" class="mybutton">Edit</a>';
                })
                ->addColumn('delete', function ($row) {
                    return '<a href="'. url('/pro-admin/'). '/delete/'. $row->id_user .'" class="mybutton">Delete</a>';
                })
                ->rawColumns(['delete' => 'delete','edit' => 'edit'])
                ->make(true);
        }


        public function user_index() {
            if(session()->has('admin')) {
                return view('admin/admin_userstable');
            } else {
                return view('admin/login');
            }
        }



      public function add_admin(Request $request) {

    $rules = array(
        'first_name' => 'required|alphaNum',
        'last_name' => 'required|alphaNum',
        'email'    => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:3|confirmed'
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Requests::all(), $rules);



    if ($validator->fails()) {
        return Redirect::to('/pro-admin/addadmin')
            ->withErrors($validator) // send back all errors to the login form
            ->withInput(Requests::except('password')); // send back the input (not the password) so that we can repopulate the form
    } else {
        $email = Requests::get('email');

        if($this->check_email($email)) {
            return Redirect::to('/pro-admin/addadmin')
                ->withErrors(['email' => 'Email Address Already Exists in the Database'])
                ->withInput(Requests::except('password')); // send back the input (not the password) so that we can repopulate the form
        }
        $password =  Hash::make(Requests::get('password'));
        $first_name = Requests::get('first_name');
        $last_name = Requests::get('last_name');


        $user =  new User;

        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->password = $password;
        $user->email = $email;


        $user->save();

        $id = User::max('id_user');

        return redirect('/pro-admin/');

    }
}


      public function showlogin() {
          return view('admin/login');
      }

      public function check_email($email) {
            $user = User::where("email","=",$email)->count();
            if($user>=1) {
                return true;
            } else {
                return false;
            }
        }

        public function logout(Request $request) {

          $request->session()->flush();
          return redirect('/pro-admin/login');
          }



          public function changepass(Request $request) {
                if($request->submit == "submit")
                {


                    $rules = array(
                        'password' => 'required|alphaNum|min:3|confirmed' // password can only be alphanumeric and has to be greater than 3 characters
                    );


                    $validator = Validator::make(Requests::all(), $rules);


                    if ($validator->fails()) {
                        return Redirect::to('/pro-admin/profile')
                            ->withErrors($validator) // send back all errors to the login form
                            ->withInput(Requests::except('password')); // send back the input (not the password) so that we can repopulate the form
                    } else {
                        $user = User::where("id_user","=",session()->get('userID'))->first();
                        $user->update(['password' => bcrypt(Requests::get('password'))]);
                        return Redirect::to('/pro-admin/profile')
                            ->with('status', 'Password Changed!');
                    }

    }
}

          public function showprofile() {
              if(session()->has('admin')) {
              $user = User::where("id_user","=",session()->get('userID'))->first();
              $data['users'] = $user;
              return view('admin/profile',$data);
            } else {   return view('admin/login'); }
          }

      public function dologin() {

        $rules = array(
                    'email'    => 'required|email', // make sure the email is an actual email
                    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
                );

                // run the validation rules on the inputs from the form
                $validator = Validator::make(Requests::all(), $rules);

        // if the validator fails, redirect back to the form
                if ($validator->fails()) {
                    return Redirect::to('/pro-admin/login')
                        ->withErrors($validator) // send back all errors to the login form
                        ->withInput(Requests::except('password')); // send back the input (not the password) so that we can repopulate the form
                } else {

                    // create our user data for the authentication

                     $email = Requests::get('email');
                     $password =  Requests::get('password');

                     $user = User::where("email","=",$email)->first();

                      // if($password == $user->password) {
                   if(Hash::check($password,$user->password)) {

                    $userID = $user->id_user;
                    $username = $user->first_name." ".$user->last_name;
                    $admin = "yes";
                    Session::put('userID',$userID);
                    Session::put('userName',$username);
                    Session::put('admin',$admin);
                    return redirect('/pro-admin/');
            } else {
                    return Redirect::to('/pro-admin/login')
                        ->withErrors(['no' => 'A user with the provided email and password does not exist']);
            }
            }

          return view('admin/adminpage');
      }





}
