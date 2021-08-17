<nav class="mobile-bottom-nav h-2" style="line-height: 60px" id="mobile-nav">
    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active col-2">
{{--        <div class="mobile-bottom-nav__item- bottom-menu">--}}
{{--            <a href="{{ route('front.home') }}"><i class="text-light fa-2x fa fa-home"></i></a>--}}
{{--        </div>--}}
    </div>
    <div class="mobile-bottom-nav__item col-2">
        <div class="mobile-bottom-nav__item- bottom-menu">
            <a target="_blank" href="mailto:{{ \App\Helpers\Options::getOption('email') }}"><i class="text-light fa-2x fa fa-envelope"></i>{{ \App\Helpers\Options::getOption('email') }}</a>
        </div>
    </div>
    <div class="mobile-bottom-nav__item col-2">
        <div class="mobile-bottom-nav__item-content bottom-menu">
            <a href="tel:{{ \App\Helpers\Options::getOption('tel') }}"><i class="text-light fa-2x fa fa-phone"></i></a>
        </div>
    </div>

    <div class="mobile-bottom-nav__item col-2">
        <div class="mobile-bottom-nav__item-content bottom-menu">
            <a href="{{ \App\Helpers\Options::getOption('facebook') }}" target="_blank"><i class="text-light fa-2x fab fa-facebook-f"></i></a>
        </div>
    </div>

    <div class="mobile-bottom-nav__item col-2">
        <div class="mobile-bottom-nav__item-content bottom-menu">
            <a href="{{ \App\Helpers\Options::getOption('instagram') }}" target="_blank"><i class="text-light fa-2x fab fa-instagram"></i></a>
        </div>
    </div>

    <div class="mobile-bottom-nav__item col-2">
        <div class="mobile-bottom-nav__item-content bottom-menu">
            <a href="{{ \App\Helpers\Options::getOption('twitter') }}" target="_blank"><i class="text-light fa-2x fab fa-twitter"></i></a>
        </div>
    </div>
</nav>
