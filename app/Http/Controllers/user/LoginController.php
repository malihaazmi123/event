<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function inputregistration()
    {
        return view('website.pages.registration');
    }
    public function userregistration(Request $request)
    {
    //   dd($request->all());
      User::create([

        'name'=>$request->User_name,
        'phonenumber'=>$request->phone,
        'gender'=>$request->Gender,
        'date'=>$request->Event_Date,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'confrimpassword'=>$request->confirmpassword,
        
    ]);
    return redirect()->back();
    }
    public function userlogin(Request $request)
    {
    //  dd($request->all());
     $userpost = $request->except('_token');
     if(Auth::attempt($userpost)){
         return redirect()->route('frontend')->with('msg','Login successfully.');
     }
     else
     return redirect()->back()->with('msg','Invalid password.');
    }
    public function userlogout()
    {
        Auth::logout();
        return redirect()->back()->with('error','Logout successfully.');
    }
}
