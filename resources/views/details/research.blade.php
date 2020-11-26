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
                    <h3>Research</h3>
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
<form class="border border-dark"style="padding:25px;">
  4.1. Research Papers/Review Articals/Conference Proceedings(in Related Areas Only),if any
  <div class="text-right">
    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#id01">Add</button>
  </div>
  <hr>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Publication Type</th>
      <th scope="col">Title of the Paper</th>
      <th scope="col">Journal Name/Page Numbers</th>
      <th scope="col">ISSN/ISBN No.</th>
      <th scope="col">Refereed</th>
      <th scope="col">Author</th>
      <th scope="col">Year</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($data as $i)
  <tr>
    <td>#</td>
    <td>{{$i->type}}</td>
    <td>{{$i->title}}</td>
    <td>{{$i->name}}</td>
    <td>{{$i->ISSN}}</td>
    <td>{{$i->refereed}}</td>
    <td>{{$i->author}}</td>
    <td>{{$i->year}}</td>
    <td><a href="/deleterpp/{{ $i->id }}"<button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  @endforeach
</table>
</div>
</form>
<div class="my-5"></div>
<div id="id01" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <form method="post"action="/rpp">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Research Papers/Review Articals/Conference Proceedings(in Related Areas Only)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail4">Publication Type</label>
          <input type="text" class="form-control" name="type">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Title of the Paper</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Journal Name/Page Numbers</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label for="inputPassword4">ISSN/ISBN No.</label>
          <input type="text"class="form-control" name="ISSN">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Refereed</label>
          <input type="text"class="form-control" name="refereed">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Author</label>
          <input type="text" class="form-control" name="author">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Year</label>
          <input type="number"max="{{ now()->year }}" class="form-control" name="year">
        </div>
        <div class="form-group">
          <input type="hidden"class="form-control" name="key"value="{{ Auth::user()->id }}">
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
  4.2. Research Publications - Books/Chapters,Edited work,Articals etc.(in Related Areas Only),if any
  <div class="text-right">
    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#id02">Add</button>
  </div>
  <hr>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Publication Type</th>
      <th scope="col">Title</th>
      <th scope="col">ISSN/ISBN No.</th>
      <th scope="col">Refereed</th>
      <th scope="col">Auther/Co-Author</th>
      <th scope="col">Publisher(city/country)</th>
      <th scope="col">Year</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($detail as $i)
  <tr>
    <td>#</td>
    <td>{{$i->type}}</td>
    <td>{{$i->title}}</td>
    <td>{{$i->ISSN}}</td>
    <td>{{$i->refereed}}</td>
    <td>{{$i->author}}</td>
    <td>{{$i->publisher}}</td>
    <td>{{$i->year}}</td>
    <td><a href="/deleterpb/{{ $i->id }}"<button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  @endforeach
</table>
</div>
</form>
<div class="my-5"></div>
<div id="id02" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <form method="post"action="/rpb">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Research Publications - Books/Chapters,Edited work,Articals etc.(in Related Areas Only)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail4">Publication Type</label>
          <input type="text" class="form-control" name="type">
        </div>
        <div class="form-group">
          <label for="inputEmail4">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <label for="inputPassword4">ISSN/ISBN No.</label>
          <input type="text"class="form-control" name="ISSN">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Refereed</label>
          <input type="text"class="form-control" name="refereed">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Author/Co-Author</label>
          <input type="text" class="form-control" name="author">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Publisher(city/country)</label>
          <input type="text" class="form-control" name="publisher">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Year</label>
          <input type="number"max="{{ now()->year }}" class="form-control" name="year">
        </div>
        <div class="form-group">
          <input type="hidden"class="form-control" name="key"value="{{ Auth::user()->id }}">
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
  4.3. Research Projects, if any
  <div class="text-right">
    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#id03">Add</button>
  </div>
  <hr>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Major/Minor</th>
      <th scope="col">Period(Months)</th>
      <th scope="col">Total Grant/Funding Recieved(Rs.)</th>
      <th scope="col">Name of Sponsoring/Funding Agency</th>
      <th scope="col">Outcome of the Project</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($post as $i)
  <tr>
    <td>#</td>
    <td>{{$i->title}}</td>
    <td>{{$i->major_minor}}</td>
    <td>{{$i->period}}</td>
    <td>{{$i->total_grant}}</td>
    <td>{{$i->funding}}</td>
    <td>{{$i->outcome}}</td>
    <td><a href="/deleterpj/{{ $i->id }}"<button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  @endforeach
</table>
</div>
</form>
<div class="my-5"></div>
<div id="id03" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <form method="post"action="/rpj">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Research Projects</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail4">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Major/Minor</label>
          <select id="inputState" class="form-control"name="major_minor">
            <option>Major</option>
            <option>Minor</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputPassword4">Period(Months)</label>
          <input type="number"class="form-control" name="period">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Total Grant/Funding Recieved(Rs.)</label>
          <input type="number" class="form-control" name="total_grant">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Name of Sponsoring/Funding Agency</label>
          <input type="text" class="form-control" name="funding">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Outcome of the Project</label>
          <input type="text" class="form-control" name="outcome">
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
<a href="/exp"><button type="submit" class="btn btn-primary btn-lg">Save & Next</button></a>
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
