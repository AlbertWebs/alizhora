@extends('front.master')

@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img9">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Have questions - contact us
                <span class="watermark">Contact</span>
            </h1>
            <span class="sub-text">Alizhora HR International is a dynamic consultancy dedicated to empower people towards excellence in their careers and personal life through Transformative Leadership and Management Training.</span>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Contact Section Start -->
<div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                <div class="contact-map" style="border-radius:10px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.27029101627!2d36.8183125!3d-1.2833125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab5c55ac7a084c8e!2sAlizhora%20HR%20International!5e0!3m2!1sen!2ske!4v1667040159618!5m2!1sen!2ske"></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title mb-45 md-mb-25">
                    <h2 class="title pb-20">
                        Let us help your business to move <span>forward.</span>
                    </h2>
                    <p class="margin-0">
                        Alizhora HR International is a dynamic consultancy dedicated to empower people towards excellence in their careers and personal life through Transformative Leadership and Management Training.
                    </p>
                </div>
                <div class="contact-wrap">
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="#">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="name" name="name"
                                        placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="email" name="email"
                                        placeholder="E-Mail" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="phone" name="phone"
                                        placeholder="Phone Number" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="Website" name="subject"
                                        placeholder="Your Website" required="">
                                </div>

                                <div class="col-lg-12 mb-35">
                                    <textarea class="from-control" id="message" name="message"
                                        placeholder="Your message Here" required=""></textarea>
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input style="border-radius:10px" class="readon submit" type="submit" value="Send Message">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Icon Section Start -->
    <div class="rs-contact main-home">
        <div class="container">
            <div class="contact-icons-style box-address pt-100 md-pt-70">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 md-mb-30">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <img src="{{asset('theme/assets/images/contact/icons/1.png')}}" alt="images">
                            </div>
                            <div class="content-text">
                                <h2 class="title"><a href="#">Nairobi office</a></h2>
                                <p class="services-txt">                                 Cianda House, Koinange Street
                                    Suite 24, nairobi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 xs-mb-30">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <img src="{{asset('theme/assets/images/contact/icons/3.png')}}" alt="images">
                            </div>
                            <div class="content-text">
                                <h2 class="title"><a href="#">Email us</a></h2>
                                <a href="#">info@alizhorahrinternational.co.ke</a><br>
                                <a href="#">support@alizhorahrinternational.co.ke</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <img src="{{asset('theme/assets/images/contact/icons/4.png')}}" alt="images">
                            </div>
                            <div class="content-text">
                                <h2 class="title"><a href="#">Call us</a></h2>
                                <a href="tel:+254 740 736 877">+254 740 736 877</a><br>
                                <a href="tel:+254 716 351 111">+254 716 351 111</a>
                            </div>
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
