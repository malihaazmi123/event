@extends('welcome')

@section('content')

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Decoration_name</th>
      <th scope="col">Decoration_Type</th>
      <th scope="col">Decoration_Place</th>
      <th scope="col">Decoration_Cost</th>
      <th scope="col">Image</th>
      <!-- <th-- scope="col">Description</th-->
      <th scope="col">Handle</th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach($decors as $key=>$decor)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$decor->decorationname}}</td>
      <td>{{$decor->decorationname}}</td>
      <td>{{$decor->decorationplace}}</td>
      <td>{{$decor->decorationcost}}</td>

      <td>
        <img width="100px" src="{{url('/uploads/'.$decor->image)}}" alt="">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection