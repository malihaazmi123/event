<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductM(){
        return view('admin.pages.orderlist');
    }
   
}
