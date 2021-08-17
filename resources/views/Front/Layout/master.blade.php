<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="title" content="@yield('meta_title',__('meta.title'))">
    <meta name="description" content="@yield('meta_description',__('meta.description'))">

    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('meta_url',url()->current())">
    <meta property="og:title" content="@yield('meta_og_title',__('meta.title'))">
    <meta property="og:description" content="@yield('meta_og_description',__('meta.description'))">
    <meta property="og:image" content="@yield('meta_og_image','')">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="@yield('meta_twitter_url',url()->current())">
    <meta property="twitter:title" content="@yield('meta_twitter_title',__('meta.title'))">
    <meta property="twitter:description" content="@yield('meta_twitter_description',__('meta.description'))">
    <meta property="twitter:image" content="@yield('meta_twitter_image','')">

    <title>{{ config('app.name') }} @yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/front') }}/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/front') }}/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/front') }}/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('assets/front') }}/images/favicon/site.webmanifest">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#e0a965">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#e0a965">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#e0a965">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/hover-min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/plugins/opklim-icons/style.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/plugins/fontawesome-5/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/nouislider.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/nouislider.pips.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/front') }}/css/responsive.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "d5253539-78d1-47dc-9130-0e4e2e53c3dd",
            });
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/611a6be2d6e7610a49b06cee/1fd7jarmm';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    @toastr_css
    @yield('css')
</head>

