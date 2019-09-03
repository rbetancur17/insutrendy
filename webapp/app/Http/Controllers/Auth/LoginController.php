<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller
{
   
   use AuthenticatesUsers;

   protected $redirectTo = '/default';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   

   public function ShowLogin(){

     return view('auth.login');
   }

   public function Login(){

    $credentials = $this->validate(request(),[
        'email'     => 'email|required|string',
        'password'  => 'required|string'
    ]);


    if(Auth::attempt($credentials)){
        
        if(Auth()->user()->admin == 1 ){
            return redirect()->intended('/dashboard');
        }else{
            return redirect()->intended('/home');
        }

    }

    return back()
        ->withErrors(['email' =>'Datos Invalidos'])
        ->withInput(request(['email']));

   }

    public function redirectPath()
    {
        if (auth()->user()->admin == 1) {
            return '/admin';
        }

        return  '/default';
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/home');
    }    

}
