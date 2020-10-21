<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    // make functin for frontend template
   public function index(){
          return view('frontend.pages.home');
   }
   public function login(){
          return view('frontend.pages.login');
   }
   public function register(){
          return view('frontend.pages.register');
   }
   public function category(){
          return view('frontend.pages.category');
   }

   public function blog(){
          return view('frontend.pages.blog');
   }
   public function about(){
          return view('frontend.pages.about-us');
   }
   public function contact(){
          return view('frontend.pages.contact-us');
   }
    // make functin for backend template
   public function dashboard(){
      return view('backend.pages.dashboard');
   }
   public function setting(){
      return view('backend.pages.setting');
   }
   public function profile(){
      return view('backend.pages.profile');
   }
   public function adminlogin(){
      return view('backend.pages.login');
   }
   public function charts(){
      return view('backend.pages.charts');
   }
   public function table(){
      return view('backend.pages.table');
   }
}
