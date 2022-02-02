@extends('website.master')

<div class="container" style="margin-top:150px;">
    <div class="row">
  
        <h1 style="padding-top: 00px;">My Booking List ({{session()->has('cart') ? count(session()->get('cart')):0}}) </h1>
       <table class="table">
          <thead>
              <tr>
                 <th scope="col">Serial</th>
                 <th scope="col">Service_Name</th>
                 {{-- /<th scope="col">Guest_Number</th> --}}
                 <th scope="col">Service_Cost</th>
                 <th scope="col">Quantity</th>
                 <th scope="col">Sub Total</th>
              </tr>
           </thead>
           <tbody>
          
            @if($carts)
            @foreach($carts as $key=>$data)
              <tr>
                 <th>{{$key}}</th>
                 <td>{{$data['service_name']}}</td>
                 {{-- <td>{{$data['no_of_guest']}}</td> --}}
                 <td>{{$data['service_price']}}</td>
                 <td>{{$data['service_qty']}}</td>
                 <td>{{$data['service_price' ] * $data['service_qty']}}</td>
               </tr>
            @endforeach
              @endif

          </tbody>
     </table>
      

  </div>
</div>


<form action= "{{route('website.cart.checkout')}}" method="GET" >
   @csrf
   <fieldset enabled>
     <legend>Create Event list</legend>
     <div class="mb-3">
       <label for="EventTextInput" class="form-label">No of guest</label>
   <input name="persons" type="number" id="EventTextInput" class="form-control" placeholder="guests">
     </div>
     <div class="mb-3">
       <label for="EventDate" class="form-label">Event Date & Time</label>
 
          <input name="datetime" type="datetime-local" id="Date" class="form-control" placeholder="Date">    
          <select id="enabledSelect" class="form-select">
       </select>
     </div>
     <div class="mb-3">
       <div class="form-check">
         <input class="form-check-input" type="checkbox" id="enabledFieldsetCheck" enabled>
         <label class="form-check-label" for="enabledFieldsetCheck">
           Can't check this
         </label>
       </div>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
     <a href="{{route('website.cart.clear')}}" class="btn btn-info" style="color: rgb(10, 9, 9)">Clear</a>
      
   </fieldset>
 </form>
 


