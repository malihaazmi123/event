<?php

namespace App\Http\Controllers\Admin;
use App\Models\Eventlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function eventM()
    {
        return view('admin.pages.orderlist');
    }
    public function form(){
        return view('admin.pages.form');
    }
    public function accounts(){
        return view('admin.pages.accounts');
    }
    public function Evenlist()
    {
        $events = Eventlist::all();
        // dd($event);
        return view('admin.pages.Eventlist',compact('events'));
    }
    public function storeE(Request $request){

      // dd($request->all());
      Eventlist::create([

        'name'=>$request->Event_name,
        'User'=>$request->User_name,
    'status'=>$request->Event_status,
    'Date'=>$request->Event_Date,
    
]);
return redirect()->back();
    }
    
}
