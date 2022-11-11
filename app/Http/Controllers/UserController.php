<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    //
    public function UserLogin(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = User::all();
            return redirect('home');
        }
        return back()->withErrors(['message' => "The provided credentials do not match our records.",])->onlyInput('message');
    }

    public function UserLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function viewUsers(){
        $users = User::all();

        return view('users.viewUsers')->with(['users'=>$users]);
    }
    
    public function CreateUser(){

    }
}
