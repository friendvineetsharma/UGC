@extends('layout/master')

@section('body')
@if(isset(Auth::user()->email))

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Change Password</h3>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<!-- /bradcam_area  -->

<br />
<div class="container box">
 <h3 align="center">Change Password</h3><br />

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


 <form method="POST" action="/change">
  {{ csrf_field() }}
  <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
      <label for="password">Confirm Password:</label>
      <input type="password" class="form-control" id="password1" name="password1">
  </div>
  <div class="form-group">
   <input type="hidden" name="email" value="{{ Auth::user()->email }}" class="form-control" />
  </div>
  <div class="form-group">
      <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
  </div>

 </form>
</div>

@else
 <script>window.location = "/main";</script>
@endif
@endsection
