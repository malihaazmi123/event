<?php

namespace App\Http\Controllers\user;
use App\Models\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $types=Type::all();
        return view('website.content',compact('types'));
    }
}
