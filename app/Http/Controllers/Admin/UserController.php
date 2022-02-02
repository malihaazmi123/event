<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
   public function userlist()
   {
    $userviews = User::all();
    
       return view('admin.pages.userlist',compact('userviews'));
   }
   public function login()
   {
      return view('admin.login');
   }
   public function dologin(Request $request)
   {
      // dd($request->all());
         $userpost = $request->except('_token');
         if(Auth::attempt($userpost)){
             return redirect()->route('welcome.admin');
         }
         else
         return redirect()->back();
   }
   public function logout()
   {
      Auth::logout();
      return redirect()->back();
   }
   public function profile_view($user_id)
    {
       $types=Type::all();
       $user=User::find($user_id);
       return view('website.pages.profile',compact('types','user'));
    }
}
