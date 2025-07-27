@extends('layouts.app')

@section('content')
        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background primary-overlay" data-overlay-dark="7" data-background="img/bg/bg-19.jpg">
            <div class="row position-relative z-index-1">
                <div class="col-md-12">
                    <div class="faded-text">
                        <div class="f-text"><span class="main-font">Contact Us</span></div>
                    </div>
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#!">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- CONTACT INFO
        ================================================== -->


        <!-- CONTACT FORM
        ================================================== -->
        <section class="bg-light">
            <div class="container">
                <div class="row justify-content-center mt-3">
                    <div class="col-lg-7 mb-2-2 mb-lg-0">
                        <div class="p-1-9 p-lg-2-2 box-shadows h-100">
                            <h2 class="mb-2-5 text-primary">Contact With Us</h2>
                            <form class="contact quform" action="quform/contact.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Your Name <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Your Email <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Contact Number</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <label for="message">Message <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="form-group">
                                                    <div class="quform-input">
                                                        <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="quform-captcha">
                                                        <div class="quform-captcha-inner">
                                                            <img src="images/courier-new-light.png" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn border-0" type="submit"><i class="ti-arrow-right icon-arrow before"></i><span class="label">Send Message</span><i class="ti-arrow-right icon-arrow after"></i></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="box-shadows p-1-9 p-lg-2-2 h-100">
                            <h2 class="mb-3 text-primary text-capitalize h3">Our contact detail</h2>
                            <p class="mb-2-2">Digital Solution And Any Related Services Company Field. Write us some words about your question.</p>
                            <div class="d-flex mb-4 pb-3 border-bottom border-color-extra-light-gray">
                                <div class="flex-shrink-0 mt-2">
                                    <i class="fas fa-phone-alt text-secondary fs-2"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h3 class="h5">Phone Number</h3>
                                    <span class="text-muted d-block mb-1">+2347064330777</span>
                                    <!-- <span class="text-muted">(+44) 152-567-987</span> -->
                                </div>
                            </div>
                            <div class="d-flex mb-4 pb-3 border-bottom border-color-extra-light-gray">
                                <div class="flex-shrink-0 mt-2">
                                    <i class="far fa-envelope-open text-secondary fs-2"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h3 class="h5 mb-1">Email Address</h3>
                                    <span class="text-muted d-block mb-1">webdesignernigeria@gmail.com</span>
                                    <!-- <span class="text-muted">info@domain.com</span> -->
                                </div>
                            </div>
                            <div class="d-flex mb-4 pb-3 border-bottom border-color-extra-light-gray">
                                <div class="flex-shrink-0 mt-2">
                                    <i class="fas fa-map-marker-alt text-secondary fs-2"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h3 class="h5 mb-1">Loaction</h3>
                                    <address class="text-muted d-block mb-0 w-md-80 w-xl-70">No1 nwodo street.</address>
                                </div>
                            </div>
                            <!-- <ul class="social-box">
                                <li>
                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP
        ================================================== -->
        <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>

        <!-- FOOTER

        @endsection
