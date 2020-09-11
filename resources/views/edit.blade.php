@extends('layout/master')

@section('body')
@if(isset(Auth::user()->email))
<style>
#blah{
  border-radius: 50%;
  width: 200px;
  height: 200px;
  object-fit: cover;
}
</style>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Edit profile</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->
<br><br><br><br>
<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
    <form class="form-horizontal" method="post"  action="{{ url('edit') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
       <input type="hidden" name="email" value="{{ Auth::user()->email }}" class="form-control" />
      </div>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img id="blah" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar"><br><br>
          <h6>Upload a different photo...</h6><br>
          <input type="file" class="text-center center-block file-upload" onchange="readURL(this);"name="image" multiple />
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        @if (count($errors) > 0)
        @foreach($errors->all() as $error)
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a>
          <i class="fa fa-coffee"></i>
          {{ $error }}
        </div>
        @endforeach
        @endif

        <h3>Personal info</h3>


          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">D.O.B:</label>
            <div class="col-lg-8">
              <input class="form-control" type="date" name="dob" value="{{ Auth::user()->dob }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Location:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="location" value="{{ Auth::user()->location }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">profession:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="profession" value="{{ Auth::user()->profession }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Bio:</label>
            <div class="col-md-8">
              <textarea class="form-control" name="bio">{{ Auth::user()->bio}}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">About Yourself:</label>
            <div class="col-md-8">
              <textarea class="form-control" name="about">{{ Auth::user()->about }}</textarea>
            </div>
          </div>
          <div class="form-group">
              <div class="col-xs-12">
                <br>
                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
              </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<script>
function readURL(input) {
           if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                   $('#blah')
                       .attr('src', e.target.result)
                       .width(200)
                       .height(200);
               };

               reader.readAsDataURL(input.files[0]);
           }
       }
</script>

@else
 <script>window.location = "/main";</script>
@endif
@endsection
