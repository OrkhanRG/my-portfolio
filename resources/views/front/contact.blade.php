@extends('layouts.front')
@section('title', 'Əlaqə')

@push('css')
@endpush

@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Page Banner End -->


    <!-- Contact Page Area start -->
    <section class="contact-page pt-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-page-content rmb-55 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-30">
                            <span class="sub-title mb-15">Get In Touch</span>
                            <h2>Let’s Talk For your <span>Next Projects</span></h2>
                            <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis</p>
                        </div>
                        <h6>Main Office</h6>
                        <div class="widget_contact_info mb-35">
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i> 55 Main Street, 2nd block,<br> New York City</li>
                                <li><i class="far fa-envelope"></i> <a href="mailto:support@gmail.com">support@gmail.com</a></li>
                                <li><i class="far fa-phone"></i> <a href="callto:+880(123)45688">+880 (123) 456 88</a></li>
                            </ul>
                        </div>
                        <h5>Follow Me</h5>
                        <div class="social-style-one mt-10">
                            <a href="{{ $about->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $about->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $about->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{ $about->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-page-form contact-form form-style-one wow fadeInUp delay-0-2s">
                        <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="" placeholder="Richard D. Hammond" required data-error="Please enter your Name">
                                        <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control" value="" placeholder="support@gmail.com" required data-error="Please enter your Email">
                                        <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="+880 (123) 456 88" required data-error="Please enter your Phone Number">
                                        <label for="phone_number" class="for-icon"><i class="far fa-phone"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required data-error="Please enter your Subject">
                                        <label for="subject" class="for-icon"><i class="far fa-text"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="write message" required data-error="Please enter your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn">Send Us Message <i class="far fa-angle-right"></i></button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Contact Page Area end -->


    <!-- Location Map Area Start -->
    <div class="contact-page-map pb-120 rpb-90 wow fadeInUp delay-0-2s">
        <div class="container">
            <div class="our-location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m10!1m3!1d142190.2862584524!2d-74.01298319978558!3d40.721725351435126!2m1!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1663473911885!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Location Map Area End -->

@endsection

@push('js')
@endpush
