<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;



class AuthManager extends Controller
{
    function login(){
        return view('login'); 
    }
    function registration(){
        return view('registration'); 
    }
    function loginpost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=> 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route(name:'login'))->with("error","login details are not valid");
    
    }
    function registrationpost(Request $request){
        $request->validate([
            'email'=>'required',
            'email'=>'required|email|unique:users',
            'password'=> 'required'
             ]);
             

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);

           if(!$user){
           return redirect(route('registration'))->with("error","registration faild, try it again");
               }
            return redirect(route('login'))->with("success","registration success, login to account");
          }
           function logout(){
            Session::flush();
             Auth::Logout();
             return redirect(route('home'));
           }
}
