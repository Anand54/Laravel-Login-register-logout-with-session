<?php

namespace App\Http\Controllers;
use App\Models\userModel; //this is from models/userModel.php
use Hash; //to make password secure means convert password to md5
use Session;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function login(){
     return view('auth.login');
  }

    public function register(){
    return view('auth.register');
  }


  //register model request starts
  public function registerUser(Request $request){ //registerUser should use in route
  //  echo "value Post";
  //to validate the request
  $request ->validate([
    'username' =>'required',
    'email' =>'required|email|unique:user_models',
    'mobile' =>'required|max:10|min:10|unique:user_models',
    'password' =>'required|max:10|min:5'
  ]);

  // to save data into database
  $user = new userModel(); //this is from models/userModel
  $user -> username = $request->username;
  $user -> email = $request->email;
  $user -> mobile = $request->mobile;
  $user -> password = Hash::make($request->password);
  $reslt = $user->save();
  if($reslt){
    return back() ->with('success','You have been registered');
    }
  else{ 
     return back() ->with('failed','Something went wrong');
   }
  }
 //register model request ends

  //login model request starts
  public function loginUser(Request $request){
  $request ->validate([
    'email' =>'required|email',
    'password' =>'required|max:10|min:5'
  ]);

  $user = userModel::where('email','=', $request->email)->first ();
  if($user){
    if(Hash::check($request->password,$user->password)){
      $request->session()->put('loginId',$user->id);
      return redirect('/dashboard');
    }
    else{
      return back()->with('failed','Password does not match');
    }
  }
  else{
    return back()->with('failed','This email is not registered');
  }
  }
   //login model request ends

   //dashboard model request starts
   public function dashboard(){
    if(Session::has('loginId')){
      $data = userModel::where('id','=',Session::get('loginId'))->first (); 
    }
     return view('dashboard.dashboard',compact('data'));
   }
   //dashboard model request ends

   //logout model starts
   public function logout(){
    if(Session::has('loginId')){
      Session::pull('loginId');
      return redirect('/login');
    }
   }
   //logout model end
}
