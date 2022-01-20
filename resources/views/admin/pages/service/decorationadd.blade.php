@extends('welcome')
@section('content')
<h4>Decoration list form</h4>
<form action="{{route('admin.service.decorationstore')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTextDecorationName">Decoration Name</label>
      <input name="DecorationName" type="TextInputDecorationName" class="form-control" id="TextInputDecorationName" placeholder="Decoration name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputtext">Decoration Type</label>
      <input name="DecorationType" type="TextInputDecorationType" class="form-control" id="TextInputDecorationType" placeholder="Decoration Type">
    </div>
  </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputDecorationPlace">Decoration place</label>
       <input name="DecorationPlace" type="TextInputDecorationPlace" class="form-control" id="TextInputDecorationPlace" placeholder="Decoration place">
     </div>
     <div class="form-group col-md-6">
       <label for="inputDecorationcost">Decoration Cost</label>
       <input name="Decorationcost" type="TextInputDecorationcost" class="form-control" id="TextInputDecorationcost" placeholder="Decoration Cost">
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