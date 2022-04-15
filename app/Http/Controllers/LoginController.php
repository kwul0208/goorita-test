<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Login';
        return view('auth.login',[
            'title' => $title
        ]);
    }

    public function storeLogin(Request $request)
    {
        $post = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // get request to variabel
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        
            if (Auth::attempt($post)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
            return redirect()->back()->with('failed', 'email or password is wrong!');
    }
}
