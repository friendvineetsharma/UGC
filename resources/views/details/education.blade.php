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
                    <h3>Education</h3>
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
<form class="border border-dark"method="post"action="/sd"style="padding:25px;">
  {{ csrf_field() }}
  2.1. Schooling Details
  <hr>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Examination</th>
      <th scope="col">Year of Passing</th>
      <th scope="col">Main Subject</th>
      <th scope="col">Grade/Percentage</th>
      <th scope="col">School/College</th>
      <th scope="col">Board/University</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>10th/SSC/Matric</td>
      <td>
        <div class="form-group">
          <input type="number" class="form-control"name="year10"value="{{ Auth::user()->year10 }}"min="1980"max="{{ now()->year }}">
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" class="form-control"name="subject10"value="{{ Auth::user()->subject10 }}" placeholder="Enter Subject Names">
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="number" class="form-control"name="grade10"value="{{ Auth::user()->grade10 }}">
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" class="form-control"name="school10"value="{{ Auth::user()->school10 }}">
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" class="form-control"name="board10"value="{{ Auth::user()->board10 }}">
        </div>
      </td>
    </tr>
    <tr>
      <td>12th/Diploma</td>
      <td>
        <div class="form-group">
          <input type="number" class="form-control"name="year12"value="{{ Auth::user()->year12 }}"min="1980"max="{{ now()->year }}">
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" class="form-control" name="subject12" value="{{ Auth::user()->subject12 }}" placeholder="Enter Subject Names">
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="number" class="form-control"name="grade12"value="{{ Auth::user()->grade12 }}">
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" class="form-control"name="school12"value="{{ Auth::user()->school12 }}">
        </div>
      </td>
      <td>
        <div class="form-group">
          <input type="text" class="form-control"name="board12"value="{{ Auth::user()->board12 }}">
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
<div class="text-center">
<button type="submit" class="btn btn-primary btn-lg">Save & Add</button>
</div>
</form>
<div class="my-5"></div>
<form class="border border-dark"style="padding:25px;">
  2.2. Under-Graduation Details
  <div class="text-right">
    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#id03">Add</button>
  </div>
  <hr>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Degree Name</th>
      <th scope="col">Main Subject</th>
      <th scope="col">Grade/Percentage</th>
      <th scope="col">Year</th>
      <th scope="col">University/Institute</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    @foreach($data as $i)
    <tr>
      <td>#</td>
      <td>{{$i->name}}</td>
      <td>{{$i->subject}}</td>
      <td>{{$i->grade}}</td>
      <td>{{$i->year}}</td>
      <td>{{$i->institute}}</td>
      <td>{{$i->state}}</td>
      <td>{{$i->country}}</td>
      <td><a href="/deleteug/{{ $i->id }}"<button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>
    @endforeach
</table>
</div>
</form>
<div class="my-5"></div>
<div id="id03" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <form method="post"action="/ug">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Under-Graduation Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail4">Degree Name</label>
          <input type="text" class="form-control"name="name">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Main Subject</label>
          <textarea class="form-control"name="subject"></textarea>
        </div>
        <div class="form-group">
          <label for="inputPassword4">Grade/Percentage</label>
          <input type="text" class="form-control" name="grade">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Year</label>
          <input type="number"min="1980"max="{{ now()->year }}" class="form-control" name="year">
        </div>
        <div class="form-group">
          <label for="inputPassword4">University/Institute</label>
          <input type="text" class="form-control" name="institute">
        </div>
        <div class="form-group">
          <label for="inputPassword4">State</label>
          <input type="text" class="form-control" name="state">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Country</label>
          <input type="text" class="form-control" name="country">
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
<form class="border border-dark"style="padding:25px;">
  2.3. Post-Graduation Details
  <div class="text-right">
    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#id02">Add</button>
  </div>
  <hr>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Degree Name</th>
      <th scope="col">Main Subject</th>
      <th scope="col">Grade/Percentage</th>
      <th scope="col">Year</th>
      <th scope="col">University/Institute</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($post as $i)
  <tr>
    <td>#</td>
    <td>{{$i->name}}</td>
    <td>{{$i->subject}}</td>
    <td>{{$i->grade}}</td>
    <td>{{$i->year}}</td>
    <td>{{$i->institute}}</td>
    <td>{{$i->state}}</td>
    <td>{{$i->country}}</td>
    <td><a href="/deletepg/{{ $i->id }}"<button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  @endforeach
</table>
</div>
</form>
<div id="id02" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <form method="post"action="/pg">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post-Graduation Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail4">Degree Name</label>
          <input type="text" class="form-control"name="name">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Main Subject</label>
          <textarea class="form-control"name="subject"></textarea>
        </div>
        <div class="form-group">
          <label for="inputPassword4">Grade/Percentage</label>
          <input type="text" class="form-control" name="grade">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Year</label>
          <input type="number"min="1980"max="{{ now()->year }}" class="form-control" name="year">
        </div>
        <div class="form-group">
          <label for="inputPassword4">University/Institute</label>
          <input type="text" class="form-control" name="institute">
        </div>
        <div class="form-group">
          <label for="inputPassword4">State</label>
          <input type="text" class="form-control" name="state">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Country</label>
          <input type="text" class="form-control" name="country">
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
<div class="my-5"></div>

<form class="border border-dark"style="padding:25px;">
  2.4. Other Distinctions
  <div class="text-right">
    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#id01">Add</button>
  </div>
  <hr>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
      <th scope="col">University/Institute</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($detail as $i)
  <tr>
    <td>#</td>
    <td>{{$i->title}}</td>
    <td>{{$i->date}}</td>
    <td>{{$i->description}}</td>
    <td>{{$i->institute}}</td>
    <td><a href="/deleteod/{{ $i->id }}"<button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  @endforeach
</table>
</div>
</form>
<div id="id01" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <form method="post"action="/od">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Other Distinctions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail4">Title</label>
          <input type="text" class="form-control"name="title">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Date</label>
          <input type="date" class="form-control" name="date">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Description</label>
          <textarea class="form-control"name="description"></textarea>
        </div>
        <div class="form-group">
          <label for="inputPassword4">University/Institution</label>
          <input type="text" class="form-control" name="institute">
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
<a href="/research"><button type="submit" class="btn btn-primary btn-lg">Save & Next</button></a>
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
