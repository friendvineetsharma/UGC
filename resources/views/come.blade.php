@extends('layout/master')

@section('body')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Home</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->

<!-- service_area  -->
<div id="form"></div>
<div class="service_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-65">
                    <span>Service Provided</span>
                    <h3>UCG List  <br>
                            Search your Journal</h3>
                </div>
            </div>
        </div>
        <form method="post" action="/list">
         {{ csrf_field() }}
         <div class="form-group">
             <label for="search">Select by</label>
             <select class="form-control" id="Search" name="Search">
            <option value="Rank">Rank</option>
            <option value="Title">Title</option>
            <option value="ISSN">ISSN</option>
            <option value="Publisher">Publisher</option>
          </select>
         </div>
         <div class="form-group">
             <label for="name">Search for</label>
             <input type="text" class="form-control" id="ISSN" name="ISSN">
         </div>

         <div class="form-group">
             <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
         </div>
        </form>
    </div>
</div>
<!--/ service_area  -->
<hr color="red"width="1200px">

<div class="whole-wrap">
<div class="container box_1170">
<div class="section-top-border">
  <div class="row">
    <div class="col-md-4">
      <h3 class="mb-20">Articals</h3>
      <ol class="ordered-list">
        <li>COMMENTARY: Current Science, 118, 12,<br> 25th June 2020<br><u><a href="https://www.currentscience.ac.in/Volumes/118/12/1869.pdf">Assessing research: the slippery slope</a></u><br>Bhushan Patwardhan and Gautam R. Desiraju</li>
        <li>INTERVIEW: The Scholarly Kitchen,<br>5th February 2020<br><u><a href="https://scholarlykitchen.sspnet.org/2020/02/05/indias-fight-against-predatory-journals-an-interview-with-professor-bhushan-patwardhan/">India’s Fight Against Predatory Journals: An Interview with Professor Bhushan Patwardhan</a></u></li>
        <li><u><a href="https://sites.google.com/view/informationresources/home">more...</a></u><br></li>
      </ol>
    </div>
    <div class="col-md-4 mt-sm-30">
      <h3 class="mb-20">Notifications</h3>
      <div class="">
        <ul class="unordered-list">
          <u><li><a href="https://www.ugc.ac.in/pdfnews/2284767_self-plagiarism001.pdf">UGC-CARE Public notice : 20th April 2020</a></li>
          <li><a href="https://www.ugc.ac.in/pdfnews/9836633_Research-and-Publication-Ethics.pdf">UGC-CARE Public notice : December 2019</a></li>
          <li><a href="https://www.ugc.ac.in/pdfnews/9297765_English.pdf">UGC-CARE Public notice : 16th September 2019</a></li>
          <li><a href="https://www.ugc.ac.in/pdfnews/6315352_UGC-Public-Notice-CARE.pdf">UGC-CARE Public notice : 14th June 2019</a></li>
          <li><a href="https://www.ugc.ac.in/pdfnews/8091765_UGC-Journals.pdf">UGC-CARE Public notice : 28th November 2018</a></li>
        </ul></u>
      </div>
    </div>
    <div class="col-md-4 mt-sm-30">
      <h3 class="mb-20">Important Notices</h3>
      <div class="">
        <ul class="unordered-list">
          <li>Recommending any journal, through the proper proforma and process is free and the UGC does not collect any fees for the same. However, it has come to our attention that universities are charging for such recommendations by their iqac and other bodies. Researchers, editors and publishers are requested to note that no such charges have been imposed by the UGC.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<br><br><br>

<!-- about_me  -->
<div class="about_me">
<div class="about_large_title d-none d-lg-block">
        About
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-xl-6 col-md-6">
            <div class="about_e_details">
                <h3>About us</h3>
                <p>To match global standards of high quality research, in all academic disciplines under its purview, the University Grants Commission (UGC) aspires to stimulate and empower the Indian academia through its “Quality Mandate”. A public notice was issued by the UGC, on the 28th of November, 2018, to announce the establishment of a dedicated Consortium for Academic and Research Ethics (CARE) to carry out this mandate.</p>
                <div class="download_cv">
                    <a class="boxed-btn3" href="">See More</a>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="about_img">
                <div class="color_pattern d-none d-lg-block">
                    <img src="{{ asset('asset/img/about/color_grid.png') }}" alt="">
                </div>
                <div class="my_Pic">
                        <img src="{{ asset('asset/img/about/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/ about_me  -->

<!-- testimonial_area  -->
<div class="testimonial_area ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                  @foreach($data as $i)
                    <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                    <div class="quote">
                                        <img src="{{ asset('asset/img/testmonial/quote.svg') }}" alt="">
                                    </div>
                                    <p>{{$i->message}}<br><br></p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                                <img src="{{ asset('asset/img/testmonial/thumb.png') }}" alt="">
                                        </div>
                                        <h3>{{$i->name}}</h3>
                                        <span>{{$i->email}}</span>
                                    </div>
                                </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->
@endsection
