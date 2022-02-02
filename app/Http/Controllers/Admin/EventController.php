<?php

namespace App\Http\Controllers\Admin;
use App\Models\Eventlist;
use App\Models\Type;
use App\Models\User;
use App\Models\Addeventlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function form(){
        return view('admin.pages.form');
    }
    public function accounts(){
        return view('admin.pages.accounts');
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
    public function Eventshow(){
        if(auth()->user()){
            $user=User::where('id',auth()->user()->id)->first();
        $lists = Addeventlist::all();
        $types=Type::all();
        return view('website.pages.events',compact('lists','types','user'));
    }
    $user=User::all(); 
    $lists = Addeventlist::all();
    $types=Type::all();
    return view('website.pages.events',compact('lists','types','user'));
    }
    public function eventdelete($list_id)
    {  Addeventlist::find($list_id)->delete();
        return redirect()->back()->with('msg','Delete event');
    }
    public function eventedit($list_id)
    {  $eventedit=Addeventlist::find($list_id);
        $types=Type::all();
        return view('admin.pages.eventedit',compact('eventedit','types'));
    }
    
    public function eventupdate(Request $request,$list_id)
    {
       $eventupdate=Addeventlist::find($list_id);
       $image_name=$eventupdate->image;
       
               if($request->hasFile('Imagefile'))
               {
                  
                   $image_name=date('Ymdhis') .'.'. $request->file('Imagefile')->getClientOriginalExtension();
       
                 
                   $request->file('Imagefile')->storeAs('/uploads',$image_name);
       
               }
       
       $eventupdate->update([
        
        'eventname' =>$request->eventName,
        'eventdescripsion'=>$request->eventDescription,
        'image'=>$image_name,

       ]);
       return redirect()->route('event.addlist');
    }
}
