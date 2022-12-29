<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function welcomeView(){
        return view('welcome');
    }

    public function categoryView(){
        return view('category');
    }

    public function trendingView(){
        return view('trending');
    }

    public function contactView(){
        return view('contact');
    }

    public function loginView(){
        return view('login');
    }

    public function signupView(){
        return view('signup');
    }

    public function dashboardView(){
        return view('dashboard');
    }
}