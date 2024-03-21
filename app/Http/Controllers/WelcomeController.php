<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('Welcome');
    }
    public function login(){
        return view('login');
    }
    public function process_login(Request $request){
        return view('index', ['data' => $request]);
    }
}
