@extends('welcome')
@section('content')
<h4>Photography Form</h4>
<form action="{{route('admin.service.photostore')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTextAlbumName">Album Name</label>
      <input name="AlbumName" type="TextInputAlbumName" class="form-control" id="TextInputAlbumName" placeholder="Album Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputtextPhotographername">Photographer Name</label>
      <input name="Photographername" type="TextInputPhotographername" class="form-control" id="TextInputPhotographername" placeholder="photographer Name">
    </div>
  </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputTextPicturedescription">Picture description</label>
       <input name="Picturedescription" type="TextInputPicturedescription" class="form-control" id="TextInputPicturedescription" placeholder="picture description">
     </div>
     <div class="form-group col-md-6">
       <label for="inputphotographycost">Photography Cost</label>
       <input name="Photographycost" type="TextInputPhotographycost" class="form-control" id="TextInputPhotographycost" placeholder="Photography cost">
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