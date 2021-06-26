<?php


namespace App\Http\Controllers;



class HomeController extends Controller
{

      public function model_page() {
          return view('model_page');
      }


      public function services_page() {
          return view('services');
      }

      public function risk_page() {
          return view('risk_management');
      }

      public function portfolio_page() {
          return view('portfolio');
      }

      public function news_page() {
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

      public function results_page() {
          return view('results');
      }




}
