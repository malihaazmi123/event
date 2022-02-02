@extends('website.master')
@section('contents')

<div class="container" style="margin-top:150px;">
  @if (session()->has('msg'))
     <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
    <form action="{{route('website.registration.form')}}" method="POST" style="color :rgb(10, 10, 10)" enctype="multipart/form-data">
      @csrf
        <fieldset enabled>
          <legend class="text-center" style="padding-bottom: 12px;">Registration Form</legend>
          <div class="mb-3">
            <label for="UserName" class="form-label">User Name </label>
        <input name="User_name" type="UserTextName" id="UsertName" class="form-control" placeholder="User name" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input  name="phone" type="tel" id="phone" class="form-control" placeholder="Phone number" required>
          </div>
          <div class="mb-3">
            <label for="browswes" class="form-label">Gender</label>
            <input name="Gender" type="GenderText" id="gender" class="form-control" placeholder="Gender">
          <datalist id="browsers">
            <option value="1">Female</option>
            <option value="2">Male</option>
            <option value="3">Other's</option>
          </datalist>
        </div>
        <div class="mb-3">
            <label for="EventDate" class="form-label">BirthDate</label>
      
               <input name="Event_Date" type="datetime-local" id="Date" class="form-control" placeholder="Date" required>    
               <select id="enabledSelect" class="form-select">
            </select>
          </div>
          <div class="form-floating mb-3">
            <label for="floatingInput">Email address</label>
            <input name="email" type="email" class="form-control" id="floatingemail" placeholder="name@example.com" required>
          </div>
          <div class="form-floating">
            <label for="floatingPassword">Password</label>
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
          </div>

          {{-- <div class="mb-3">
            <label for="EventTextInput" class="form-label">Image file </label>
            <input name="Imagefile" type="file" id="fileInput" class="form-control" placeholder="choose image">
         </div> --}}
    
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


