@extends('front.master')

@section('content')
<!-- Banner Section Start -->
<div class="rs-banner main-home">
    <div class="container custom">
        <div class="content-wrap">
            <div class="border-line"></div>
            <h1 class="title">We maximize</h1>
            <h3 class="sub-title">your business growth</h3>
            <div class="btn-part">
                <a download class="readon consultant" href="{{url('/')}}/uploads/Alizhora-Company-Profile.pdf">Company Profile <i class="fa fa-download"></i></a>
            </div>
        </div>
    </div>
    <div class="animate-part">
        <div class="spiner dot">
            <img class="rotate_Y" src="{{asset('theme/assets/images/banner/style1/dot-rect.png')}}" alt="images">
        </div>
        <div class="spiner tri-circle">
            <img class="up-down" src="{{asset('theme/assets/images/banner/style1/tri-circle1.png')}}" alt="images">
        </div>
        <div class="spiner circle">
            <img class="up-down" src="{{asset('theme/assets/images/banner/style1/circle1.png')}}" alt="images">
        </div>
        <div class="spiner line">
            <img class="up-down" src="{{asset('theme/assets/images/banner/style1/line1.png')}}" alt="images">
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- About Section Start -->
<div class="rs-about main-home bg1 pt-110 pb-110 md-pt-70 md-pb-65">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <img src="{{asset('theme/assets/images/about/about.png')}}" alt="Images">
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="sec-title">
                    <h2 class="title pb-30">
                        We take your business to next level
                    </h2>
                    <span class="sub-text">Alizhora HR International is a dynamic consultancy dedicated to empower people towards excellence

                        in their careers and personal life through Transformative Leadership and

                        Management Training.</span>

                    <p class="margin-0">
                        Alizhora is a management consultancy centre with a highly qualified and experienced
                        team of dedicated human resource experts and takes pride in being your one stop centre
                        for human resource solutions.
                        We avail our time and resources to be up to speed with the latest and most transformative

                        leadership and management solution. Our training elements are structured towards nurtu-
                        ring your individual objectives and ensures high staff performance as per your desired

                        need
                    </p>
                    <div class="btn-part mt-45">
                        <a class="readon consultant discover" href="{{url('/')}}/the-company">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Services Section Start -->
<div class="rs-services main-home bg2 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-7">
               <div class="sec-title mb-70 md-mb-30">
                   <h2 class="title white-color">
                       What services we provide to our customers business
                   </h2>
               </div>
            </div>
            <div class="col-lg-5 text-right md-left">
                <div class="btn-part mb-90 md-mb-50">
                    <a class="readon consultant discover" href="{{url('/')}}/services">View Services</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-55 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/services/main-home/1.png')}}" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="business-planning.html">Business Planning</a></h2>
                        <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-55 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/services/main-home/2.png')}}" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="tax-strategy.html">Tax Strategy</a></h2>
                        <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-55 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/services/main-home/3.png')}}" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="financial-advices.html">Financial Advices</a></h2>
                        <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 md-mb-55 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/services/main-home/4.png')}}" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="insurance-strategy.html">Insurance Strategy</a></h2>
                        <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sm-mb-55 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/services/main-home/5.png')}}" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="start-ups.html">Start Ups</a></h2>
                        <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="{{asset('theme/assets/images/services/main-home/6.png')}}" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="manage-investment.html">Manage Investment</a></h2>
                        <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->


