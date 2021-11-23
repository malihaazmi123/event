<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
public function reportM(){
    return view('admin.pages.orderlist');
}


    public function weekly(){

    return view('admin.pages.serviceAdmin');

    }

}
