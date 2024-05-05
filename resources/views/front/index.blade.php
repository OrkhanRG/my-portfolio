@extends('layouts.front')
@section('title', 'Orxan Ismayılov | Backend Developer')

@push('css')
@endpush

@section('content')

    <!-- Hero Section Start -->
    <section class="main-hero-area pt-150 pb-80 rel z-1">
        <div class="container container-1620">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-7">
                    <div class="hero-content rmb-55 wow fadeInUp delay-0-2s">
                        <span class="h2">Hello, i’m </span>
                        <h1><b>Roy C. Jones</b> web designer</h1>
                        <p>We denounce with righteous indignation dislike demoralized by the charms of pleasure</p>
                        <div class="hero-btns">
                            <a href="contact.html" class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                            <a href="contact.html" class="read-more">Download Resume <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-5 order-lg-3">
                    <div class="hero-counter-wrap ms-lg-auto rmb-55 wow fadeInUp delay-0-4s">
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text plus" data-speed="3000" data-stop="13">0</span>
                            <span class="counter-title">Years Of Experience</span>
                        </div>
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text k-plus" data-speed="3000" data-stop="8">0</span>
                            <span class="counter-title">Project Complete</span>
                        </div>
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text percent" data-speed="3000" data-stop="99">0</span>
                            <span class="counter-title">Client Satisfactions</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="author-image-part wow fadeIn delay-0-3s">
                        <div class="bg-circle"></div>
                        <img src="{{ asset('assets/images/hero/me.png') }}" alt="Author">
                        <div class="progress-shape">
                            <img src="{{ asset('assets/images/hero/progress-shape.png') }}" alt="Progress">
                        </div>
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
    <!-- Hero Section End -->


    <!-- About Area start -->
    <section class="about-area rel z-1">
        <div class="for-bgc-black py-130 rpy-100">
            <div class="container">
                <div class="row gap-100 align-items-center">
                    <div class="col-lg-7">
                        <div class="about-content-part rel z-2 rmb-55">
                            <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                                <span class="sub-title mb-15">About Me</span>
                                <h2>Professional <span>Problem Solutions</span> For Digital Products</h2>
                                <p>At vero eos et accusamus etodio dignissimos ducimus praesentium voluptatum corrupti quos dolores quas molestias excepturi sint occaecati cupiditate provident qui officia deserunt mollitia animi, id est laborum et dolorum</p>
                            </div>
                            <ul class="list-style-one two-column wow fadeInUp delay-0-2s">
                                <li>Branding & Design</li>
                                <li>Digital Marketing</li>
                                <li>Web Development</li>
                                <li>Product Design</li>
                            </ul>
                            <div class="about-info-box mt-25 wow fadeInUp delay-0-2s">
                                <div class="info-box-item">
                                    <i class="far fa-envelope"></i>
                                    <div class="content">
                                        <span>Email Us</span><br>
                                        <a href="mailto:support@gmail.com">support@gmail.com</a>
                                    </div>
                                </div>
                                <div class="info-box-item">
                                    <i class="far fa-phone"></i>
                                    <div class="content">
                                        <span>Make A Call</span><br>
                                        <a href="callto:+000(123)45688">+880 (123) 456 88</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-image-part wow fadeInUp delay-0-3s">
                            <img src="{{ asset('assets/images/about/about.jpg') }}" alt="About Me">
                            <div class="about-btn btn-one wow fadeInRight delay-0-4s">
                                <img src="{{ asset('assets/images/about/btn-image1.png') }}" alt="Image">
                                <h6>Experience Designer</h6>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="about-btn btn-two wow fadeInRight delay-0-5s">
                                <img src="{{ asset('assets/images/about/btn-image2.png') }}" alt="Image">
                                <h6>Mark J. Collins</h6>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="dot-shape">
                                <img src="{{ asset('assets/images/shape/about-dot.png') }}" alt="Shape">
                            </div>
                        </div>
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
    <!-- About Area end -->


    <!-- Resume Area start -->
    <section class="resume-area pt-130 rpt-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="big-icon mt-85 rmt-0 rmb-55 wow fadeInUp delay-0-2s">
                        <i class="flaticon-asterisk-1"></i>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9">
                            <div class="section-title mb-60 wow fadeInUp delay-0-2s">
                                <span class="sub-title mb-15">My Resume</span>
                                <h2>Real <span>Problem Solutions</span> Experience</h2>
                            </div>
                        </div>
                    </div>
                    <div class="resume-items-wrap">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-md-6">
                                <div class="resume-item wow fadeInUp delay-0-3s">
                                    <div class="icon">
                                        <i class="far fa-arrow-right"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years">2021 - Present</span>
                                        <h4>Lead Product Designer</h4>
                                        <span class="company">Google</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="resume-item wow fadeInUp delay-0-4s">
                                    <div class="icon">
                                        <i class="far fa-arrow-right"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years">2016 - 2018</span>
                                        <h4>Junior UX/UI Designer</h4>
                                        <span class="company">LinkedIn</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="resume-item wow fadeInUp delay-0-2s">
                                    <div class="icon">
                                        <i class="far fa-arrow-right"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years">2018 - 2021</span>
                                        <h4>Senior Product Designer</h4>
                                        <span class="company">Webflow</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="resume-item wow fadeInUp delay-0-4s">
                                    <div class="icon">
                                        <i class="far fa-arrow-right"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years">2014 - 2016</span>
                                        <h4>Graphics Designer</h4>
                                        <span class="company">Apple</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- Resume Area end -->


    <!-- Services Area start -->
    <section class="services-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Popular Services</span>
                        <h2>My <span>Special Service</span> For your Business Development</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">01.</div>
                        <div class="content">
                            <h4>Brand Identity Design</h4>
                            <p>Dignissimos ducimus blanditiis praesen</p>
                        </div>
                        <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">02.</div>
                        <div class="content">
                            <h4>Website Design</h4>
                            <p>Dignissimos ducimus blanditiis praesen</p>
                        </div>
                        <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">03.</div>
                        <div class="content">
                            <h4>Mobile Application Design</h4>
                            <p>Dignissimos ducimus blanditiis praesen</p>
                        </div>
                        <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">04.</div>
                        <div class="content">
                            <h4>Motion Graphics Design</h4>
                            <p>Dignissimos ducimus blanditiis praesen</p>
                        </div>
                        <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">05.</div>
                        <div class="content">
                            <h4>Website Development</h4>
                            <p>Dignissimos ducimus blanditiis praesen</p>
                        </div>
                        <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">06.</div>
                        <div class="content">
                            <h4>SEO & Digital Marketing</h4>
                            <p>Dignissimos ducimus blanditiis praesen</p>
                        </div>
                        <a href="service-details.html" class="details-btn"><i class="fas fa-arrow-right"></i></a>
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
    <!-- Services Area end -->


    <!-- Skill Area start -->
    <section class="skill-area rel z-1">
        <div class="for-bgc-black pt-130 rpt-100 pb-100 rpb-70">
            <div class="container">
                <div class="row gap-100">
                    <div class="col-lg-5">
                        <div class="skill-content-part rel z-2 rmb-55 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-40">
                                <span class="sub-title mb-15">My Skills</span>
                                <h2>Let’s Explore Popular <span>Skills & Experience</span></h2>
                                <p>Sed ut perspiciatis unde omnis iste natus to voluptatem accusantium doloremque laudantium, totam rem aperiamc eaque ipsa quae ab illo inventore veritatis</p>
                            </div>
                            <a href="about.html" class="theme-btn">Learn More <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="skill-items-wrap">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-2s">
                                        <img src="{{ asset('assets/images/skills/skill1.png') }}" alt="Skill">
                                        <h5>Figma</h5>
                                        <span class="percent">95%</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-3s">
                                        <img src="{{ asset('assets/images/skills/skill2.png') }}" alt="Skill">
                                        <h5>Figma</h5>
                                        <span class="percent">83</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-4s">
                                        <img src="{{ asset('assets/images/skills/skill3.png') }}" alt="Skill">
                                        <h5>Figma</h5>
                                        <span class="percent">93%</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-5s">
                                        <img src="{{ asset('assets/images/skills/skill4.png') }}" alt="Skill">
                                        <h5>Figma</h5>
                                        <span class="percent">84%</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-2s">
                                        <img src="{{ asset('assets/images/skills/skill5.png') }}" alt="Skill">
                                        <h5>Figma</h5>
                                        <span class="percent">65%</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-3s">
                                        <img src="{{ asset('assets/images/skills/skill6.png') }}" alt="Skill">
                                        <h5>Figma</h5>
                                        <span class="percent">86%</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-4s">
                                        <img src="{{ asset('assets/images/skills/skill7.png') }}" alt="Skill">
                                        <h5>Figma</h5>
                                        <span class="percent">62%</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-5s">
                                        <img src="{{ asset('assets/images/skills/skill8.png') }}" alt="Skill">
                                        <h5>Figma</h5>
                                        <span class="percent">94%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- Skill Area end -->


    <!-- Projects Area start -->
    <section class="projects-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Latest Works</span>
                        <h2>Explore My Popular <span>Projects</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pb-25">
                <div class="col-lg-6">
                    <div class="project-image wow fadeInLeft delay-0-2s">
                        <img src="{{ asset('assets/images/projects/project1.jpg') }}" alt="Project">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="project-content wow fadeInRight delay-0-2s">
                        <span class="sub-title">Product Design</span>
                        <h2><a href="project-details.html">Mobile Application Design</a></h2>
                        <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis architecto beatae</p>
                        <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pb-25">
                <div class="col-lg-6 order-lg-2">
                    <div class="project-image wow fadeInLeft delay-0-2s">
                        <img src="{{ asset('assets/images/projects/project2.jpg') }}" alt="Project">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 ms-auto">
                    <div class="project-content wow fadeInRight delay-0-2s">
                        <span class="sub-title">Product Design</span>
                        <h2><a href="project-details.html">Website Makeup Design</a></h2>
                        <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis architecto beatae</p>
                        <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pb-25">
                <div class="col-lg-6">
                    <div class="project-image wow fadeInLeft delay-0-2s">
                        <img src="{{ asset('assets/images/projects/project3.jpg') }}" alt="Project">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="project-content wow fadeInRight delay-0-2s">
                        <span class="sub-title">Product Design</span>
                        <h2><a href="project-details.html">Brand Identity and Motion Design</a></h2>
                        <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis architecto beatae</p>
                        <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pb-25">
                <div class="col-lg-6 order-lg-2">
                    <div class="project-image wow fadeInLeft delay-0-2s">
                        <img src="{{ asset('assets/images/projects/project4.jpg') }}" alt="Project">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 ms-auto">
                    <div class="project-content wow fadeInRight delay-0-2s">
                        <span class="sub-title">Product Design</span>
                        <h2><a href="project-details.html">Mobile Application Development</a></h2>
                        <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis architecto beatae</p>
                        <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="project-btn text-center wow fadeInUp delay-0-2s">
                <a href="projects.html" class="theme-btn">View More Projects <i class="far fa-angle-right"></i></a>
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
    <!-- Projects Area end -->


    <!-- Testimonial Area start -->
    <section class="testimonials-area rel z-1">
        <div class="for-bgc-black py-130 rpy-100">
            <div class="container">
                <div class="row gap-90">
                    <div class="col-lg-4">
                        <div class="testimonials-content-part rel z-2 rmb-55 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-40">
                                <span class="sub-title mb-15">Clients Testimonials</span>
                                <h2>I’ve 1253+ Clients <span>Feedback</span></h2>
                                <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis</p>
                            </div>
                            <div class="slider-arrows">
                                <button class="testimonial-prev"><i class="fal fa-arrow-left"></i></button>
                                <button class="testimonial-next"><i class="fal fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="testimonials-wrap">
                            <div class="testimonial-item wow fadeInUp delay-0-3s">
                                <div class="author">
                                    <img src="{{ asset('assets/images/testimonials/author1.png') }}" alt="Author">
                                </div>
                                <div class="text">At vero eoset accusamus et iusto odio dignissimos ducimus quie blanditiis praesentium voluptatum deleniti atque corrupti dolores</div>
                                <div class="testi-des">
                                    <h5>Rodolfo E. Shannon</h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                            <div class="testimonial-item wow fadeInUp delay-0-4s">
                                <div class="author">
                                    <img src="{{ asset('assets/images/testimonials/author2.png') }}" alt="Author">
                                </div>
                                <div class="text">Nam libero tempore cumsoluta nobise est eligendi optio cumque nihil impedit quominus idquod maxime placeat facere possimus</div>
                                <div class="testi-des">
                                    <h5>Kenneth J. Dutton</h5>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                            <div class="testimonial-item wow fadeInUp delay-0-2s">
                                <div class="author">
                                    <img src="{{ asset('assets/images/testimonials/author1.png') }}" alt="Author">
                                </div>
                                <div class="text">At vero eoset accusamus et iusto odio dignissimos ducimus quie blanditiis praesentium voluptatum deleniti atque corrupti dolores</div>
                                <div class="testi-des">
                                    <h5>Rodolfo E. Shannon</h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                            <div class="testimonial-item wow fadeInUp delay-0-2s">
                                <div class="author">
                                    <img src="{{ asset('assets/images/testimonials/author2.png') }}" alt="Author">
                                </div>
                                <div class="text">Nam libero tempore cumsoluta nobise est eligendi optio cumque nihil impedit quominus idquod maxime placeat facere possimus</div>
                                <div class="testi-des">
                                    <h5>Kenneth J. Dutton</h5>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
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
    <!-- Testimonial Area end -->


    <!-- Pricing Area start -->
    <section class="pricing-area pt-130 rpt-100 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Pricing Package</span>
                        <h2>Amazing <span>Pricing</span> For your Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item wow fadeInUp delay-0-2s">
                        <div class="pricing-header">
                            <h4 class="title">Basic Plan</h4>
                            <p class="save-percent">Try Out Basic Plan Save <span>20%</span></p>
                            <span class="price">19.95</span>
                        </div>
                        <div class="pricing-details">
                            <p>Sed perspiciatis unde natus totam see rem aperiam eaque inventore</p>
                            <ul>
                                <li>Website Design</li>
                                <li>Mobile Apps Design</li>
                                <li>Product Design</li>
                                <li class="unable">Digital Marketing</li>
                                <li class="unable">Custom Support</li>
                            </ul>
                            <a href="contact.html" class="theme-btn">Choose Package <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item wow fadeInUp delay-0-4s">
                        <div class="pricing-header">
                            <h4 class="title">Standard Plan</h4>
                            <p class="save-percent">Try Out Basic Plan Save <span>35%</span></p>
                            <span class="price">19.95</span>
                        </div>
                        <div class="pricing-details">
                            <p>Sed perspiciatis unde natus totam see rem aperiam eaque inventore</p>
                            <ul>
                                <li>Website Design</li>
                                <li>Mobile Apps Design</li>
                                <li>Product Design</li>
                                <li>Digital Marketing</li>
                                <li>Custom Support</li>
                            </ul>
                            <a href="contact.html" class="theme-btn">Choose Package <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item wow fadeInUp delay-0-6s">
                        <div class="pricing-header">
                            <h4 class="title">Basic Plan</h4>
                            <p class="save-percent">Try Out Basic Plan Save <span>45%</span></p>
                            <span class="price">19.95</span>
                        </div>
                        <div class="pricing-details">
                            <p>Sed perspiciatis unde natus totam see rem aperiam eaque inventore</p>
                            <ul>
                                <li>Website Design</li>
                                <li>Mobile Apps Design</li>
                                <li>Product Design</li>
                                <li>Digital Marketing</li>
                                <li>Custom Support</li>
                            </ul>
                            <a href="contact.html" class="theme-btn">Choose Package <i class="far fa-angle-right"></i></a>
                        </div>
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
    <!-- Pricing Area end -->


    <!-- Contact Area start -->
    <section class="contact-area pt-95 pb-130 rpt-70 rpb-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-content-part pt-5 rpt-0 rmb-55 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-40">
                            <span class="sub-title mb-15">Get In Touch</span>
                            <h2>Let’s Talk For your <span>Next Projects</span></h2>
                            <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis</p>
                        </div>
                        <ul class="list-style-two">
                            <li>5+ Years Of Experience</li>
                            <li>Professional Web Designer</li>
                            <li>Mobile Apps Design</li>
                            <li>Custom Design Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form contact-form-wrap form-style-one wow fadeInUp delay-0-4s">
                        <form id="contactForm" class="contactForm" name="contactForm" action="{{ asset('assets/php/form-process.php') }}" method="post">
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
    <!-- Contact Area end -->


    <!-- Blog Area start -->
    <section class="blog-area rel z-1">
        <div class="for-bgc-black pt-130 pb-100 rpt-100 rpb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">News & Blog</span>
                            <h2>Latest News & <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('assets/images/blog/blog1.png') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <div class="blog-meta mb-35">
                                    <a class="tag" href="blog.html">Design</a>
                                    <a class="tag" href="blog.html">Figma</a>
                                </div>
                                <h5><a href="blog-details.html">Tips For Conductin See Usability Studies</a></h5>
                                <hr>
                                <div class="blog-meta mt-35">
                                    <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('assets/images/blog/blog2.png') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <div class="blog-meta mb-35">
                                    <a class="tag" href="blog.html">Design</a>
                                    <a class="tag" href="blog.html">Figma</a>
                                </div>
                                <h5><a href="blog-details.html">Keyboard-Only Suppor Assistive Technology</a></h5>
                                <hr>
                                <div class="blog-meta mt-35">
                                    <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                </div>
                            </div>
                        </div>
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
    <!-- Blog Area end -->

    <!-- Client Log start -->
    <div class="client-logo-area rel z-1 pt-130 rpt-100 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center pt-5 mb-65 wow fadeInUp delay-0-2s">
                        <h6>I’ve <span>1253+ Global Clients</span> & lot’s of Project Complete</h6>
                    </div>
                </div>
            </div>
            <div class="client-logo-wrap">
                <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo1.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo2.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo3.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo4.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo5.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo6.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo7.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo8.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo9.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.html">
                    <img src="{{ asset('assets/images/client-logos/client-logo10.png') }}" alt="Client Logo">
                </a>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </div>
    <!-- Client Log end -->

@endsection

@push('js')
@endpush
