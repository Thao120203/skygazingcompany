<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Login\StoreRequest;

class LoginController extends Controller
{
    public function getLogin(){
        if (Auth::check()){
            return redirect()->route('admin.member.index');
        }
        return view('admin.login');
    }

    public function postLogin(StoreRequest $request){
        //Admin normal
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials['level']=1;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.member.index')->with('success', 'Login sucessfully');
        }

        //Login SUPER-Admin
        $spadmin = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $spadmin['id']=1;
        if (Auth::attempt($spadmin)) {
            $request->session()->regenerate();
            return redirect()->route('admin.member.index')->with('success', 'Login sucessfully');
        }
        return redirect()->route('admin.getLogin')->with('error', 'login failed, incorrect email or password');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('admin.getLogin');
    }
}
