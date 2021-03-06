<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {   
        return view('login');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function log(Request $request)
    {

        $this->validate($request,[
            'email' => 'required|email', 
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('home');
        }

        return 'oops! something went wrong';
    }

    public function register(Request $request)
    {
        $data = $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm' => 'required'
        ]);
    
        User::create($data);
       
        return redirect('login');
    }
}
