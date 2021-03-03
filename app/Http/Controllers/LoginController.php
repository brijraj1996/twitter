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
            'email' => 'required', 
            'password' => 'required'
        ]);

        // $request['password'] = dcrypt($request->password);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/home');
        }

        return 'oops! something went wrong';
    }

    public function register(Request $request)
    {
    //   dd('hi');
        
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm' => 'required'
        ]);

        // $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect('login');
    }
}
