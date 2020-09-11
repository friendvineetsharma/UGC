@extends('layout/master')

@section('body')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Feedback</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->



<section class="contact-section section_padding">
  <div class="container">
<div class="row">
  <div class="col-12">
    <h2 class="contact-title">Get in Touch</h2>
  </div>
  <div class="col-lg-8">
    @if (count($errors) > 0)
     <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
      </ul>
     </div>
    @endif
    <form class="form-contact contact_form" action="/feedback" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-12">
          <div class="form-group">

              <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
          </div>
        </div>
      </div>
      <div class="form-group mt-3">
        <button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Feedback</button>
      </div>
    </form>
  </div>
</div>
</div>
</section>


@endsection
