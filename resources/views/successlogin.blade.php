@extends('layout/master')

@section('body')


   @if(isset(Auth::user()->email))
    <script>window.location = "http://127.0.0.1:8000";</script>
   @else
    <script>window.location = "/main";</script>
   @endif

@endsection
