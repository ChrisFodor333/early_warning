<?php


namespace App\Http\Controllers;



class AdminController extends Controller
{

      public function dashboard() {
          return view('admin/adminpage');
      }


      public function showlogin() {
          return view('admin/login');
      }

      public function dologin() {
          return view('admin/adminpage');
      }





}