<body>
@include('Front.Pages.bottom-menu')
<div class="preloader"><span><img src="{{ asset('assets/front') }}/images/resources/preloader.png" alt="Awesome Image" /></span></div><!-- /.preloader -->
<div class="page-wrapper">
    <div class="topbar-two">
        <div class="container">
            <div class="topbar-two__left">
                <a class="topbar-two__link" href="tel:{{ \App\Helpers\Options::getOption('tel') }}"><i class="fa fa-phone-alt"></i>{{ __('front_master.get_free_advice') }} &nbsp;<span>{{ \App\Helpers\Options::getOption('tel') }}</span></a>
                <a class="topbar-two__link" target="_blank" href="mailto:{{ \App\Helpers\Options::getOption('email') }}"><i class="fa fa-envelope-open"></i>{{ \App\Helpers\Options::getOption('email') }}</a>
            </div><!-- /.topbar-two__left -->
            <div class="topbar-two__right">
                <a href="{{ route('front.contact') }}" class="thm-btn header-booking__btn">{{ __('front_master.book_an_appointment') }} <i class="fas fa-long-arrow-alt-right"></i></a>
            </div><!-- /.topbar-two__right -->
        </div><!-- /.container -->
    </div><!-- /.topbar-two -->
    <input type="hidden" id="bottomUrl" value="{{ asset('css/bottom.css') }}">
    <input type="hidden" id="searchUrl" value="{{ route('front.search') }}">
    <input type="hidden" id="commentUrl" value="{{ route('front.comment') }}">
    <input type="hidden" id="loadCommentsUrl" value="{{ route('front.load.comments') }}">
    <input type="hidden" id="re-key" value="{{env('RECAPTCHA_SITE_KEY')}}">
    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
    <header class="site-header site-header__header-two  ">
        <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
            <div class="container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="logo-box">
                    <a class="navbar-brand" href="{{ route('front.home') }}">
                        <img src="{{ asset('assets/front') }}/images/resources/logo-dark-1-1.png" class="main-logo" alt="Awesome Image" />
                    </a>
                    <button class="menu-toggler" data-target=".main-navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                </div><!-- /.logo-box -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="main-navigation">
                    <ul class=" navigation-box">
                        <li {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'front.home' ? "class=current" : '' }}>
                            <a href="{{ route('front.home') }}">{{ __('front_master.home') }}</a>
                        </li>
                        <li >
                            <a href="{{ route('front.about') }}">{{ __('front_master.about') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('front.services') }}">{{ __('front_master.services') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('front.attorneys') }}">{{ __('front_master.attorneys') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('front.blog') }}">{{ __('blog.blogs') }}</a>
                        </li>
                        <li {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'front.contact' ? "class=current" : '' }}>
                            <a href="{{ route('front.contact') }}">{{ __('front_master.contact') }}</a>
                        </li>
                        <li>
                            <div class="d-lg-block d-none dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink78" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;font-weight: bold;color: #333333">{{ __('front_master.lang') }}</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink78">
                                    <a class="dropdown-item" href="{{ route('front.lang','az') }}"><span class="flag-icon flag-icon-az"></span> AZ</a>
                                    <a class="dropdown-item" href="{{ route('front.lang','en') }}"><span class="flag-icon flag-icon-gb"></span> EN</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </div>
            <!-- /.container -->
        </nav>
    </header><!-- /.site-header -->

    @yield('content')

    <section class="mailchimp-one">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-xl-5">
                    <div class="mailchimp-one__content">
                        <h3 class="mailchimp-one__title">{{ __('front_master.join_our_list_to_stay_in_touch') }}</h3><!-- /.mailchimp-one__title -->
                        <p class="mailchimp-one__text">{{ __('front_master.we_ll_never_share_your_email_with_anyone_else') }}</p><!-- /.mailchimp-one__text -->
                    </div><!-- /.mailchimp-one__content -->
                </div><!-- /.col-xl-5 -->
                <div class="col-xl-7">
                    <form action="{{ route('front.subscribe') }}" method="POST" class="mailchimp-one__form mc-form" onsubmit="return false">
                        @csrf
                        <input type="hidden" id="recaptchaResponse">
                        <i class="fas fa-envelope-open mailchimp-one__icon"></i>
                        <input type="email" id="mc-email" placeholder="Email address ..." name="email">
                        <button type="button" id="mc-btn" class="thm-btn mailchimp-one__btn">{{ __('front_master.subscribe') }} <i class="fas fa-long-arrow-alt-right"></i></button>
                    </form><!-- /.mailchimp-one__form -->
                    <div class="mc-form__response" id="subscribe-error"></div><!-- /.mc-form__response -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.mailchimp-one -->

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="footer-widget">
                        <a href="{{ route('front.home') }}" class="footer-widget__logo"><img src="{{ asset('assets/front') }}/images/resources/logo-light-1-2.png" alt="Awesome Image" /></a>
                        <p class="footer-widget__text">Ipsum dolor sit amet, consecterelit, sed eiusmod <br>
                            tempor incididunt labore et dolore magnas. Lorem <br>
                            ipsum dolor sit amet, consectetur.</p><!-- /.footer-widget__text -->

                        <p class="footer-widget__text">Do eiusmod tempor incididunt ut labore et dolore <br>
                            magna aliquat enim ad minim veniam.</p><!-- /.footer-widget__text -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-4 -->
                <div class="col-xl-2 col-lg-6">
                    <div class="footer-widget">
                        <h3 style="font-family: Arial" class="footer-widget__title">{{ __('front_master.services') }}</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__links list-unstyled">
                            @if(app()->getLocale() == 'az')
                                @foreach($services as $service)
                                    <li><a href="{{ route('front.services') }}">{{ $service->service_name_az }}</a></li>
                                @endforeach
                            @else
                                @foreach($services as $service)
                                    <li><a href="{{ route('front.services') }}">{{ $service->service_name_en }}</a></li>
                                @endforeach
                            @endif
                        </ul><!-- /.footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-2 -->
                <div class="col-xl-3 col-lg-6">
                    <div class="footer-widget footer-widget__quick-link">
                        <h3 style="font-family: Arial" class="footer-widget__title">{{ __('front_master.quick_links') }}</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__links list-unstyled">
                            <li><a href="{{ route('front.about') }}">{{  __('front_master.about') }}</a></li>
                            <li><a href="{{ route('front.attorneys') }}">{{ __('front_master.attorneys') }}</a></li>
                            <li><a href="{{ route('front.contact') }}">{{ __('front_master.contact') }}</a></li>
                            <li id="appointmentLi"><a href="javascript:void (0)">{{ __('front_master.book_an_appointment') }}</a></li>
                            <li><a href="{{ route('front.blog') }}">{{ __('blog.blogs') }}</a></li>
                        </ul><!-- /.footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->

                <div class="col-xl-3 col-lg-6">
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">Head Office</h3><!-- /.footer-widget__title -->
                        <p class="footer-widget__text">15 Pillis Avenue, Southern Street <br> Camron, Florida FL 33069</p><!-- /.footer-widget__text -->
                        <p class="footer-widget__text footer-widget__contact-info"><span>Helpline: </span> <a href="tel:1-258-985-703">1-258-985-703</a></p><!-- /.footer-widget__text -->
                        <p class="footer-widget__text">Mon to Fri : 09:00 am - 18:00 pm <br> Sat : 08:00 am - 16:00 pm</p><!-- /.footer-widget__text -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.site-footer -->


    <div class="site-footer__bottom">
        <div class="container">
            <p class="site-footer__copy">© 2019 OPKLIM Law Firm. All Rights Reserved. <a href="#">Privacy Notice</a></p><!-- /.site-footer__copy -->

            <div class="site-footer__social">
                <a href="{{ \App\Helpers\Options::getOption('twitter') }}" target="_blank" class="fab fa-twitter"></a>
                <a href="{{ \App\Helpers\Options::getOption('facebook') }}" target="_blank" class="fab fa-facebook"></a>
                <a href="{{ \App\Helpers\Options::getOption('instagram') }}" target="_blank" class="fab fa-instagram"></a>
                <a href="{{ \App\Helpers\Options::getOption('youtube') }}" target="_blank" class="fab fa-youtube"></a>
            </div><!-- /.site-footer__social -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->


