@extends('welcome')

@section('content')

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Album_name</th>
      <th scope="col">Photographer_Name</th>
      <th scope="col">Picture_description</th>
      <th scope="col">Photography_cost</th>
      <th scope="col">Image</th>
      <!-- <th-- scope="col">Description</th-->
      <th scope="col">Handle</th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach($photos as $key=>$photo)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$photo->albumname}}</td>
      <td>{{$photo->photographername}}</td>
      <td>{{$photo->imagedescreption}}</td>
      <td>{{$photo->photographycost}}</td>

      <td>
        <img width="100px" src="{{url('/uploads/'.$photo->albumimage)}}" alt="">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection