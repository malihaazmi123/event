@extends('welcome')
@section('content')
<h4>Type Add form</h4>
<form action="{{route('admin.service.TypeStore')}}" method="POST" enctype="#">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputtext">Type Name</label>
      <input name="TypeName" type="TextInputTypeName" class="form-control" id="TextInputTypeName" placeholder="Type Name">
    </div>
  </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputTypestatus">Type Status</label>
       <input name="Typestatus" type="TextInputTypestatus" class="form-control" id="TextInputTypestatus" placeholder="Type Status">
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