<!-- Why Choose Section Start -->
<div class="rs-choose bg5 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                <div class="sec-title mb-35">
                    <h2 class="title pb-30">
                        Why choose us
                    </h2>
                    <p class="margin-0">
                        1. Integrity – Build trust with clients and each other by actions and deliverables. We deliver
                        what we promise to our people and our clients.
                        <br>
                        2. Quality - We ensure we deliver high standards of deliverables time and again.
                        <br>
                        3. Collaboration - We together work towards achieving long term growth for our clients, stake
                        holders and benefit each other.
                        <br>
                        4. Respect - We create an environment where each person feels valued and treated with dignity
                    </p>
                </div>
                <!-- Skillbar Section Start -->
                <div class="rs-skillbar style1">
                    <div class="cl-skill-bar">
                       <!-- Start Skill Bar -->
                       <span class="skillbar-title">Human Resource Solutions</span>
                       <div class="skillbar" data-percent="100">
                           <p class="skillbar-bar"></p>
                           <span class="skill-bar-percent"></span>
                       </div>
                       <!-- Start Skill Bar -->
                       <span class="skillbar-title">Employee Selection & Placement</span>
                       <div class="skillbar" data-percent="100">
                           <p class="skillbar-bar"></p>
                           <span class="skill-bar-percent"></span>
                       </div>
                       <!-- Start Skill Bar -->
                       <span class="skillbar-title">Training</span>
                       <div class="skillbar" data-percent="100">
                           <p class="skillbar-bar"></p>
                           <span class="skill-bar-percent"></span>
                       </div>

                    </div>
                </div>
                <!-- Skillbar Section End -->
            </div>
            <div class="col-lg-6">
                <div class="rs-videos choose-video">
                    <div class="images-video">
                        <img src="{{asset('theme/assets/images/choose/chosse-video.jpg')}}" alt="images">
                    </div>
                    <div class="animate-border">
                        <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services chooseus-style pt-100 md-pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-30">
                    <div class="services-item" style="border-radius:10px">
                        <div class="services-icon">
                            <img src="{{asset('theme/assets/images/choose/icons/1.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="services-style1.html">Expert Personale</a></h3>
                            {{-- <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-30">
                    <div class="services-item" style="border-radius:10px">
                        <div class="services-icon">
                            <img src="{{asset('theme/assets/images/choose/icons/2.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="services-style1.html">Big experience</a></h3>
                            {{-- <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-item" style="border-radius:10px">
                        <div class="services-icon">
                            <img src="{{asset('theme/assets/images/choose/icons/3.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="services-style1.html">Committed to quality</a></h3>
                            {{-- <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->
</div>
<!-- Why Choose Section Start -->





<!-- Contact Section Start -->
<div class="rs-contact main-home bg8 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <h2 class="title title2 contact">
                Let us help your business to move forward.
            </h2>
        </div>
        <div class="row y-middle">
            <div class="col-lg-6">
                <div class="contact-map" style="border-radius:10px">
                    <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                </div>
            </div>
            <div class="col-lg-6 md-mt-55 pl-40 md-pl-15">
                <div class="contact-wrap">
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="#">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                </div>

                                <div class="col-lg-12 mb-35">
                                    <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Icon Section Start -->
    <div class="rs-contact contact-icons-style pt-100 md-pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 md-mb-30" style="border-radius:10px">
                    <div class="contact-item" style="border-radius:10px">
                       <div class="contact-icon" style="border-radius:10px">
                           <img src="{{asset('theme/assets/images/contact/icons/1.png')}}" alt="images">
                       </div>
                       <div class="content-text">
                           <h2 class="title"><a href="#">Nairobi Office</a></h2>
                           <p class="services-txt">Nairobi<br>
                            Kenya<br>
                            </p>
                       </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 xs-mb-30" style="border-radius:10px">
                    <div class="contact-item" style="border-radius:10px">
                       <div class="contact-icon" style="border-radius:10px">
                           <img src="{{asset('theme/assets/images/contact/icons/3.png')}}" alt="images">
                       </div>
                       <div class="content-text">
                           <h2 class="title"><a href="#">Email us</a></h2>
                            <a href="#">info@alizhorahrinternational.co.ke</a><br>
                            <a href="#">hello@alizhorahrinternational.co.ke</a>
                       </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" style="border-radius:10px">
                    <div class="contact-item" style="border-radius:10px">
                       <div class="contact-icon" style="border-radius:10px">
                           <img src="{{asset('theme/assets/images/contact/icons/4.png')}}" alt="images">
                       </div>
                       <div class="content-text">
                           <h2 class="title"><a href="#">Call us</a></h2>
                           <a href="tel:+254 740 736 877">+254 740 736 877</a>
                           <br>
                           <a href="tel:+254 716 351 111">+254 716 351 111</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Icon Section End -->
</div>
<!-- Contact Section End -->
@endsection
