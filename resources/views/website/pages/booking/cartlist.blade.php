@extends('website.master')

<div class="container" style="margin-top:150px;">
    <div class="row">
  
        <h1 style="padding-top: 00px;">My Booking List ({{session()->has('cart') ? count(session()->get('cart')):0}}) </h1>
       <table class="table">
          <thead>
              <tr>
                 <th scope="col">Serial</th>
                 <th scope="col">Service_Name</th>
                 <th scope="col">Service_Cost</th>
                 <th scope="col">Quantity</th>
                 <th scope="col">Sub Total</th>
              </tr>
           </thead>
           <tbody>
          
            @if($carts)
            @foreach($carts as $key=>$data)
              <tr>
                 <th scope="row">{{$key}}</th>
                 <td>{{$data['service_name']}}</td>
                 <td>{{$data['service_price']}}</td>
                 <td>{{$data['service_qty']}}</td>
                 <td>{{$data['service_price' ] * $data['service_qty']}}</td>
               </tr>
            @endforeach
              @endif

          </tbody>
     </table>
      <a href="{{route('website.cart.clear')}}" class="btn btn-danger">Clear</a>

  </div>
</div>


