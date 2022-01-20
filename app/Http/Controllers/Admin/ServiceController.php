<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catering;
use App\Models\Decoration;
use App\Models\Photography;

class ServiceController extends Controller
{   //caterings
    public function cateringadd()
    {
        return view('admin.pages.service.cateringadd');
      
    }
    public function cateringlist()
    { 
        $cates = Catering::all();
        return view('admin.pages.service.cateringlist',compact('cates'));
    }
    public function cateringstore(Request $request)
    { 
        $cateimage='';
        if ($request->hasfile('Imagefile')) {
            $file=$request->file('Imagefile');
            $cateimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($staffimage);
            $file->storeAs('/uploads',$cateimage);

        }
        // dd($request->all());
        Catering::create([
            'foodname'=>$request->FoodName,
            'foodtype'=>$request->FoodType,
            'foodquantity'=>$request->FoodQuantity,
            'foodprice'=>$request->FoodPrice,
            'Image'=> $cateimage,
        

        ]);
        return redirect()->back();
    }
     public function viewCatering($cate_id){
         $catering=Catering::find($cate_id);
        return view('admin.pages.service.cateringview',compact('catering'));
        
     }
    public function deletecatering($cate_id){
    Catering::find($cate_id)->delete();
    return redirect()->back();
    }
    public function editcatering($cate_id)
    {
       $catering=Catering::find($cate_id);
        return view('admin.pages.service.cateringedit',compact('catering'));
    }
    public function updateCatering(Request $request,$cate_id){
        $catering=Catering::find($cate_id);
        $catering_image=$catering->Image;
        if($request->hasFile('Imagefile')){
            $catering_image=date('Ymdhms').'.'.$request->file('Imagefile')->getClientOriginalExtension();
            $request->file('Imagefile')->storeAs('/uploads', $catering_image);
        }
        $catering->update([
            'foodname'=>$request->FoodName,
            'foodtype'=>$request->FoodType,
            'foodquantity'=>$request->FoodQuantity,
            'foodprice'=>$request->FoodPrice,
            'Image'=> $catering_image,
        ]);
        return redirect()->route('admin.service.cateringlist');

    }
    public function Caterings()
    {
        $cates=Catering::all();
        return view('website.pages.service.catering',compact('cates'));
    }
    //decoration
    public function decorationadd()
    {
        return view('admin.pages.service.decorationadd');
    }
    public function decorationlist()
    {   $decors = Decoration::all();
        return view('admin.pages.service.decorationlist',compact('decors'));
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
        Decoration::create([
            'decorationname'=>$request->DecorationName,
            'decorationtype'=>$request->DecorationType,
            'decorationplace'=>$request->DecorationPlace,
            'decorationcost'=>$request->Decorationcost,
            'image'=>$decorimage,
         
        ]);
        return redirect()->back();
   
    }
    public function Decoration()
    {   $decors = Decoration::all();
        return view('website.pages.service.decoration',compact('decors'));
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
