@extends('layouts.front')
@section('title', 'Layihələr')

@push('css')
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">Bloqlar</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Anasəhifə</a></li>
                        <li class="breadcrumb-item active">Bloqlar</li>
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


    <!-- Blog Standard Area start -->
    <section class="blog-standard-area pb-70 rpb-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-standard-wrap">
                        <div class="row">
                            @isset($blogs)
                                @foreach($blogs as $blog)
                                    <div class="col-md-6 item">
                                        <div class="blog-item style-two wow fadeInUp delay-0-2s">
                                            <div class="image">
                                                <img src="{{ asset($blog->main_image) }}" alt="{{ $blog->title }}">
                                            </div>
                                            <div class="content">
                                                <div class="blog-meta mb-20">
                                                    <a class="tag" href="{{ route('front.blogs.category', $blog->category->name) }}">{{ $blog->category->name }}</a>

                                                </div>
                                                <h5><a href="{{ route('front.blog-details', $blog->slug) }}">{{ $blog->title }}</a></h5>
                                                <hr>
                                                <div class="blog-meta mb-5">
                                                    <a class="date" href="{{ route('front.blog-details', $blog->slug) }}"><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($blog->publish_date)->locale('az')->translatedFormat('j F Y') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                            <div class="col-md-6 item offset-md-6">
                                <div class="news-more-btn text-center mt-35 wow fadeInUp delay-0-2s">
                                    {{ $blogs->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('front.blog.layouts.sidebar', compact('categories', 'tags', 'latest_blog'))
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
    <!-- Blog Standard Area end -->
@endsection

@push('js')
@endpush
