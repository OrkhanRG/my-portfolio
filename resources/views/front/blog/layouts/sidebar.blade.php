<div class="col-lg-4">
    <div class="main-sidebar rmt-65">
        <div class="widget widget-search wow fadeInUp delay-0-2s">
            <h4 class="widget-title">Axtarış</h4>
            <form action="{{ route('front.blogs') }}" class="default-search-form">
                <input type="text" name="q" placeholder="Açar sözləri daxil edin..." required>
                <button type="submit" class="searchbutton far fa-search"></button>
            </form>
        </div>
        @if(isset($categories) && $categories)
            <div class="widget widget-category wow fadeInUp delay-0-4s">
                <h4 class="widget-title">Category</h4>
                <ul>
                    @foreach($categories as $category)
                        <li><i class="far fa-angle-right"></i> <a href="{{ route('front.blogs.category', $category->name) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(isset($latest_blog) && $latest_blog)
            <div class="widget widget-recent-news wow fadeInUp delay-0-2s">
                <h4 class="widget-title">Son Bloqlar</h4>
                <ul>
                    @foreach($latest_blog as $blogL)
                        <li>
                            <div class="image">
                                <img src="{{ asset($blogL->main_image) }}" alt="{{ $blogL->title }}">
                            </div>
                            <div class="content">
                                <div class="blog-meta mb-5">
                                    <a class="date" href="{{ route('front.blog-details', $blogL->slug) }}"><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($blogL->publish_date)->locale('az')->translatedFormat('j F Y') }}</a>
                                </div>
                                <h5><a href="{{ route('front.blog-details', $blogL->slug) }}">{{ $blogL->title }}</a></h5>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(isset($tags) && $tags)
            <div class="widget widget-tag-cloud wow fadeInUp delay-0-2s">
                <h4 class="widget-title">Məşhur Teqlər</h4>
                <div class="tag-coulds">
                    @foreach($tags as $tag)
                        <a href="{{ route('front.blogs', ['tag' => $tag]) }}">{{ $tag }}</a>
                    @endforeach
                </div>
            </div>
        @endif
        @if(false)
            <div class="widget widget-cta wow fadeInUp delay-0-2s">
                <div class="cta-widget" style="background-image: url(assets/images/widgets/widget-cta.jpg);">
                    <span class="sub-title">Get A Quote</span>
                    <h4>Looking For Creative Web Designer</h4>
                    <a href="contact.html" class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                </div>
            </div>
        @endif
    </div>
</div>
