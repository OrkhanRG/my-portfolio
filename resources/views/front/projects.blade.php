@extends('layouts.front')
@section('title', 'Layihələr')

@push('css')
@endpush

@section('content')



    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">Layihələr</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Anasəhifə</a></li>
                        <li class="breadcrumb-item active">Layihələr</li>
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
                <li data-filter="*" class="current">Hamısını göstər</li>
                @foreach($categories as $category)
                    <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                @endforeach
            </ul>
            <div class="row project-masonry-active">
                @foreach($projects as $project)
                    <div class="col-lg-6 item {{ $project->category->slug }}">
                        <div class="project-item style-two wow fadeInUp delay-0-2s">
                            <div class="project-image">
                                <img src="{{ asset($project->main_image) }}" alt="{{ $project->title }}">
                                <a href="{{ route('front.project-details', $project->slug) }}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="sub-title">{{ $project->category->name }}</span>
                                <h3><a href="{{ route('front.project-details', $project->slug) }}">{{ $project->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="project-btn text-center wow fadeInUp delay-0-2s">
                <div class="d-flex justify-content-center">
                    {{ $projects->withQueryString()->links() }}
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
    <!-- Projects Area end -->
@endsection

@push('js')
@endpush