</div><!-- /.page-wrapper -->


<div class="side-menu__block">
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">
        <a href="{{ route('front.home') }}"><img src="{{ asset('assets/front') }}/images/resources/logo-dark-1-1.png" alt="Awesome Image" /></a>
        <div class="side-menu__block-about">
            <h3 class="side-menu__block__title">About Us</h3><!-- /.side-menu__block__title -->
            <p class="side-menu__block-about__text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and </p><!-- /.side-menu__block-about__text -->
            <a href="#" class="thm-btn side-menu__block-about__btn">Get Consultation</a>
        </div><!-- /.side-menu__block-about -->
        <hr class="side-menu__block-line" />
        <div class="side-menu__block-contact">
            <h3 class="side-menu__block__title">{{ __('front_master.contact_us') }}</h3><!-- /.side-menu__block__title -->
            <ul class="side-menu__block-contact__list">
                <li class="side-menu__block-contact__list-item">
                    <i class="fa fa-map-marker"></i>
                    Rock St 12, Newyork City, USA
                </li><!-- /.side-menu__block-contact__list-item -->
                <li class="side-menu__block-contact__list-item">
                    <i class="fa fa-phone"></i>
                    <a href="tel:{{ \App\Helpers\Options::getOption('tel') }}">{{ \App\Helpers\Options::getOption('tel') }}</a>
                </li><!-- /.side-menu__block-contact__list-item -->
                <li class="side-menu__block-contact__list-item">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:{{ \App\Helpers\Options::getOption('email') }}">{{ \App\Helpers\Options::getOption('email') }}</a>
                </li><!-- /.side-menu__block-contact__list-item -->
            </ul><!-- /.side-menu__block-contact__list -->
        </div><!-- /.side-menu__block-contact -->
        <p class="side-menu__block__text site-footer__copy-text"><a href="#">{{ config('app.name') }}</a> <i class="far fa-copyright"></i> {{ date('Y') }} {{ __('front_master.all_rights_reserved') }}</p>
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->
<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="{{ __('front_master.type_here_to_search') }}....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.search-popup__inner -->
</div><!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
<script src="{{ asset('assets/front') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets/front') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/front') }}/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('assets/front') }}/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets/front') }}/js/isotope.js"></script>
<script src="{{ asset('assets/front') }}/js/jquery.counterup.min.js"></script>
<script src="{{ asset('assets/front') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('assets/front') }}/js/jquery.validate.min.js"></script>
<script src="{{ asset('assets/front') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets/front') }}/js/TweenMax.min.js"></script>
<script src="{{ asset('assets/front') }}/js/jquery.enllax.min.js"></script>
<script src="{{ asset('assets/front') }}/js/waypoints.min.js"></script>
<script src="{{ asset('assets/front') }}/js/wow.min.js"></script>
<script src="{{ asset('assets/front') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('assets/front') }}/js/circle-progress.min.js"></script>
<script src="{{ asset('assets/front') }}/js/jquery.ajaxchimp.min.js"></script>

<script src="{{ asset('assets/front') }}/js/nouislider.js"></script>
<script src="{{ asset('assets/front') }}/js/jquery.bootstrap-touchspin.min.js"></script>
<script src="{{ asset('assets/front') }}/js/theme.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LfkLJ8bAAAAAIXkFeSJbKX8pn1ZdpW5Ec44UtSo"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#mc-email').keyup(function (event) {
            if (event.keyCode === 13)
            {
                $('#mc-btn').click();
            }
        });

        $('#mc-btn').click(function () {
            $('#subscribe-error').html('');
            $('#mc-btn').prop('disabled',true);
            grecaptcha.ready(function () {
                grecaptcha.execute('6LfkLJ8bAAAAAIXkFeSJbKX8pn1ZdpW5Ec44UtSo', { action: 'subscribe' }).then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;

                    let email           = $('#mc-email').val().trim();
                    let recaptcha       = $('#recaptchaResponse').val().trim();
                    let action          = 'subscribe';
                    $.ajax({
                        type : 'POST',
                        data : {email,recaptcha,action},
                        url  : '{!! route('front.subscribe') !!}',
                        success : function (response) {
                            if (response == 'true')
                            {
                                $('#subscribe-error').html('').html('You have been subscribed successfully');
                                $('#mc-btn').prop('disabled',true);
                            }
                        },
                        error   : function (myErrors) {
                            $.each(myErrors.responseJSON.errors,function (key, item) {
                                $('#subscribe-error').html('').html(item);
                            })
                            $('#mc-btn').prop('disabled',false);
                        }
                    });
                });
            });
        });
    });
</script>
<script src="{{ asset('js/bottom.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
<script src="{{ asset('js/appointmentFocus.js') }}"></script>
@toastr_js
@toastr_render
@yield('js')

</body>

</html>
