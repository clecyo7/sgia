<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function admin(Request $request)
    {
        $usuarios = User::query()->where('status', 'N')->get();
        $total = count($usuarios);
        return view('admin', compact('usuarios', 'total'));

        //return view('welcome');
    }

    public function recuperaUsers()
    {
        // $usuarios = User::query()->where('status', 'N');
    }

}
