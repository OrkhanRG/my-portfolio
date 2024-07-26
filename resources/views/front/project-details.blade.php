@extends('layouts.front')
@section('title', 'X Layihəsi')

@push('css')
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">{{ $project->title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Anasəhifə</a></li>
                        <li class="breadcrumb-item active">{{ $project->title }}</li>
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
                <img src="{{ asset($project->main_image ?? '') }}" alt="{{ $project->title ?? '' }}">
            </div>
            <div class="row gap-120 mt-50 mb-40">
                <div class="col-lg-8 col-md-8">
                    <div class="project-details-content wow fadeInUp delay-0-2s">
                        <h3>Layihə Haqqında</h3>
                        <p class="big-letter">{{ substr(strip_tags($project->description), 0, 1).strip_tags($project->description) }}</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp delay-0-4s">
                    <div class="project-details-info rmb-55" style="background-image: url({{ asset('assets/images/projects/project-info-bg.png') }});">
                        @isset($project->category->name)
                            <div class="pd-info-item">
                                <span>Kateqoriya</span>
                                <h5>{{ $project->category->name }}</h5>
                            </div>
                        @endisset
                        @isset($project->client)
                            <div class="pd-info-item">
                                <span>Müştəri</span>
                                <h5>{{ $project->client }}</h5>
                            </div>
                        @endisset
                        @isset($project->location)
                            <div class="pd-info-item">
                                <span>Ünvan</span>
                                <h5>{{ $project->location }}</h5>
                            </div>
                        @endisset
                        @isset($project->publish_date)
                            <div class="pd-info-item">
                                <span>Yayınlanma Tarixi</span>
                                <h5>{{ \Carbon\Carbon::parse($project->publish_date)->locale('az')->translatedFormat('d M Y') }}</h5>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
            @isset($project->images)
                <div class="row pb-15">
                    @foreach($project->images as $image)
                        <div class="col-lg-4 col-sm-6">
                            <div class="image mb-30 wow fadeInUp delay-0-2s">
                                <img src="{{ asset($image->path) }}" alt="{{ $project->title }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            @endisset
            <div class="tag-share py-30 wow fadeInUp delay-0-2s">
                <div class="item">
                    <b>Teqlər</b>
                    <div class="tag-coulds">
                        <a href="javascript:void(0)">Design</a>
                        <a href="javascript:void(0)">Figma</a>
                        <a href="javascript:void(0)">Apps</a>
                    </div>
                </div>
                <div class="item">
                    <b>Share</b>
                    <div class="social-style-one">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{request()->url()}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite"><i class="fab fa-linkedin-in"></i></a>
{{--                        <a href="{{ $about->instagram }}"><i class="fab fa-instagram"></i></a>--}}
{{--                        <a href="{{ $about->github }}"><i class="fab fa-github"></i></a>--}}
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
    @if(isset($related_projects) && count($related_projects))
        <section class="related-projects-area pb-70 rpb-40 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <h2>Oxşar Layihələr</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($related_projects as $r_project)
                        <div class="col-xl-4 col-md-6">
                            <div class="project-item style-two wow fadeInUp delay-0-2s">
                                <div class="project-image before-after-none">
                                    <img src="{{ asset($r_project->main_image) }}" alt="{{ $r_project->title }}">
                                </div>
                                <div class="project-content">
                                    <span class="sub-title">{{ $r_project->category->name }}</span>
                                    <h4><a href="{{ route('front.project-details', $r_project->slug) }}">{{ $r_project->title }}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
    @endif

    <!-- Related Projects Area end -->

@endsection

@push('js')
@endpush
