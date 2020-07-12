@extends('layout/master')

@section('body')
@if(isset(Auth::user()->email))
  <br />
  <div class="container box">
   <h3 align="center">Scores has been updated successfully..<br><br>Search your Journal</h3><br />

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
    <div class="form-group">
      <a href="/search">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Search</button>
      </a>
    </div>
  </div>
  @else
   <script>window.location = "/main";</script>
  @endif
@endsection
