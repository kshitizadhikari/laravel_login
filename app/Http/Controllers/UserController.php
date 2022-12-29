<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signupUser(Request $request){
        $request -> validate([
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
        ]);
        
        return redirect()->route('loginView');
    }

    public function loginUser(Request $request){
        $request -> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect()->route('dashboardView');
        } else {
            return back()->with('fail', 'User not Found');
        }

            // return redirect()->route('dashboardView');

    }
}