<?php

namespace App\Http\Controllers;

// use App\Http\Requests\LoginRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function viewHome()
    {
        return view('dashboard');
    }
    public function index()
    {
        return view('auth.login');
    }
    // public function login(LoginRequest $request)
    // {
    //     dd($request->all());
    // }
     public function login(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if ($validator->fails()) 
        {
            return redirect('login')->withErrors($validator->errors());
        }
        // dd(Hash::make('welcome123'));
        $email = $request->email;
        $password=$request->password;
        // dd($email,$password);
        // $user=User::where('email',$email)->first();
        // // dd($user);
        // if(password_verify($password, $user->password))
        // {
        //     // dd('valid');
        //     return redirect('home');
        // }
        // else
        // {
        //     return redirect('login');
        // }

        if(Auth::attempt(['email'=>$email, 'password'=>$password]))
        {
            // dd(Auth::user());
            $user=User::where('email',$email)->first();
            return redirect('home');
        }
        else
        {
            return redirect('login');
        }
    }
    public function logout()
    {
        \request()->session()->flush();
        return redirect('login');
    }
    public function viewChangePassword()
    {
        return redirect('view_change_password');
    }

    public function changePassword(Request $request)
    {
        dd($request->all());
    }
}
