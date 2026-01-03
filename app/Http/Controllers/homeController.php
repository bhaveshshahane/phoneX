<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
   public function index(){
    return view('home');
   }
   public function about(){
    return view('about');
   }
   public function contact(){
    return view('contact');
   }
   public function brand(){
    return view('brand');
   }
   public function login(){
      return view('login');
   }
   public function loginCheck(Request $request){
      $request->validate([
         'username'=>'required',
         'password'=>'required'
      ]);
     echo "<pre>";
      echo $request;
     
   }
   public function registerCheck(Request $request){
      $request->validate([
         'username'=>'required',
         'email'=>'required',
         'address'=>'required',
         'password'=>'required:confirmed',
         'password_confirmation'=>'required'
      ]);
      echo "<pre>";
      echo $request;
   }
}
