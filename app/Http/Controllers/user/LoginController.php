<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function logininput()
    {
        return view('website.pages.loginform');
    }

    public function inputregistration()
    {
        return view('website.pages.registration');
    }
    public function storename(Request $request)
    {
    //   dd($request->all());
      User::create([

        'name'=>$request->User_name,
        'phonenumber'=>$request->phone,
        'gender'=>$request->Gender,
        'date'=>$request->Event_Date,
        'email'=>$request->email,
        'password'=>$request->password,
        'confrimpassword'=>$request->confirmpassword,
        
    ]);
    return redirect()->back();
    }
}
