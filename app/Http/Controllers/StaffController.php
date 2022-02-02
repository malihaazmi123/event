<?php

namespace App\Http\Controllers;
use App\Models\Stafflist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function ProductM(){
        return view('admin.pages.orderlist');
    }

    public function Addstaff()
    {

        return view('admin.pages.staffadd');
    }
    public function StafflistU()
    {
        $staffs = Stafflist::all();
        // dd($staffs);
        return view('admin.pages.staffList',compact('staffs'));
    }
    // public function Stafflist()
    // {
    //     $staffs = Stafflist::all();
    //     // dd($event);
    //     return view('admin.pages.staffList',compact('staffs'));
    // }

    public function staffadd(Request $request)
    {

        $request->validate([
            'Staff_name'=>'required',
            'Job_Designation'=>'required',
            'Email'=>'required',


        ]);
        $staffimage='';
        if ($request->hasfile('Imagefile')) {
            $file=$request->file('Imagefile');
            $staffimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($staffimage);
            $file->storeAs('/uploads',$staffimage);

        }
        //dd($request->all()); 
        Stafflist::create([

            'name'=>$request->Staff_name,
            'jobdesignation'=>$request->Job_Designation,
            'email'=>$request->Email,
            'paddress'=>$request->Permanent_Address,
            'caddress'=>$request->Current_Address,
            'Image'=>$staffimage,
            //'paddress'=>$request->Event_Date,
        ]);
        return redirect()->back()->with('msg','staff list created successfully.');
    }
    public function staffdelete($staff_id)
    {
        Stafflist::find($staff_id)->delete();
        return redirect()->back();
    }
    public function staffedit($staff_id)
    {
        $staffedit = Stafflist::find($staff_id);
        return view('admin.pages.staffedit',compact('staffedit'));
    }

     public function staffupdate(Request $request,$staff_id)
     {
        $staffupdate=Stafflist::find($staff_id);
        $image_name=$staffupadate->image;
        
                if($request->hasFile('Imagefile'))
                {
                   
                    $image_name=date('Ymdhis') .'.'. $request->file('Imagefile')->getClientOriginalExtension();
        
                  
                    $request->file('Imagefile')->storeAs('/uploads',$image_name);
        
                }
        
        $staffupdate->update([
         
            'name'=>$request->Staff_name,
            'jobdesignation'=>$request->Job_Designation,
            'email'=>$request->Email,
            'paddress'=>$request->Permanent_Address,
            'caddress'=>$request->Current_Address,
            'Image'=>$image_name,
 
        ]);
        return redirect()->route('staff.staffList');
     }

   
}
