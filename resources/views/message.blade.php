@extends('layout/master')

@section('body')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Verify Email</h3>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<!-- /bradcam_area  -->
  <br />
  <div class="container box">
   <h3 align="center">Email</h3>
<hr color="red" width="1100px">
   @if(isset(Auth::user()->email))
    <script>window.location="/main/successlogin";</script>
   @endif

   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Email : {{$user['email']}}<br>Password : {{$user['data']}}<br><br>Please verify your email by logging in</strong>
   </div>

    <div class="form-group">
     <a href="{{ url('/main') }}"><input type="submit" name="login" class="btn btn-primary" value="login" /></a><br><br>
    </div><br><br>
  </div>
@endsection
