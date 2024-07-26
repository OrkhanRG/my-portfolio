<footer class="main-footer rel z-1">
    <div class="footer-top-wrap bgc-black pt-100 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="footer-widget widget_logo wow fadeInUp delay-0-2s">
                        <div class="footer-logo">
                            <a href="{{ route('front.index') }}"><img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                        <h6 class="footer-title">Sürətli Keçid</h6>
                        <ul>
                            <li><a href="{{ route('front.blogs') }}">Bloqlar</a></li>
                            <li><a href="{{ route('front.projects') }}">Layihələr</a></li>
                            <li><a href="{{ route('front.contact') }}">Əlaqə</a></li>
                        </ul>
                    </div>
                    <div class="footer-widget widget_newsletter wow fadeInUp delay-0-4s">
                        <form action="#">
                            <label for="email-address"><i class="far fa-envelope"></i></label>
                            <input id="email-address" type="email" placeholder="Email Ünvan" required>
                            <button>Abunə Ol <i class="far fa-angle-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="footer-widget widget_contact_info wow fadeInUp delay-0-6s">
                        <h6 class="footer-title">Ünvan</h6>
                        <ul>
                            <li><i class="far fa-map-marker-alt"></i> Mustafa Topçubaşov 21A, Azərbaycan Bakı</li>
                            <li><i class="far fa-envelope"></i> <a href="mailto:orxanismayilov851@gmail.com">orxanismayilov851@gmail.com</a></li>
                            <li><i class="far fa-phone"></i> <a href="callto:+994(55)8783700">+994 (55) 878 37 00</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-20 pb-5 rpt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>Copyright {{ date('Y') }} <a href="{{ $about->github }}" target="_blank">OrkhaN</a> Bütün hüquqlar qorunur</p>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="footer-bottom-nav">
                        <li><a target="_blank" href="{{ $about->facebook }}">Facebook</a></li>
                        <li><a target="_blank" href="{{ $about->instagram }}">Instagram</a></li>
                        <li><a target="_blank" href="{{ $about->linkedin }}">LinkedIn</a></li>
                        <li><a target="_blank" href="{{ $about->github }}">GitHub</a></li>
                    </ul>
                </div>
            </div>
            <!-- Scroll Top Button -->
            <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </div>
</footer>
