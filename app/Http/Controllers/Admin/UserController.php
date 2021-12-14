<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function userlist()
   {
    $userviews = User::all();
    
       return view('admin.pages.userlist',compact('userviews'));
   }
}
