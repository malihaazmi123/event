<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Type;
use App\Models\User;
use App\Models\Booking;
use App\Models\Booking_details;
class BookingController extends Controller
{
  public function getcart()
  {   if(auth()->user()){
    $user=User::where('id',auth()->user()->id)->first();
    
    $types=Type::all();
        $carts= session()->get('cart');
    return view('website.pages.booking.cartlist',compact('carts','types','user'));
  }
  $user=User::all();
  $types=Type::all();
  $carts= session()->get('cart');
return view('website.pages.booking.cartlist',compact('carts','types','user'));
  }
     public function Clearbook()
    {  session()->forget('cart');
     return redirect()->back()->with('msg','Booking cleared successfully.');
    }


  public function AddBooking($id)
  {
   // dd($id);
   $service=service::find($id);
   if(!$service)
   {
     return redirect()->back()->with('msg','No service Found');
   }
   //dd($photo);
  

   $cartExist=session()->get('cart');
  
   if(!$cartExist) 
    {
       $cartData = [
           $id => [
               'service_id' => $id,
               'service_name' => $service->name,
               'service_price' =>$service->price,
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
               'service_name'=> $service->name,
               'service_price'  => $service->price,
               'service_qty'=> 1,
       ];

       session()->put('cart', $cartExist);

       return redirect()->back()->with('msg', 'Service Added to Booking.');
      }
         if(isset($cartExist[$id]))
        {
         $cartExist[$id]['service_qty']++;
         session()->put('cart', $cartExist);
         return redirect()->back()->with('msg', 'Service Added to Booking.');
        }
  }
   public function Checkout(Request $request)
   {
     //dd(session()->get('cart'));
     $carts= session()->get('cart');
    // dd($carts);
     if($carts)
     {
         $booking=Booking::create([
             'user_id'=>auth()->user()->id,
             'total_price'=>array_sum(array_column($carts,'service_price')),
             //'persons'=>$request->persons,
             //'date'=>$request->datetime,
             
         ]);


         foreach ($carts as $cart)
         {
             Booking_details::create([
                 'booking_id'=>$booking->id,
                 'service_id'=>$cart['service_id'],
                 'unit_price'=>$cart['service_price'],
                 'quantity'=>$cart['service_qty'],
                 'sub_total'=>$cart['service_qty'] * $cart['service_price'] ,
                 'persons'=>$request->persons,
                 'date'=>$request->datetime,
             ]);
         }
         session()->forget('cart');
         return redirect()->back()->with('msg','Booking Placed Successfully.');
     }
     return redirect()->back()->with('msg','No Data found in booking.');

   }
   public function Bookinglist(Request  $request)
   { 
    $from = $request->query('from_date');
    $to = $request->query('to_date');
    if($from && $to){
        $booking = booking::whereBetween('created_at',[$from,$to])->get();
        $types=Type::all();
     return view('admin.pages.booking',compact('types'));
    }

     $bookings = Booking::with('user')->get();
    //  dd($bookings);
     return view('admin.pages.booking',compact('bookings'));
   }

   public function BookingCancel($id)
   { 
    // dd($id);
    
    $booking=booking::find($id);
    //dd($booking);
    $booking->update([
       'status'=>'cancel'
       
   ]);
   //dd($booking);

   return redirect()->back();
 }
   public function Bookingview($id)
   {
    
     $bookings=Booking::with('details')->find($id);
    //  dd($bookings);
    //  $bookingdetails=Booking_details::where('booking_id',$id)->get();
    // dd($bookings,$bookingdetails,$users);
     return view('admin.pages.bookingview',compact('bookings'));
    
   }
   

}
