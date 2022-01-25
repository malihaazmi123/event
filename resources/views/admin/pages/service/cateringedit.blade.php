@extends('welcome')
@section('content')
<h4>Catering list form</h4>
<form action="{{route('admin.update.catering', $servicedit->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Food Name</label>
      <input name="FoodName" value="{{ $servicedit->type_id}}" type="TextInput" class="form-control" id="TextInputFoodName" placeholder="Food name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Food Type</label>
      <input name="FoodType" value="{{ $servicedit->name}}" type="TextInput" class="form-control" id="TextInputFoodtype" placeholder="Food Type">
    </div>
  </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputAddress">Food Quantity</label>
       <input name="FoodQuantity" value="{{ $servicedit->description}}" type="TextInput" class="form-control" id="TextInputFoodQuantity" placeholder="Food Quantity">
     </div>
     <div class="form-group col-md-6">
       <label for="inputAddress2">Food Price</label>
       <input name="FoodPrice" value="{{ $servicedit->status}}" type="TextInput" class="form-control" id="TextInputFoodPrice" placeholder="Food Price">
     </div>
     <div class="form-group col-md-6">
      <label for="inputAddress2">Food Price</label>
      <input name="FoodPrice" value="{{ $servicedit->price}}" type="TextInput" class="form-control" id="TextInputFoodPrice" placeholder="Food Price">
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
  <button type="submit" class="btn btn-primary">submit</button>
</form>
@endsection