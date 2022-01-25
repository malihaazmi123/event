@extends('welcome')

@section('content')

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Food_name</th>
      <th scope="col">Food_Type</th>
      <th scope="col">Food_Quantity</th>
      <th scope="col">Food_Price</th>
      <th scope="col">Image</th>
      <!-- <th-- scope="col">Description</th-->
      <th scope="col">Handle</th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach($cates as $key=>$cate)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$cate->foodname}}</td>
      <td>{{$cate->foodtype}}</td>
      <td>{{$cate->foodquantity}}</td>
      <td>{{$cate->foodcost}}</td>

      <td>
        <img width="100px" src="{{url('/uploads/'.$cate->Image)}}" alt="">
      </td>
      <td>
 <a class="btn btn-light" style="color: rgb(179, 125, 19)" href="{{route('admin.view.catering',$cate->id)}}">view</a>
 <a class="btn btn-light" style="color: rgb(179, 125, 19)" href="{{route('admin.delete.catering',$cate->id)}}">Delete</a>
 <a class="btn btn-light" style="color: rgb(179, 125, 19)" href="{{route('admin.edit.catering',$cate->id)}}">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection