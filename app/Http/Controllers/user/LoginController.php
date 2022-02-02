<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function inputregistration()
    {
        $types=Type::all();
        return view('website.pages.registration',compact('types'));
    }
    public function userregistration(Request $request)
    {
        
        $request->validate([
            'User_name'=>'required',
            'phone'=>'required',
            'Event_Date'=>'required',
            'email'=>'required',
            'password'=>'required',


        ]);

        // $userimage='';
        // if ($request->hasfile('Imagefile')) {
        //     $file=$request->file('Imagefile');
        //     $userimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        //      //dd($userimage);
        //     $file->storeAs('/uploads',$userimage);
        // }
    //   dd($request->all());
      User::create([

        'name'=>$request->User_name,
        'phonenumber'=>$request->phone,
        'gender'=>$request->Gender,
         'date'=>$request->Event_Date,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        // 'image'=>$userimage,
        
    ]);
    return redirect()->route('frontend')->with('msg','Registration successfully');
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
