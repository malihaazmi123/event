<?php

namespace App\Http\Controllers\Admin;
use App\Models\Eventlist;
use App\Models\Type;
use App\Models\Addeventlist;
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
    public function addevent(){

        return view('admin.pages.eventaddpic');
    }

    public function addlist(){
        $lists = Addeventlist::all();
        return view('admin.pages.eventaddlist',compact('lists'));
    }

    public function eventaddlist(Request $request){
        // dd($request->all());
        if ($request->hasfile('Imagefile')) {
            $file=$request->file('Imagefile');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($filename);
            $file->storeAs('/uploads',$filename);

        }
        Addeventlist::create([
         
        'eventname'=>$request->Event_name,
        'eventdescripsion'=>$request->eventdescription,
        'image'=>$filename,

        ]);
     return redirect()->back();
  }
    public function Weddings(){
        $lists = Addeventlist::all();
        $type=Type::all();
        return view('website.pages.wedding',compact('lists','type'));
    }
}
