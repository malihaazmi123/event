@extends('welcome')
@section('content')
<h4>Event Edit list form</h4>
<form action="{{route('event.add.eventupdate', $eventedit->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Event Name</label>
      <input name="eventName" value="{{$eventedit->eventname}}" type="TextInput" class="form-control" id="TextInputFoodtype" placeholder="event name">
    </div>
  </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputAddress">Event description</label>
       <input name="eventDescription" value="{{ $eventedit->eventdescripsion}}" type="TextInput" class="form-control" id="TextInputFoodQuantity" placeholder="event description">
     </div>
     
   </div>
      <div class="mb-3">
       <label for="EventTextInput" class="form-label">Image file </label>
       <input name="Imagefile" type="file" id="fileInput" class="form-control" placeholder="choose image">
      </div>
    </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
@endsection