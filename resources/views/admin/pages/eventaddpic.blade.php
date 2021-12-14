@extends('welcome')

@section('content')
<form action="{{route('event.add.list')}}" method="POST" style="color :white" enctype="multipart/form-data">
    @csrf
  <fieldset enabled>
    <legend>Add Event</legend>
    <div class="mb-3">
      <label for="EventTextInput" class="form-label">Event name </label>
  <input name="Event_name" type="text" id="EventTextInput" class="form-control" placeholder="Event name">
    </div>

    <div class="mb-3">
      <label for="EventTextInput" class="form-label">Event description </label>
  <input name="eventdescription" type="text" id="EventdescriptionTextInput" class="form-control" placeholder="Event descreption">
    </div>
    <div class="mb-3">
      <label for="EventTextInput" class="form-label">Image file </label>
  <input name="Imagefile" type="file" id="fileInput" class="form-control" placeholder="choose image">
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="enabledFieldsetCheck" enabled>
        <label class="form-check-label" for="enabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@endsection