<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        $users = User::latest()->paginate(5);

        //render view with posts
        return view('dashboard.index', compact('users'));
        
        return view('login.index', [
            'tittle' => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            // 'email' => 'required | email:dns',
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
