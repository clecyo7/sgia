<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        if(Auth::check() === true){
            return view('welcome');
        }
       
    }
}