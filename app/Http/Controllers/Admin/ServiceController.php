<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Photography;
use App\Models\Type;

class ServiceController extends Controller
{ //typetable
    public function TypeTable()
    {
        
        return view('admin.pages.service.AddType');
    }

    public function TypeList()
    {
        $user=User::all();
        $types = Type::all();
        return view('admin.pages.service.TypeList',compact('types','user'));
    }

    public function TypeStore(Request $request)
    {
        Type::create([

            'name'=>$request->TypeName,
            'status'=>$request->Typestatus,

        ]);
        return redirect()->back()->with('msg','Type Table successfully fill');
    }
    

    //service Table
    public function Serviceadd()
    { $types=Type::all();
        return view('admin.pages.service.servicetable',compact('types'));
    }
    public function Servicelist()
    {   $services = Service::all();
        return view('admin.pages.service.servicelist',compact('services'));
    }
    public function Servicestore(Request $request)
    {   $decorimage='';
        if ($request->hasfile('Imagefile')) {
            $file=$request->file('Imagefile');
            $decorimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($staffimage);
            $file->storeAs('/uploads',$decorimage);
        }
        
        // dd ($request->all());
        Service::create([
            'type_id'=>$request->TypeId,
             'name' =>$request->ServiceName,
             'description'=>$request->ServiceDescription,
             'eventtype'=>$request->Eventname,
             'price'=>$request->ServicePrice,
             'status'=>$request->ServiceCode,
            'image'=>$decorimage,
         
        ]);
        return redirect()->back();
   
    }
    public function viewCatering($service_id){
        $serviceview=Service::find($service_id);
       return view('admin.pages.service.cateringview',compact('serviceview'));
       
    }
    public function editcatering($service_id)
    {
       $servicedit=Service::find($service_id);
       $types=Type::all();

        return view('admin.pages.service.cateringedit',compact('servicedit','types'));
    }

    public function updateCatering(Request $request,$service_id)
    {
       $serviceupadate=Service::find($service_id);
       $image_name=$serviceupadate->image;
       //              step 1: check image exist in this request.
               if($request->hasFile('Imagefile'))
               {
                   // step 2: generate file name
                   $image_name=date('Ymdhis') .'.'. $request->file('Imagefile')->getClientOriginalExtension();
       
                   //step 3 : store into project directory
       
                   $request->file('Imagefile')->storeAs('/uploads',$image_name);
       
               }
       
       $serviceupadate->update([
        'type_id'=>$request->TypeId,
        'name' =>$request->ServiceName,
        'description'=>$request->ServiceDescription,
        'price'=>$request->ServicePrice,
        'image'=>$image_name,

       ]);
       return redirect()->route('admin.service.decorationlist');
    }
    public function deletecatering($service_id){
        Service::find($service_id)->delete();
        return redirect()->back();
        }
    public function Servecing($service_id)
    {
        if(auth()->user()){
        $user=User::where('id',auth()->user()->id)->first();
        // dd($service_id);
        $service =Service::where('type_id',$service_id)->get();
        // dd($service);
        $types =Type::all();
        return view('website.pages.service.serviceshow',compact('service','types','user'));
        }
        $user=User::all();
        // dd($service_id);
        $service =Service::where('type_id',$service_id)->get();
        // dd($service);
        $types =Type::all();
        return view('website.pages.service.serviceshow',compact('service','types','user'));
    }
}
