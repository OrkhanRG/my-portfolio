@extends('layouts.front')
@section('title', 'X Blog')

@push('css')
@endpush

@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h3 class="page-title wow fadeInUp delay-0-2s"> {{ $blog->title ?? '' }}</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Anasəhifə</a></li>
                        <li class="breadcrumb-item active"> {{ $blog->title ?? '' }}</li>
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


    <!-- Blog Details Area start -->
    <section class="blog-details-area pb-70 rpb-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="content mt-35">
                            <div class="blog-meta mb-30 wow fadeInUp delay-0-2s">
                                <a class="tag" href="{{ route('front.blogs.category', $blog->slug) }}">{{ $blog->category->name ?? '' }}</a>
                            </div>
                            <div class="author-date-share mb-40 wow fadeInUp delay-0-4s">
                                <div class="author">
                                    <img style="width: 55px; height: 55px" class="img-fluid"
                                         src="{{ asset($about->img_about) }}" alt="Author">
                                </div>
                                <div class="text">
                                    <span>Yazıçı</span>
                                    <h5>{{ $blog->creator->name.' '.$blog->creator->surname }}</h5>
                                </div>
                                <div class="text">
                                    <span>Elan tarixi</span>
                                    <h5>{{ \Carbon\Carbon::parse($blog->publish_date)->locale('az')->translatedFormat('j F Y') }}</h5>
                                </div>
                                <a href="#" class="details-btn"><i class="far fa-share-alt"></i></a>
                            </div>
                        </div>
                        <div class="image mb-35 wow fadeInUp delay-0-5s">
                            <img src="{{ asset($blog->main_image) }}" alt="Blog Details">
                        </div>
                        <div class="content wow fadeInUp delay-0-2s">
                            <p class="big-letter">{{ substr(strip_tags($blog->description), 0, 1) }}{!! $blog->description !!}</p>

                        </div>
                        <div class="row gap-20">
                            @if(isset($blog->images) && count($blog->images) && $blog->images)
                                @foreach($blog->images as $image)
                                    <div class="col-md-6">
                                        <div class="image mb-20 wow fadeInUp delay-0-4s">
                                            <img src="{{ asset($image->path) }}" alt="Blog Middle">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="content mt-30 wow fadeInUp delay-0-2s">
                            <div class="tag-share mt-45 py-30 wow fadeInUp delay-0-2s">
                                <div class="item">
                                    <b>Tags</b>
                                    @if(isset($blog->tags) && count($blog->tags))
                                        @foreach($blog->tags as $tag)
                                            <div class="tag-coulds">
                                                <a href="{{ route('front.blogs', ['tag' => $tag->name]) }}" style="margin-left: 15px">{{ $tag->name }}</a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="item">
                                    <b>Paylaş</b>
                                    <div class="social-style-one">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{request()->url()}}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.linkedin.com/sharing/share-offsite"><i class="fab fa-linkedin-in"></i></a>
{{--                                        <a href="{{ $about->instagram }}"><i class="fab fa-instagram"></i></a>--}}
{{--                                        <a href="{{ $about->github }}"><i class="fab fa-github"></i></a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin-comment mt-50 wow fadeInUp delay-0-2s">
                            <div class="comment-body">
                                <div class="author-thumb">
                                    <img style="width: 135px; height: 135px" src="{{ asset($about->img_about) }}" alt="Author">
                                </div>
                                <div class="content">
                                    <h5>{{ $blog->creator->name.' '.$blog->creator->surname }}</h5>
                                    <p>Proqram təminatının inkişafı haqqında daha çox öyrənmək və təcrübənizi bölüşmək
                                        istəyirsinizsə, mənimlə əlaqə saxlamaqdan çəkinməyin. Daha çox məlumat üçün
                                        takibdə qalın!</p>
                                    <div class="social-style-two mt-5">
                                        <a href="{{ $about->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $about->instagram }}"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ $about->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="{{ $about->github }}"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="next-prev-post pt-50 pb-20 wow fadeInUp delay-0-2s">
                                @if(isset($previous_blog) && $previous_blog)
                                    <div class="post-item">
                                        <div class="image">
                                            <img src="{{ asset($previous_blog->main_image) }}" alt="Post">
                                        </div>
                                        <div class="post-content">
                                            <span class="date">
                                                <i class="far fa-calendar-alt"></i>
                                                <a href="{{ route('front.blog-details', $previous_blog->slug) }}">{{ \Carbon\Carbon::parse($previous_blog->publish_date)->locale('az')->translatedFormat('j F Y') }}</a>
                                            </span>
                                            <h6><a href="{{ route('front.blog-details', $previous_blog->slug) }}">{{ $previous_blog->title }}</a></h6>
                                        </div>
                                    </div>
                                @endif
                                @if(isset($next_blog) && $next_blog)
                                    <div class="post-item">
                                        <div class="image">
                                            <img src="{{ asset($next_blog->main_image) }}" alt="Post">
                                        </div>
                                        <div class="post-content">
                                        <span class="date">
                                            <i class="far fa-calendar-alt"></i>
                                            <a href="{{ route('front.blog-details', $next_blog->slug) }}">{{ \Carbon\Carbon::parse($next_blog->publish_date)->locale('az')->translatedFormat('j F Y') }}</a>
                                        </span>
                                            <h6><a href="{{ route('front.blog-details', $next_blog->slug) }}">{{ $next_blog->title }}</a></h6>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="content mt-65">
                            <h3 class="comment-title">Şərhlər</h3>
                            <div class="comment-body wow fadeInUp delay-0-2s">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/blog/comment-author1.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li>
                                            <h6>Hülya İsmayılova</h6>
                                        </li>
                                        <li>
                                            <a href="#">May 25, 2023</a>
                                        </li>
                                    </ul>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse molestiae
                                        consequatur qui dolorem eum fugiat voluptas</p>
                                    <a class="read-more" href="#">Cavab verin <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="comment-body comment-child wow fadeInUp delay-0-2s">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/blog/comment-author2.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li>
                                            <h6>Simral İsmayılov</h6>
                                        </li>
                                        <li>
                                            <a href="#">May 25, 2023</a>
                                        </li>
                                    </ul>
                                    <p>At vero eoset accusamus dignissimos ducimus blanditiis sapiente praesentium
                                        voluptatum deleniti atque</p>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <form id="comment-form"
                                  class="comment-form form-style-one pt-65 pb-55 mt-55 wow fadeInUp delay-0-2s"
                                  name="comment-form" action="#" method="post">
                                <h5>Şərh bildir</h5>
                                <div class="row mt-30">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control"
                                                   value="" placeholder="Ad Soyad" required="">
                                            <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email"
                                                   class="form-control" value="" placeholder="Email ünvan"
                                                   required="">
                                            <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Mesaj</label>
                                            <textarea name="message" id="message" class="form-control" rows="4"
                                                      placeholder="Mesajınız" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">Şərh bildir <i
                                                    class="far fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
    <!-- Blog Details Area end -->

@endsection

@push('js')
@endpush
