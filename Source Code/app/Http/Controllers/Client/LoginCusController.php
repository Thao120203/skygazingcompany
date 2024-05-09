<?php

namespace App\Http\Controllers\Client;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Login\StoreRequest;
class LoginCusController extends Controller
{
    public function getUserLogin(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('Client.login');
    } 

    public function postUserLogin(StoreRequest $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return redirect()->route('getUserLogin')->with('error', 'login failed, incorrect email or password');
    }

    public function Userlogout(){
        Auth::logout();
        return redirect()->route('getUserLogin');
    }
}

