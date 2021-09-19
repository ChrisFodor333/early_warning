<?php


namespace App\Http\Controllers;



class HomeController extends Controller
{

      public function model_page() {
          $years = range(strftime("%Y", time()),2016);
          $countries = array("Slovakia", "Hungary", "Germany", "Romania", "Austria", "Croatia", "Slovenia", "Bosnia and Herzegovina"
          , "Serbia", "Moldova", "Ukraine");
          $data['years'] = $years;
          $data['countries'] = $countries;
          //return view('copies/model_page',$data);
          return view('model_page',$data);
      }

      public function complex_model_page() {
          $years = range(strftime("%Y", time()),2016);
          $countries = array("Slovakia", "Hungary", "Germany", "Romania", "Austria", "Croatia", "Slovenia", "Bosnia and Herzegovina"
          , "Serbia", "Moldova", "Ukraine");
          $data['years'] = $years;
          $data['countries'] = $countries;
          return view('complex_model_page',$data);
      }


      public function services_page() {
          return view('services');
      }

      public function risk_page() {
          return view('risk_management');
      }

      public function aboutproject_page() {
          return view('risk_management');
      }

      public function portfolio_page() {
          return view('portfolio');
      }

      public function about_page() {
          return view('news');
      }

      public function contact_page() {
          return view('contact');
      }

      public function team_page() {
          return view('team');
      }

      public function overview_page() {
          return view('overview');
      }






}
