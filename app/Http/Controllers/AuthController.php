<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function registration(Request $request){
        User::create([
            'name' => $request->name,
            'login' => $request->login,
            'password' => Hash::make($request->password),
        ]);
    }
    public function login(Request $request){
        Auth::attempt([
            'login' => $request->loginLog,
            'password' => $request->passwordLog,
        ]);
        return Redirect::back();
    }
    public function logout(){
        Auth::logout();
        return Redirect::back();
    }
}
