@extends('layouts.front')
@section('title', 'Əlaqə')

@push('css')
@endpush

@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">Mənimlə Əlaqə</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="index.html">Anasəhifə</a></li>
                        <li class="breadcrumb-item active">Əlaqə</li>
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
                            <span class="sub-title mb-15">Əlaqə</span>
                            <h2><span>Növbəti Layihəni </span>Mənimlə Danış</h2>
                        </div>
                        <h6>Ünvan & Telefon</h6>
                        <div class="widget_contact_info mb-35">
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i>{{ $about->address }}</li>
                                <li><i class="far fa-envelope"></i> <a href="mailto:{{ $about->email }}">{{ $user->email }}</a></li>
                                <li><i class="far fa-phone"></i> <a href="callto:{{ $about->phone }}">{{ $about->phone }}</a></li>
                            </ul>
                        </div>
                        <h5>Məni İzləyin</h5>
                        <div class="social-style-one mt-10">
                            <a href="{{ $about->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $about->github }}" target="_blank"><i class="fab fa-github"></i></a>
                            <a href="{{ $about->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{ $about->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-page-form contact-form form-style-one wow fadeInUp delay-0-2s">
                        <form id="contactForm" class="contactForm" name="contactForm" action="{{ route('admin.contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Ad Soyad</label>
                                        <input type="text" id="name" name="name" class="form-control" value="" placeholder="Ad Soyad" required data-error="Zəhmət olmasa adınız daxil edin!">
                                        <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail </label>
                                        <input type="email" id="email" name="email" class="form-control" value="" placeholder="E-mail ünvanınız" required data-error="Zəhmət olmasa email ünvanınızı daxil edin!">
                                        <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Telefon </label>
                                        <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Telefon Nömrəniz">
                                        <label for="phone_number" class="for-icon"><i class="far fa-phone"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Başlıq</label>
                                        <input type="text" id="title" name="title" class="form-control" value="" placeholder="Başlıq">
                                        <label for="title" class="for-icon"><i class="far fa-text"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Mesajınız</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mesaj Yazın"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn"> Mesaj Göndərin <i class="far fa-angle-right"></i></button>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1297.8671277733238!2d49.836781768222764!3d40.39515388412306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d7b013baa69%3A0x942432c390533ab6!2s9RWP%2B6R2%2C%20Feyzullah%20Gasim-Zadeh%2C%20Baku!5e0!3m2!1str!2saz!4v1717279412936!5m2!1str!2saz" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Location Map Area End -->

@endsection

@push('js')
@endpush
