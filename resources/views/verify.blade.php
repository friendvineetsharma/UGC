<html>
 <head>
  <title>Email Verify</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="container box">
 <h3 align="center">Verify your email address..<br></h3>
 <h5>An otp has been sent to your email address {{$user['email']}}<br></h5>
<hr color="red" width="1100px">

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

 <form name="form1" method="post" action="{{ url('checkverify') }}">
  {{ csrf_field() }}
  <div class="form-group">
   <input type="hidden" name="email" value="{{$user['email']}}" class="form-control" />
  </div>
  <div class="form-group">
   <label>Enter OTP</label>
   <input type="otp" name="otp" class="form-control" />
  </div>
  <div class="form-group">
   <input type="submit" name="login" class="btn btn-primary" value="Login" onclick="stringlength(document.form1.otp,6,6)" />
  </div>
</form><br><br>
</div>
</body>
<script>
function stringlength(inputtxt, minlength, maxlength)
{
var field = inputtxt.value;
var mnlen = minlength;
var mxlen = maxlength;

if(field.length<mnlen || field.length> mxlen)
{
alert("Please input the OTP of " +mnlen+ " characters");
return false;
}
}
</script>
</html>
