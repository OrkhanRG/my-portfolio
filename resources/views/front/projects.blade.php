@extends('layouts.front')
@section('title', 'Layihələr')

@push('css')
@endpush

@section('content')



    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">Project Grid View</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Project Grid View</li>
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

    <!-- Projects Area start -->
    <section class="projects-area pt-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <ul class="project-filter filter-btns-one justify-content-center pb-35 wow fadeInUp delay-0-2s">
                <li data-filter="*" class="current">Show All</li>
                <li data-filter=".design">Design</li>
                <li data-filter=".branding">Branding</li>
                <li data-filter=".marketing">Marketing</li>
                <li data-filter=".development">Development</li>
                <li data-filter=".apps">Mobile Apps</li>
                <li data-filter=".graphics">Graphics</li>
            </ul>
            <div class="row project-masonry-active">
                <div class="col-lg-6 item branding development">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/project1.jpg" alt="Project">
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Product Design</span>
                            <h3><a href="project-details.html">Mobile Application Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 item design marketing graphics">
                    <div class="project-item style-two wow fadeInUp delay-0-4s">
                        <div class="project-image">
                            <img src="assets/images/projects/project2.jpg" alt="Project">
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Product Design</span>
                            <h3><a href="project-details.html">Website Makeup Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 item development graphics">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/project3.jpg" alt="Project">
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Graphics Design</span>
                            <h3><a href="project-details.html">Brand Identity and Motion Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 item design development apps">
                    <div class="project-item style-two wow fadeInUp delay-0-4s">
                        <div class="project-image">
                            <img src="assets/images/projects/project4.jpg" alt="Project">
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Product Design</span>
                            <h3><a href="project-details.html">Mobile Application Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 item branding marketing graphics">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image">
                            <img src="assets/images/projects/project5.jpg" alt="Project">
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Design & Branding</span>
                            <h3><a href="project-details.html">Creative Graphics Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 item design marketing apps">
                    <div class="project-item style-two wow fadeInUp delay-0-4s">
                        <div class="project-image">
                            <img src="assets/images/projects/project6.jpg" alt="Project">
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Product Design</span>
                            <h3><a href="project-details.html">Design & Branding Mokeup</a></h3>
                        </div>
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
@endsection

@push('js')
@endpush
