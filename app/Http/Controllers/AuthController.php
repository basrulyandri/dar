<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Mail\UserSubmitForgotPasswordForm;
use App\Http\Requests;

class AuthController extends Controller
{
    
    public function login(){
    	return view('auth.login');
    }

    public function dologin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);  
        // dd($request->all());
    	if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])){            
            return redirect()->intended('/dashboard');
        }                      
        return redirect()->route('auth.login')->withInput();
    }
    

    public function logout(){
    	Auth::logout();
    	return redirect()->route('home');
    }

    public function error401(){
    	return view('errors.401');
    }

    public function postforgotpassword(Request $request)
    {
        $user = User::whereEmail($request->email)->first();
        if($user){
            $user->reset_password_code = str_random(60);
            $user->save();
            \Mail::to($user->email)->send(new UserSubmitForgotPasswordForm($user));
            return redirect()->back()->with('success-message','Reset password instruction has been sent to your email');
        }

        return redirect()->back()->with('error-message','We cannot find any account with the email you requested');
    }

    public function resetpassword($reset_password_code)
    {
        $user = \App\User::whereResetPasswordCode($reset_password_code)->first();        
        if(!$user){
            return redirect()->route('auth.login');
        }

        return view('auth.resetpassword',compact('reset_password_code'));
        
    }

    public function postresetpassword(Request $request,$reset_password_code)
    {
        $this->validate($request, [
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);  

        $user = \App\User::whereResetPasswordCode($reset_password_code)->first();

        $user->password = bcrypt($request->input('password'));
        $user->reset_password_code = null;
        $user->save();

        return redirect()->route('auth.login')->with('success-reset-password-message','Your new password has beed applied, please login with your new password.');
        
    }

}
