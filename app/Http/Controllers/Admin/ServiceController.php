<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catering;

class ServiceController extends Controller
{
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
    
    public function decorationadd()
    {
        return view('admin.pages.service.decorationadd');
    }
    
}
