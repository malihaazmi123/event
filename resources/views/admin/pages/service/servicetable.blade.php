@extends('welcome')
@section('content')
<h4>Service list form</h4>
<form action="{{route('admin.service.Servicestore')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTextTypeId">Tyep Id</label>
      <select name="TypeId" type="TextInputTypeId" class="form-control" id="TextInputTypeId" placeholder="Type Id">
       @foreach($types as $type)
       <option
       value="{{$type->id}}">{{$type->name}}"
      </option>
      @endforeach
    </select>
      </div>
    <div class="form-group col-md-6">
      <label for="inputtextServiceName">Service Name</label>
      <input name="ServiceName" type="TextInputServiceName" class="form-control" id="TextInputServiceName" placeholder="Service Name">
    </div>
  </div>
  <div class="form-row">
   <div class="form-group col-md-6">
     <label for="inputServiceDescription">Service Description</label>
     <input name="ServiceDescription" type="TextInputServiceDescription" class="form-control" id="TextInputServiceDescription" placeholder="Service Description">
   </div>
    <div class="form-group col-md-6">
       <label for="inputServicePrice">Service Price</label>
       <input name="ServicePrice" type="TextInputServicePrice" class="form-control" id="TextInputServicePrice" placeholder="Service Price">
     </div>
     <div class="form-group col-md-6">
       <label for="inputServiceCode">Service Code</label>
       <input name="ServiceCode" type="TextInputServiceCode" class="form-control" id="TextInputServiceCode" placeholder="Service Code">
     </div>
    </div>
    <div class="mb-3">
       <label for="TextInput" class="form-label">Image file </label>
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