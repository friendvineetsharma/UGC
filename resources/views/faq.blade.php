@extends('layout/master')

@section('body')
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel="stylesheet" href="{{ asset('asset/css/style1.css') }}">
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>F.A.Q</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  --><br><br><br>

<div class="container">

  <h2>Frequently Asked Questions</h2><br><br>

  <div class="accordion">
    <div class="accordion-item">
      <a>What can JavaScript Do?</a>
      <div class="content">
        <p>To put things simply, JavaScript is an object orient programming language designed to make web development easier and more attractive. In most cases, JavaScript is used to create responsive, interactive elements for web pages, enhancing the user experience.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How JavaScript Can Modify HTML and CSS Values?</a>
      <div class="content">
        <p>JavaScript can interact with stylesheets, allowing you to write programs that change a document's style dynamically. ... By working with the document's list of stylesheets—for example: adding, removing or modifying a stylesheet. By working with the rules in a stylesheet—for example: adding, removing or modifying a rule.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What Is SVG?</a>
      <div class="content">
        <p>SVG is a vector graphic format—based on XML and is used to display a variety of graphics on the Web and other environments. Under the hood, SVG documents are nothing more than simple plain text files that describe lines, curves, shapes, colors, and text.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How can I login into my account</a>
      <div class="content">
        <p>You can simply login to your account by clicking on top right button.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How can I logout my account</a>
      <div class="content">
        <p>You can simply logout your account by clicking on top right button.</p>
      </div>
    </div>
  </div>

</div><br><br><br><br>

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script  src="{{ asset('asset/js/functionjs.js') }}"></script>

@endsection
