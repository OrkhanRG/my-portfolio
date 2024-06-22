@extends('layouts.front')
@section('title', 'X Layihəsi')

@push('css')
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">Mobile Application Design</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Mobile Application Design</li>
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


    <!-- ProjectDetails Area start -->
    <section class="projects-details-area pt-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="projects-details-image mb-50 wow fadeInUp delay-0-2s">
                <img src="assets/images/projects/project-details.jpg" alt="Project Details">
            </div>
            <div class="row gap-120 mt-50 mb-40">
                <div class="col-lg-8">
                    <div class="project-details-content wow fadeInUp delay-0-2s">
                        <h3>Layihə Haqqında</h3>
                        <p class="big-letter">sSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque seeney laudantium totam rem aperiam eaque ipsa quae abillo inventore veritatis</p>
                        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aufugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam estqui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid consequature</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp delay-0-4s">
                    <div class="project-details-info rmb-55" style="background-image: url(assets/images/projects/project-info-bg.png);">
                        <div class="pd-info-item">
                            <span>Category</span>
                            <h5>Product Design</h5>
                        </div>
                        <div class="pd-info-item">
                            <span>Clients</span>
                            <h5>X_Design Studio</h5>
                        </div>
                        <div class="pd-info-item">
                            <span>Location</span>
                            <h5>Melbourne, Australia</h5>
                        </div>
                        <div class="pd-info-item">
                            <span>Published</span>
                            <h5>September 25, 2023</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-15">
                <div class="col-lg-4 col-sm-6">
                    <div class="image mb-30 wow fadeInUp delay-0-2s">
                        <img src="assets/images/projects/project-middle1.jpg" alt="Project Middle">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="image mb-30 wow fadeInUp delay-0-4s">
                        <img src="assets/images/projects/project-middle2.jpg" alt="Project Middle">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="image mb-30 wow fadeInUp delay-0-6s">
                        <img src="assets/images/projects/project-middle3.jpg" alt="Project Middle">
                    </div>
                </div>
            </div>
            <div class="tag-share py-30 wow fadeInUp delay-0-2s">
                <div class="item">
                    <b>Tags</b>
                    <div class="tag-coulds">
                        <a href="blog.html">Design</a>
                        <a href="blog.html">Figma</a>
                        <a href="blog.html">Apps</a>
                    </div>
                </div>
                <div class="item">
                    <b>Share</b>
                    <div class="social-style-one">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
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
    <!-- Project Details Area end -->


    <!-- Related Projects Area start -->
    <section class="related-projects-area pb-70 rpb-40 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <h2>Related Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-image before-after-none">
                            <img src="assets/images/projects/related-project1.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Graphics Design</span>
                            <h4><a href="project-details.html">Brand Identity Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="project-item style-two wow fadeInUp delay-0-4s">
                        <div class="project-image before-after-none">
                            <img src="assets/images/projects/related-project2.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Product Design</span>
                            <h4><a href="project-details.html">Mobile Apps Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="project-item style-two wow fadeInUp delay-0-6s">
                        <div class="project-image before-after-none">
                            <img src="assets/images/projects/related-project3.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <span class="sub-title">Product Design</span>
                            <h4><a href="project-details.html">Dashboard Development</a></h4>
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
    <!-- Related Projects Area end -->

@endsection

@push('js')
@endpush
