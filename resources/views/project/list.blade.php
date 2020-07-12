@extends('layout/master')

@section('body')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th{
  background-color: lightgreen;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

tr:nth-child(even) {
  background-color: lightblue;
}
</style>
@if(isset(Auth::user()->email))

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Services</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->

<br><br><strong><div align="center"><font size="6" face="Tiger Expert">Your list</font></div></strong><br><br>
<table>
  <tr>
    <th>Rank</th>
    <th>Full Journal Name</th>
    <th>ISSN</th>
    <th>Publisher</th>
    <th>UGC listed?</th>
    <th>Impact Factor</th>
    <th>No. of co-authors</th>
    <th>Are you main author?</th>
    <th>Score</th>
  </tr>
@foreach($data as $i)
  <tr>
    <td>{{$i->Rank}}</th>
    <td>{{$i->Title}}</td>
    <td>{{$i->ISSN}}</td>
    <td>{{$i->Publisher}}</td>
    <td>{{$i->UGC_listed}}</td>
    <td>{{$i->Impact_Factor}}</td>
    <td>{{$i->No_of_coauthors}}</td>
    <td>{{$i->Are_you_main_author}}</td>
    <td>{{$i->Score}}</td>
  </tr>
@endforeach
</table><br><br><br><br>
<div class="form-group">
    <a href="/search"><button style="cursor:pointer" type="submit" class="btn btn-primary">Back</button></a>
</div>
@else
 <script>window.location = "/main";</script>
@endif
@endsection
