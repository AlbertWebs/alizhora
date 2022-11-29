<!DOCTYPE html>
<html lang="zxx">

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('seo')
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon#">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/assets/images/Alizhora-logos-favicon.png')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/font-awesome.min.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/fonts/flaticon.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/owl.carousel.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/off-canvas.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{asset('theme/assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/responsive.css')}}">

    </head>

    <body class="defult-home">

        <div class="offwrap"></div>

        <!--Preloader start here-->
        <div id="pre-load">
           <div id="loader" class="loader">
               <div class="loader-container">
                   <div class='loader-icon'><img src="{{asset('theme/assets/images/Alizhora-logos-favicon.png')}}" alt="Alizhora HR International"></div>
               </div>
           </div>
       </div>
        <!--Preloader area end here-->

		<!-- Main content Start -->
        <div class="main-content">

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header header-transparent">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area style1">
                        <div class="container custom">
                            <div class="row y-middle">
                                <div class="col-lg-7">
                                    <div class="topbar-contact">
                                       <ul>
                                           <li>
                                               <i class="flaticon-email"></i>
                                               <a href="mailto:info@bizup.com">info@alizhorahrinternational.co.ke</a>
                                           </li>
                                           <li>
                                               <i class="flaticon-call"></i>
                                               <a href="tel:+254 740 736 877"> +254 740 736 877</a>
                                           </li>
                                           <li>
                                               <i class="flaticon-location"></i>
                                               Nairobi, Kenya
                                           </li>
                                       </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-right">
                                    <div class="toolbar-sl-share">
                                        <ul>
                                             <li class="opening"> <em><i class="flaticon-clock"></i>Monday - Friday / 8AM - 5PM</em> </li>
                                             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                             <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Topbar Area End -->

                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container custom">
                            <div class="row-table">
                                <div class="col-cell header-logo">
                                    <div class="logo-area">
                                        <a href="{{url('/')}}">
                                            <img class="normal-logo" src="{{asset('theme/assets/images/Alizhoralogos-2-light.png')}}" alt="logo">
                                            <img class="sticky-logo" src="{{asset('theme/assets/images/Alizhora-logos-1-dark.png')}}" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu hidden-md">
                                                <ul class="nav-menu">
                                                    <li class="rs-mega-menu  @if($page == "home") current-menu-item @endif">
                                                        <a href="{{url('/')}}">Home</a>
                                                    </li>
                                                    <li class="rs-mega-menu  @if($page == "company") current-menu-item @endif">
                                                        <a href="{{url('/')}}/the-company">The Company</a>
                                                    </li>
                                                    <li class="rs-mega-menu  @if($page == "service") current-menu-item @endif ">
                                                        <a href="{{url('/')}}/services">Services</a>
                                                    </li>
                                                    <li class="rs-mega-menu  @if($page == "sector") current-menu-item @endif ">
                                                        <a href="{{url('/')}}/the-sectors">Our Sectors</a>
                                                    </li>
                                                    <li class="rs-mega-menu  @if($page == "contact") current-menu-item @endif ">
                                                        <a href="{{url('/')}}/contact-us">Contact Us</a>
                                                    </li>

                                                </ul> <!-- //.nav-menu -->
                                            </nav>
                                        </div> <!-- //.main-menu -->
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <li class="search-parent">
                                                <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li class="humburger">
                                                <a id="nav-expander" class="nav-expander bar" href="#">
                                                    <div class="bar">
                                                        <span class="dot1"></span>
                                                        <span class="dot2"></span>
                                                        <span class="dot3"></span>
                                                        <span class="dot4"></span>
                                                        <span class="dot5"></span>
                                                        <span class="dot6"></span>
                                                        <span class="dot7"></span>
                                                        <span class="dot8"></span>
                                                        <span class="dot9"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->

                    <!-- Canvas Menu start -->
                    <nav class="right_menu_togle hidden-md">
                        <div class="close-btn">
                            <a id="nav-close" class="nav-close">
                                <div class="line">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </a>
                        </div>
                        <div class="canvas-logo">
                            <a href="{{url('/')}}"><img src="{{asset('theme/assets/images/Alizhoralogos-2-light.png')}}" alt="logo"></a>
                        </div>
                        <div class="offcanvas-text">
                            <p>
                                Alizhora HR International is a dynamic consultancy dedicated to empower people towards excellence in their careers and personal life through Transformative Leadership and Management Training.
                            </p>
                        </div>
                        <div class="media-img">
                            <img src="{{asset('theme/assets/images/off2.jpg')}}" alt="Images">
                        </div>
                        <div class="canvas-contact">
                            <div class="address-area">
                                <div class="address-list">
                                    <div class="info-icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">Address</h4>
                                        <em> Cianda House, Koinange Street
                                            Suite 24, Nairobi</em>
                                    </div>
                                </div>
                                <div class="address-list">
                                    <div class="info-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">Email</h4>
                                        <em><a href="mailto:support@alizhorahrinternational.co.ke">support@alizhorahrinternational.co.ke</a></em>
                                    </div>
                                 </div>
                                <div class="address-list">
                                    <div class="info-icon">
                                      <i class="flaticon-call"></i>
                                    </div>
                                    <div class="info-content">
                                      <h4 class="title">Phone</h4>
                                      <em>+254 740 736 877</em>
                                    </div>
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Canvas Menu end -->

                    <!-- Canvas Mobile Menu start -->
                    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                        <div class="close-btn">
                            <a id="nav-close2" class="nav-close">
                                <div class="line">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </a>
                        </div>
                        <ul class="nav-menu">
                            {{-- <li class="current-menu-item">
                                <a href="{{url('/')}}">Home</a>
                            </li> --}}
                            <li class="@if($page == "home") current-menu-item @endif">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="@if($page == "company") current-menu-item @endif">
                                <a href="{{url('/')}}/the-company">The Company</a>
                            </li>
                            <li class="@if($page == "service") current-menu-item @endif ">
                                <a href="{{url('/')}}/services">Services</a>
                            </li>
                            <li class="@if($page == "sector") current-menu-item @endif ">
                                <a href="{{url('/')}}/the-sectors">Our Sectors</a>
                            </li>
                            <li class="@if($page == "contact") current-menu-item @endif ">
                                <a href="{{url('/')}}/contact-us">Contact Us</a>
                            </li>

                        </ul> <!-- //.nav-menu -->
                        <div class="canvas-contact">
                              <div class="address-area">
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-location"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Address</h4>
                                          <em>                                 Cianda House, Koinange Street
                                            Suite 24, Nairobi</em>
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-email"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Email</h4>
                                          <em><a href="mailto:info@alizhorahrinternational.co.ke"> info@alizhorahrinternational.co.ke</a></em>
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-call"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Phone</h4>
                                          <em>+254 740 736 877</em>
                                      </div>
                                  </div>
                              </div>
                        </div>
                    </nav>
                    <!-- Canvas Menu end -->
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            @yield('content')


        </div>
        <!-- Main content End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 md-mb-10">
                            <div class="footer-logo mb-40">
                                <a href="{{url('/')}}"><img src="{{asset('theme/assets/images/Alizhoralogos-2-light.png')}}" alt=""></a>
                            </div>
                              <div class="textwidget white-color pb-40">
                              <p>
                                Alizhora HR International is a dynamic consultancy dedicated to empower people towards excellence

                                in their careers and personal life through Transformative Leadership and

                                Management Training.
                              </p>
                              </div>
                              <ul class="footer-social md-mb-30">
                                  <li>
                                      <a class="tooltip-top" data-tooltip="Linkedin" href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                                  </li>
                                  <li>
                                      <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                                  </li>

                                  <li>
                                      <a href="# " target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                                  </li>
                                  <li>
                                      <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                                  </li>
                                  <li>
                                    <a href="# " target="_blank"><span><i class="fa fa-comment"></i></span></a>
                                  </li>
                                <li>
                                    <a href="# " target="_blank"><span><i class="fa fa-map-marker"></i></span></a>
                                </li>

                              </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                            <h3 class="footer-title">Our Services</h3>
                            <ul class="site-map">
                                <li><a href="business-planning#">Human Resource Solutions</a></li>
                                <li><a href="tax-strategy#">Employee Selection & Placement</a></li>
                                <li><a href="financial-advices#">Training</a></li>
                                <li><a href="{{url('/')}}/terms-and-conditions">Terms and Conditions</a></li>
                                <li><a href="manage-investment#">Our Sectors</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                            <h3 class="footer-title">Contact Info</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">                                  Cianda House, Koinange Street
                                        Suite 24, Nairobi
                                        <br>
                                        </div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                       <a href="tel:+254 740 736 877">+254 740 736 877</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                       <a href="tel:+254 716 351 111">+254 716 351 111</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:info@alizhorahrinternational.co.ke">info@alizhorahrinternational.co.ke</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock-1"></i>
                                    <div class="desc">
                                        Office Hours: 8AM - 5PM
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                            <ul class="copy-right-menu">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/')}}/the-company">The Company</a></li>
                                <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                                <li><a href="{{url('/')}}/contact-us">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright text-lg-start text-center ">
                                <p>Copyright © {{date('Y')}} <a href="{{url('/')}}/copyright-statement">Alizhora HR International</a> - All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->


        <!-- Search Modal Start -->
        <div class="modal fade search-modal" id="searchModal" tabindex="-1">
            <button type="button" class="close" data-bs-dismiss="modal">
                <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                                <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{asset('theme/assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
        <!-- op nav js -->
        <script src="{{asset('theme/assets/js/jquery.nav.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{asset('theme/assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{asset('theme/assets/js/skill.bars.jquery.js')}}"></script>
        <!-- imagesloaded js -->
        <script src="{{asset('theme/assets/js/imagesloaded.pkgd.min.js')}}"></script>
         <!-- waypoints.min js -->
        <script src="{{asset('theme/assets/js/waypoints.min.js')}}"></script>
        <!-- counterup.min js -->
        <script src="{{asset('theme/assets/js/jquery.counterup.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{asset('theme/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- contact form js -->
        <script src="{{asset('theme/assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('theme/assets/js/main.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("body").tooltip({ selector: '[data-toggle=tooltip]' });
            });
        </script>
    </body>

</html>
