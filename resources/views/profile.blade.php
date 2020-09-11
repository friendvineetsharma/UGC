@extends('layout/master')

@section('body')

@if(isset(Auth::user()->email))
<style>
body{
    background: -webkit-linear-gradient(left, #f2f2f2, #f2f2f2);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    border-radius: 50%;
    width: 250px;
    height: 250px;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
    margin-left: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
#id1{
  border-radius: 50%;
  width: 250px;
  height: 250px;
  object-fit: cover;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Profile</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->

<div class="container emp-profile">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img id="id1" src="{{asset('asset\img\uploads\\' . Auth::user()->image) }}" alt="image"/>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-head"><br><br>
                                    <h7><font color="green">
                                    HELLO EVERYBODY, I AM
                                  </font></h7><br><br>
                                    <h5>
                                        {{ Auth::user()->name }}
                                    </h5>
                                    <h6>
                                        {{ Auth::user()->profession }}
                                    </h6><br>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work"><h7>
                        <u><font color="green">BIO</font></u>
                      </h7><br><br>
                            {{ Auth::user()->bio }}
                        </div>
                    </div>
                    <div class="col-md-8">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Info</a>
                          </li>
                      </ul>
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
                                        <p><font color="black">{{ Auth::user()->about }}</font></p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->username }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>D.O.B</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->dob }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->mobile }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->location }}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@else
<script>window.location = "/main";</script>
@endif
@endsection
