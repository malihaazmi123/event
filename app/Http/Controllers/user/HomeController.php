<?php

namespace App\Http\Controllers\user;
use App\Models\Type;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    if(auth()->user()){
        $user=User::where('id',auth()->user()->id)->first();
        $types=Type::all();
        return view('website.content',compact('types','user'));
    }
   
    $types=Type::all();
    return view('website.content',compact('types'));
    }

    public function Dashboard()
    {
        return view('admin.pages.dashboard');
    }
   
}
