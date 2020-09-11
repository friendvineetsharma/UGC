<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UGC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<style>
html {
  scroll-behavior: smooth;
}
#id2{
  margin-left: 150px;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  object-fit: cover;
}

#navigation{
  width: 800px;
}
.Appointment{
  margin-left: 180px;
}
</style>
<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{ url('http://127.0.0.1:8000')}}">
                                  <font color="white" size="6" face="">UGC</font>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ url('http://127.0.0.1:8000')}}">home</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="{{ url('http://127.0.0.1:8000/#form')}}">UGC List</a></li>
                                        <li><a href="/feedback">Feedback</a></li>
                                        <li><a href="/faq">F.A.Q</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                        <li>

                                                @if(isset(Auth::user()->email))
                                                  <a href=""><div id="id2">{{ Auth::user()->name }}<i class="ti-angle-down"></i></div>
                                                  </a>
                                                  <ul class="submenu">
                                                     <li><a href="{{ url('/profile') }}">Your Profile</a></li>
                                                     <li><a href="{{ url('edit') }}">Edit Profile</a></li>
                                                     <li><a href="{{ url('/changepassword') }}">Change Password</a></li>
                                                     <li><a href="{{ url('/main/logout') }}">Sign Out</a></li>
                                                  </ul>
                                                @else
                                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="{{ url('/main') }}">login</a>
                                </div>
                            </div>
                        </div>

                                                @endif

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
   @yield('body')

   <div class="discuss_projects">
   <div class="container">
       <div class="row">
           <div class="col-xl-12">
               <div class="project_text text-center">
                   <h3>Let’s discuss about a journal</h3>
                   <p>“A personal journal is an ideal environment in which to become.<br> It is a perfect place for you to think, feel, discover, expand, remember, and dream.” Brad Wilcox</p>
                   <a class="boxed-btn3" href="{{ url('http://127.0.0.1:8000/#form')}}">Start Talking</a>
               </div>
           </div>
       </div>
   </div>
   </div>

   <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="menu_links">
                            <ul>
                                <li><a href="/about">About</a></li>
                                <li><a href="/faq">F.A.Q</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="socail_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://127.0.0.1:8000" target="_blank">UGC</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="{{ asset('asset/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('asset/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('asset/js/ajax-form.js') }}"></script>
    <script src="{{ asset('asset/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('asset/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('asset/js/scrollIt.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('asset/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugins.js') }}"></script>
    <script src="{{ asset('asset/js/gijgo.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('asset/js/contact.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.form.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('asset/js/mail-script.js') }}"></script>

    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
