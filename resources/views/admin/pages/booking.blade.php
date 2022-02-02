@extends('welcome')

@section('content')

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">User_Name</th>
      <th scope="col">Total_cost</th>
      <th scope="col">User_Email</th>
      <th scope="col">Status</th>
      <th scope="col">Handle</th>
      
    </tr>
  </thead>
  <body>
    
    @foreach($bookings as $key=>$booking)
    <tr>
  <td> {{$key+1}}</td>
  <td>{{$booking->user->name}}</td>
  <td>{{$booking->total_price}} .BDT</td>
  <td>{{$booking->user->email}}</td>
    <td>
       {{$booking->status}}

  </td>
<td>
   <a class="btn btn-light" style="color: rgb(179, 125, 19)" href="{{route('admin.booking.view',$booking->id)}}">view</a>
    @if($booking->status!='cancel')
    <a href="{{route('admin.booking.cancel',$booking->id)}}" class="btn btn-light">Cancel</a>
    @endif
</td>
</tr>
@endforeach
</body>

</table>
@endsection