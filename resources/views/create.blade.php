@extends('layout/master')

@section('body')

   <!-- bradcam_area  -->
   <div class="bradcam_area bradcam_bg_1">
       <div class="container">
           <div class="row">
               <div class="col-xl-12">
                   <div class="bradcam_text text-center">
                       <h3>Register</h3>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- /bradcam_area  -->
@if(isset(Auth::user()->email))
<script>window.location = "http://127.0.0.1:8000";</script>
@endif
  <br />
  <div class="container box">
   <h3 align="center">Register yourself</h3><br />

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif


   <form method="POST" action="/register">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group">
        <label for="dob">D.O.B:</label>
        <input type="date" class="form-control" id="dob" name="dob">
    </div>

    <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="mobile" class="form-control" id="mobile" name="mobile">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>

   </form>
  </div>
@endsection
