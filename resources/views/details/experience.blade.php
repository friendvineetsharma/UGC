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
                    <h3>Experience</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->

<div class="container">
<br><br>
<form class="border border-dark"style="padding:25px;">
  3. Relevent Experience
  <div class="text-right">
    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#id01">Add</button>
  </div>
  <hr>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Name of Organization</th>
      <th scope="col">Designation</th>
      <th scope="col">Pay Band & Grade Pay(6th CPC)</th>
      <th scope="col">Pay Level(7th CPC)</th>
      <th scope="col">Status</th>
      <th scope="col">from</th>
      <th scope="col">to</th>
      <th scope="col">Experience</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($data as $i)
  <tr>
    <td>#</td>
    <td>{{$i->type}}</td>
    <td>{{$i->name}}</td>
    <td>{{$i->designation}}</td>
    <td>{{$i->pay_band}}</td>
    <td>{{$i->pay_level}}</td>
    <td>{{$i->status}}</td>
    <td>{{$i->from}}</td>
    <td>{{$i->to}}</td>
    <td>{{$i->experience}}</td>
    <td><a href="/deleteexp/{{ $i->id }}"<button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  @endforeach
</table>
</div>
</form>
<div class="my-5"></div>
<div id="id01" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <form method="post"action="/exp">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Relevent Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail4">Type</label>
          <input type="text" class="form-control" name="type">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Name of Organization</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Designation</label>
          <input type="text" class="form-control" name="designation">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Pay Band & Grade Pay(6th CPC)</label>
          <input type="number"class="form-control" name="pay_band">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Pay Level(7th CPC)</label>
          <input type="number"class="form-control" name="pay_level">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Status</label>
          <input type="text" class="form-control" name="status">
        </div>
        <div class="form-group">
          <label for="inputPassword4">From</label>
          <input type="text" class="form-control" name="from">
        </div>
        <div class="form-group">
          <label for="inputPassword4">To</label>
          <input type="text" class="form-control" name="to">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Experience</label>
          <input type="text" class="form-control" name="experience">
        </div>
        <div class="form-group">
          <input type="hidden" class="form-control" name="key"value="{{ Auth::user()->id }}">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>
<br><br>
<div class="text-center">
<button type="submit" class="btn btn-primary btn-lg">Submit</button>
</div>
<br><br>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@else
<script>window.location = "/main";</script>
@endif
@endsection
