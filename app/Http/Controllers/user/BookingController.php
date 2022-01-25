<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photography;
use App\Models\Type;
class BookingController extends Controller
{
  public function eventbook()
  {
    $type=Type::all();
      return view('website.pages.bookingevent',compact('type'));
  }
   
  public function getcart()
  {      $carts= session()->get('cart');
    return view('website.pages.booking.cartlist',compact('carts'));
  }
     public function Clearbook()
    {  session()->forget('cart');
     return redirect()->back()->with('msg','Booking cleared successfully.');
     }


  public function AddBooking($id)
  {
   // dd($id);
   $photo=Photography::find($id);
   if(!$photo)
   {
     return redirect()->back()->with('msg','No service Found');
   }
   //dd($photo);
  

   $cartExist=session()->get('cart');
  
   if(!$cartExist) {
       $cartData = [
           $id => [
               'service_id' => $id,
               'service_name' => $photo->photographername,
               'service_price' => $photo->photographycost,
               'service_qty' => 1,
           ]
       ];
       session()->put('cart', $cartData);
       return redirect()->back()->with('msg', 'Service Added to Booking.');
   }

   if(!isset($cartExist[$id]))
   {
       $cartExist[$id] = [
               'service_id' => $id,
               'service_name'=> $photo->photographername,
               'service_price'  => $photo->photographycost,
               'service_qty'=> 1,
       ];

       session()->put('cart', $cartExist);

       return redirect()->back()->with('msg', 'Service Added to Booking.');
   }
  }
}
