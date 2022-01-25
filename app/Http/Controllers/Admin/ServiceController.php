<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
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
        $types = Type::all();
        return view('admin.pages.service.TypeList',compact('types'));
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
    public function decorationadd()
    { $types=Type::all();
        return view('admin.pages.service.servicetable',compact('types'));
    }
    public function decorationlist()
    {   $services = Service::all();
        return view('admin.pages.service.servicelist',compact('services'));
    }
    public function decorationstore(Request $request)
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
        return view('admin.pages.service.cateringedit',compact('servicedit'));
    }
    public function deletecatering($service_id){
        Service::find($service_id)->delete();
        return redirect()->back();
        }
    public function Caterings($service_id)
    {
        // dd($service_id);
        $service =Service::where('type_id',$service_id)->get();
        // dd($service);
        $types =Type::all();
        return view('website.pages.service.catering',compact('service','types'));
    }
    //photoghraphy
    public function photographyadd()
    {
        return view('admin.pages.service.photographyadd');
    }

    public function photographylist()
    {    $photos = Photography::all();
        return view('admin.pages.service.photographylist',compact('photos'));
    }

    public function photostore(Request $request)
    { 
        $photoimage='';
        if ($request->hasfile('Imagefile')) {
            $file=$request->file('Imagefile');
            $photoimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($staffimage);
            $file->storeAs('/uploads', $photoimage);
        }
       // dd($request->all());
       Photography::create([
         
        'albumname'=>$request->AlbumName,
        'photographername'=>$request->Photographername,
        'imagedescreption'=>$request->Picturedescription,
        'photographycost'=>$request->Photographycost,
        'albumimage'=>$photoimage,

       ]);
       return redirect()->back();
    }
    public function Photograph()
    {   $photos = Photography::all();
        return view('website.pages.service.photography',compact('photos'));
    }
    
}
