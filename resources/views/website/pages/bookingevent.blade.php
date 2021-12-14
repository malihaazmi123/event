@extends('website.master')
@section('contents')
<div class="container" style="margin-top:150px;">
    <form  style="color :rgb(10, 10, 10)">
        <fieldset enabled>
          <legend class="text-center" style="padding-bottom: 12px;">Booking Event</legend>
          <div class="mb-3">
            <label for="EventName" class="form-label">Event Name </label>
        <input name="Event_name" type="EventTextName" id="EventName" class="form-control" placeholder="Event name">
          </div>
      
          <div class="mb-3">
            <label for="UserId" class="form-label">User Id</label>
        <input name="User_Id" type="UserId" id="UserId" class="form-control" placeholder="User Id">
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
        <input name="Email" type="email" id="Email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
        <input name="Password" type="Password" id="Password" class="form-control" placeholder="Password">
          </div>
          <div class="mb-3">
            <label for="EventDate" class="form-label"> Event Date</label>
      
               <input name="Event_Date" type="datetime-local" id="EventDate" class="form-control" placeholder="Event Date">    
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
</div>


@endsection