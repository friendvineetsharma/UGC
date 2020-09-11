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

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('/checkmail') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Email</label>
     <input type="email" name="email" class="form-control" />
    </div>
     <input type="submit" name="login" class="btn btn-primary" value="Verify" /><br><br>
     not registered? <a href="/register">Create an account</a>
    </div>
  </form><br><br>
  </div>
@endsection
