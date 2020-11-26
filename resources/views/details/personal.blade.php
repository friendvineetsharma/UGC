@extends('layout/master')

@section('body')

@if(isset(Auth::user()->email))
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Personal Details</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->

<div class="container">
<br><br>
@if (count($errors) > 0)
 <div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
   <li>{{ $error }}</li>
  @endforeach
  </ul>
 </div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button>
 <strong>{{ $message }}</strong>
</div>
@endif
<form method="post"action="/pd">
  {{ csrf_field() }}
  1. Personal Details
  <hr>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control"name="fname">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Middle Name</label>
      <input type="text" class="form-control"name="mname">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control"name="lname">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Gender</label>
      <select id="inputState" class="form-control"name="gender">
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputState">Category</label>
      <select id="inputState" class="form-control"name="category">
        <option>Unreserved</option>
        <option>SC</option>
        <option>ST</option>
        <option>OBC</option>
        <option>Economically Weaker Section</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Nationality</label>
      <select id="inputState" class="form-control"name="nationality">
        <option selected>India</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Date of Birth</label>
      <input type="date" class="form-control"name="dob">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Marital Status</label>
      <select id="inputState" class="form-control"name="marital_status">
        <option>Married</option>
        <option>Single</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Father Name</label>
      <input type="text" class="form-control"name="father">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Mother Name</label>
      <input type="text" class="form-control"name="mother">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Phone No.</label>
      <input type="number" class="form-control"name="mobile">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Aadhar No.</label>
      <input type="number" class="form-control"name="aadhar">
    </div>
  </div>
  <hr>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Correspondence Address</label>
    <textarea class="form-control" placeholder="1234 Main St"name="c_address"></textarea>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Permanent Address</label>
    <textarea class="form-control" placeholder="1234 Main St"name="p_address"></textarea>
  </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Save & Next</button>
</form>
<br><br>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@else
<script>window.location = "/main";</script>
@endif
@endsection
