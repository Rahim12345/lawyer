@extends('Front.Layout.master')

@section('title')
    {{ __('front_master.contact') }}
@endsection

@section('css')

@endsection

@section('content')
    <section class="inner-banner">
        <div class="container">
            <p class="inner-banner__tag-line">{{ __('front_master.most_successful_Law_firm') }}</p><!-- /.inner-banner__tag-line -->
            <h2 class="inner-banner__title">{{ __('front_master.contact_us') }}</h2><!-- /.inner-banner__title -->
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="{{ route('front.home') }}">{{ __('front_master.home_upper') }}</a></li>
                <li>{{ __('front_master.contact') }}</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="contact-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form action="{{ route('front.contact.store') }}" class="contact-one__form contact-form-validated-my" method="POST">
                        @csrf
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse-contact">
                        <input type="hidden" name="action" id="action" value="contact">
                        <div class="block-title text-left">
                            <h3 class="block-title__title">{{ __('front_master.send_us_a_message') }}</h3><!-- /.block-title__title -->
                        </div><!-- /.block-title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="case-form-one__field">
                                    <input type="text" name="name" placeholder="{{ __('front_master.your_name') }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><!-- /.case-form-one__field -->
                            </div><!-- /.col-md-6 col-sm-12 -->
                            <div class="col-sm-12">
                                <div class="case-form-one__field">
                                    <input type="text" name="email" placeholder="Email">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><!-- /.case-form-one__field -->
                            </div><!-- /.col-md-6 col-sm-12 -->
                            <div class="col-sm-12">
                                <div class="case-form-one__field">
                                    <input type="text" name="subject" placeholder="{{ __('front_master.subject') }}">
                                    @error('subject')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><!-- /.case-form-one__field -->
                            </div><!-- /.col-md-6 col-sm-12 -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="case-form-one__field">
                                    <textarea name="message" placeholder="{{ __('front_master.message') }}"></textarea>
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><!-- /.case-form-one__field -->
                            </div><!-- /.col-md-6 col-sm-12 -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="case-form-one__field text-left mb-0">
                                    <button type="submit" id="contact-btn" class="thm-btn case-form-one__btn-my">{{ __('front_master.send_message') }} <i class="fa fa-long-arrow-alt-right"></i></button>
                                </div><!-- /.case-form-one__field -->
                            </div><!-- /.col-md-6 col-sm-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.contact-one__form -->
                </div><!-- /.col-lg-7 -->
                <div class="col-lg-5">
                    <div class="contact-one__info">
                        <div class="contact-one__info-single">
                            <h3 class="contact-one__info-title">{{ __('front_master.phone') }}</h3><!-- /.contact-one__info-title -->
                            <p class="contact-one__info-text">{{ __('front_master.helpline') }} <a href="tel:{{ \App\Helpers\Options::getOption('tel') }}"><strong>{{ \App\Helpers\Options::getOption('tel') }}</strong></a></p><!-- /.contact-one__info-text -->
                        </div><!-- /.contact-one__info-single -->
                        <div class="contact-one__info-single">
                            <h3 class="contact-one__info-title">Email</h3><!-- /.contact-one__info-title -->
                            <p class="contact-one__info-text"><a href="mailto:{{ \App\Helpers\Options::getOption('email') }}">{{ \App\Helpers\Options::getOption('email') }}</a></p><!-- /.contact-one__info-text -->
                        </div><!-- /.contact-one__info-single -->
                        <div class="contact-one__info-single">
                        </div><!-- /.contact-one__info-single -->
                        <div class="contact-one__info-single">
                            <div class="contact-one__info-social">
                                <a href="{{ \App\Helpers\Options::getOption('twitter') }}" class="fab fa-twitter"></a>
                                <a href="{{ \App\Helpers\Options::getOption('facebook') }}" class="fab fa-facebook"></a>
                                <a href="{{ \App\Helpers\Options::getOption('instagram') }}" class="fab fa-instagram"></a>
                                <a href="{{ \App\Helpers\Options::getOption('youtube') }}" class="fab fa-youtube"></a>
                            </div><!-- /.contact-one__info-social -->
                        </div><!-- /.contact-one__info-single -->
                    </div><!-- /.contact-one__info -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

@endsection

@section('js')
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfkLJ8bAAAAAIXkFeSJbKX8pn1ZdpW5Ec44UtSo', {action: 'contact'}).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse-contact');
                recaptchaResponse.value = token;
            });
        });
    </script>
@endsection
