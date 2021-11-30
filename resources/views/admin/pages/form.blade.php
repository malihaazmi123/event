@extends('welcome')

@section('content')
<form action= "{{route('eventlist')}}" method="POST" style="color :white">
  @csrf
  <fieldset enabled>
    <legend>Create Event list</legend>
    <div class="mb-3">
      <label for="EventTextInput" class="form-label">Event name </label>
  <input name="Event_name" type="text" id="EventTextInput" class="form-control" placeholder="Event name">
    </div>

    <div class="mb-3">
      <label for="EventTextInput" class="form-label">User name </label>
  <input name="User_name" type="text" id="EventTextInput" class="form-control" placeholder="User name">
    </div>
    <div class="mb-3">
      <label for="EventTextInput" class="form-label">Event status </label>
  <input name="Event_status" type="text" id="EventTextInput" class="form-control" placeholder="Event status">
    </div>
    <div class="mb-3">
      <label for="EventTextInput" class="form-label"> Event Date</label>

         <input name="Event_Date" type="EventTextInput" id="EventTextInput" class="form-control" placeholder="Event Date">    
         <select id="enabledSelect" class="form-select">
         <option> Event Date</option>
      </select>
    </div>
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
