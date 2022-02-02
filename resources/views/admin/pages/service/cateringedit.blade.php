@extends('welcome')
@section('content')
<h4>Catering list form</h4>
<form action="{{route('admin.update.catering', $servicedit->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Service Type</label>
      <select name="TypeId">
        @foreach ($types as $type)
        <option 
        @if($type->id == $servicedit->type_id) 
        selected
        @endif
        value="{{$type->id}}">{{$type->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Service Name</label>
      <input name="ServiceName" value="{{ $servicedit->name}}" type="TextInput" class="form-control" id="TextInputFoodtype" placeholder="Food Type">
    </div>
  </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputAddress">Service description</label>
       <input name="ServiceDescription" value="{{ $servicedit->description}}" type="TextInput" class="form-control" id="TextInputFoodQuantity" placeholder="Food Quantity">
     </div>
     <div class="form-group col-md-6">
       <label for="inputAddress2">Service code</label>
       <input name="FoodPrice" value="{{ $servicedit->status}}" type="TextInput" class="form-control" id="TextInputFoodPrice" placeholder="Food Price">
     </div>
     <div class="form-group col-md-6">
      <label for="inputAddress2">Service Price</label>
      <input name="ServicePrice" value="{{ $servicedit->price}}" type="TextInput" class="form-control" id="TextInputFoodPrice" placeholder="Food Price">
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