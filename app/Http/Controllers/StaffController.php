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
        //dd($request->all()); 
        Stafflist::create([

            'name'=>$request->Staff_name,
            'jobdesignation'=>$request->Job_Designation,
            'email'=>$request->Email,
            'paddress'=>$request->Permanent_Address,
            'caddress'=>$request->Current_Address,
            //'paddress'=>$request->Event_Date,
        ]);
        return redirect()->back()->with('msg','staff list created successfully.');
    }



   
}
