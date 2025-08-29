<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function Login(Request $req){
        $formFields =$req->validate([
           "email" => 'required',
           "password" => 'required', 
        ]);
        
        if(Auth::attempt($formFields)){
            if(auth()->user()->role == 'teacher'){
                return redirect('/teacher/dashboard');
            }else if(auth()->user()->role == 'admin'){
                return redirect('/admin/dashboard');
            }
            
        }else{
            return back()->with('message','Invalid Credentials');
        }
    }
    
    public function logout(Request $req){
        $req->session()->invalidate();
        $req->session()->regenerate();
        return redirect('/');
    }
}