@extends('Front.Layout.master')

@section('title')
 {{ __('front_master.about') }}
@endsection

@section('css')

@endsection

@section('content')
    <section class="inner-banner inner-banner__overlay-two" style="background-image: url({{ asset('storage/about/banners').'/'.\App\Helpers\Options::getOption('photo_banner') }});">
        <div class="container">
            <p class="inner-banner__tag-line">{{ __('front_about.most_successful_law_firm') }}</p><!-- /.inner-banner__tag-line -->
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="{{ route('front.home') }}">{{ __('front_master.home_upper') }}</a></li>
                <li>{{ __('front_master.about') }}</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->

    <section class="about-two">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-5">
                    <div class="about-two__content">
                        <p class="about-two__tag-line">Proident sunt culpa officia deserunt </p><!-- /.about-two__tag-line -->
                        <h3 style="font-family: Arial" class="about-two__title">{{ __('front_about.solving_issues_with_great_attention') }}.</h3><!-- /.about-two__title -->
                        <p class="about-two__text">Labore et dolore magna aliqu. Ut enim ad minim veniam, quis nostrud exercitation ullamco dui laboris nisi ut aliquip ex dea commodo consequat. Duis aute irure dolor reprehenderit kind voluptate velit ese cillum dolore fugiat nula pariatur. Excepteur sint occaecat cupidatas non.</p><!-- /.about-two__text -->
                        <a href="{{ route('front.services') }}" class="thm-btn about-two__btn">{{ __('front_master.services') }} <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div><!-- /.about-two__content -->
                </div><!-- /.col-xl-5 -->
                <div class="col-xl-7">
                    <div class="about-two__images wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('assets/front') }}/images/resources/new-about-1-1.jpg" alt="" />
                        <img src="{{ asset('assets/front') }}/images/resources/new-about-1-2.jpg" alt="" />
                    </div><!-- /.about-two__images -->
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-two -->


    <section class="service-one service-one__about-page">
        <div class="container">
            <div class="inner-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms">
                            <i class="service-one__icon  opklim-service-1-1"></i>
                            <h3 style="@if(app()->getLocale() == 'az') font-size : 16px !important; @endif" class="service-one__title"><a href="{{ route('front.contact') }}">{{ __('front_service.free_case_evaluation') }}</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Deserunt mollit animd laborum perspic</p><!-- /.service-one__text -->
                            <a href="javascript: void(0)" class="thm-btn service-one__btn" id="caseBtn">{{ __('front_about.learn_more') }} <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms">
                            <i class="service-one__icon  opklim-service-1-2"></i>
                            <h3 class="service-one__title"><a href="{{ route('front.contact') }}">{{ __('front_about.find_a_lawyer') }}</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Deserunt mollit animd laborum perspic</p><!-- /.service-one__text -->
                            <a href="{{ route('front.contact') }}" class="thm-btn service-one__btn">{{ __('front_about.learn_more') }} <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms">
                            <i class="service-one__icon  opklim-service-1-3"></i>
                            <h3 class="service-one__title"><a href="contact.html">Corporate ligitation</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Deserunt mollit animd laborum perspic</p><!-- /.service-one__text -->
                            <a href="#" class="thm-btn service-one__btn">{{ __('front_about.learn_more') }} <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </section><!-- /.service-one -->

    <section class="progress-feature__wrapper">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-6 progress-one__wrapper d-flex" style="background-image: url({{ asset('storage/about/missions').'/'.\App\Helpers\Options::getOption('photo_mission') }});">
                    <div class="progress-one__content my-auto">
                        <div class="progress-one__box">
                            <div class="progress-one__box-single">
                                <div class="progress-one__circle circle-box" data-options='{"value": {{ \App\Helpers\Options::getOption('legal_solutions')/100 }}, "size": 155, "fill": {"color": "#e23e4e" }, "emptyFill": "#ffffff" }'>
                                    <span class="progress-one__value"><span class="counter">{{ \App\Helpers\Options::getOption('legal_solutions') }}</span>%</span>
                                </div><!-- /.progress-one__circle -->
                                <h3 class="progress-one__title">{{ __('front_about.legal_solutions') }}</h3><!-- /.progress-one__title -->
                            </div><!-- /.progress-one__box-single -->
                        </div><!-- /.progress-one__box -->
                        <span style="line-height: 40px" class="progress-one__block-title">{{ __('front_about.skilled_lawyers_at_help_with_a_clear_mission') }}</span><!-- /.progress-one__block-title -->
                    </div><!-- /.progress-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 feature-one__wrap">
                    <div class="feature-one__main">
                        <div class="block-title text-left">
                            <p class="block-title__text-two">Culpa officia deserunt mollit animd laborum</p><!-- /.block-title__text-one -->
                            <h3 class="block-title__title">{{ __('front_about.innovative_approach') }}</h3><!-- /.block-title__title -->
                        </div><!-- /.block-title -->
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <i class="opklim-police-badge"></i>
                            </div><!-- /.feature-one__icon -->
                            <div class="feature-one__content">
                                <span class="feature-one__title">{{ __('front_about.trusted_advisors_for_successful_people') }}</span><!-- /.feature-one__title -->
                                <p class="feature-one__text">Miventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim consequuntur magni dolores eos.</p><!-- /.feature-one__text -->
                            </div><!-- /.feature-one__content -->
                        </div><!-- /.feature-one__single -->
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <i class="opklim-writing-tool"></i>
                            </div><!-- /.feature-one__icon -->
                            <div class="feature-one__content">
                                <span class="feature-one__title">{{ __('front_about.our_talks_with_people_are_confidential') }}</span><!-- /.feature-one__title -->
                                <p class="feature-one__text">Miventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim consequuntur magni dolores eos.</p><!-- /.feature-one__text -->
                            </div><!-- /.feature-one__content -->
                        </div><!-- /.feature-one__single -->
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <i class="opklim-books"></i>
                            </div><!-- /.feature-one__icon -->
                            <div class="feature-one__content">
                                <span class="feature-one__title">{{ __('front_about.legal_regulatory_developments_that_impact') }} </span><!-- /.feature-one__title -->
                                <p class="feature-one__text">Miventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim consequuntur magni dolores eos.</p><!-- /.feature-one__text -->
                            </div><!-- /.feature-one__content -->
                        </div><!-- /.feature-one__single -->
                    </div><!-- /.feature-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section><!-- /.progress-feature__wrapper -->


    <section class="fact-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="fact-three__single text-center">
                        <i class="fact-three__icon opklim-law-1-1"></i>
                        <h3 class="fact-three__title"><span class="counter">{{ \App\Helpers\Options::getOption('cases_we_won') }}</span>%</h3><!-- /.fact-three__title -->
                        <p class="fact-three__text">{{ __('front_about.cases_we_won') }}</p><!-- /.fact-three__text -->
                    </div><!-- /.fact-three__single -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="fact-three__single text-center">
                        <i class="fact-three__icon opklim-service-1-2"></i>
                        <h3 class="fact-three__title"><span class="counter">{{ \App\Helpers\Options::getOption('free_consultations') }}</span></h3><!-- /.fact-three__title -->
                        <p class="fact-three__text">{{ __('front_about.free_consultations') }}</p><!-- /.fact-three__text -->
                    </div><!-- /.fact-three__single -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="fact-three__single text-center">
                        <i class="fact-three__icon opklim-policy"></i>
                        <h3 class="fact-three__title"><span class="counter">{{ \App\Helpers\Options::getOption('cases_dismissed') }}</span></h3><!-- /.fact-three__title -->
                        <p class="fact-three__text">{{ __('front_about.cases_dismissed') }}</p><!-- /.fact-three__text -->
                    </div><!-- /.fact-three__single -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.fact-three -->

    @include('Front.Pages.our_lawyers')

    <section class="cta-one">
        <div class="container text-center">
            <span class="cta-one__title">{{ __('front_master.need_an_advice') }} <br> {{ __('front_master.get_appointment') }}</span><!-- /.cta-one__title -->
            <p class="cta-one__phone">
                <i class="fa fa-phone-alt"></i>
                {{ __('front_master.quick_help') }}
                <a href="tel:{{ \App\Helpers\Options::getOption('tel') }}">{{ \App\Helpers\Options::getOption('tel') }}</a>
            </p><!-- /.cta-one__phone -->
            <ul class="list-unstyled cta-one__contact">
                <li>
                    <i class="far fa-envelope-open"></i>
                    <a href="mailto:{{ \App\Helpers\Options::getOption('email') }}">{{ \App\Helpers\Options::getOption('email') }}</a>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    24/7 {{ __('front_master.live_support') }}
                </li>
            </ul><!-- /.list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.cta-one -->
    <section class="case-form-one">
        <div class="container">
            <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                <div class="block-title text-center">
                    <h3 class="block-title__title">{{ __('front_service.free_case_evaluation') }}</h3><!-- /.block-title__title -->
                    <p class="block-title__text-one">Proident sunt culpa officia deserunt mollit animd laborum perspicia natus <br> error voluptatem qui acusantium doloremque laudan.</p><!-- /.block-title__text-one -->
                </div><!-- /.block-title -->
                <form method="POST" action="" onsubmit="return false" class="case-form-one__form contact-form-validated">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="name" id="appointment_name" placeholder="{{ __('front_master.your_name') }}">
                                <small class="text-danger" id="appointment_name-error"></small>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="email" id="appointment_email" placeholder="{{ __('login.email') }}">
                                <small class="text-danger" id="appointment_email-error"></small>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="phone" id="appointment_phone" placeholder="{{ __('front_master.phone') }}">
                                <small class="text-danger" id="appointment_phone-error"></small>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <i class="far fa-calendar-alt"></i>
                                <input type="text" name="date" id="appointment_date" class="datepicker" placeholder="{{ __('front_about.select_day') }}">
                                <small class="text-danger" id="appointment_date-error"></small>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <select class="selectpicker" name="time" id="appointment_clock">
                                    <option value="">{{ __('front_about.select_time') }}</option>
                                    <option value="9.01-12.00">9.01-12.00</option>
                                    <option value="12.01-15.00">12.01-15.00</option>
                                    <option value="15.01-11.00">15.01-18.00</option>
                                </select>
                                <small class="text-danger" id="appointment_clock-error"></small>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <select class="selectpicker" name="services" id="appointment_service">
                                    <option>{{ __('front_about.service_required') }}</option>
                                    @foreach($services as $service)
                                        @if(app()->getLocale() == 'az')
                                            <option value="{{ $service->id }}">{{ $service->service_name_az }}</option>
                                        @else
                                            <option value="{{ $service->id }}">{{ $service->service_name_en }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <small class="text-danger" id="appointment_service-error"></small>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="case-form-one__field">
                                <textarea name="message" id="appointment_message" placeholder="{{ __('front_master.message') }}"></textarea>
                                <small class="text-danger" id="appointment_message-error"></small>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="case-form-one__field text-center mb-0">
                                <input type="hidden" id="appointment_url" value="{{ route('front.get.free.case.evaluation') }}">
                                <button type="button" id="appointment_btn" class="thm-btn case-form-one__btn">{{ __('front_master.book_an_appointment') }} <i class="fa fa-long-arrow-alt-right"></i></button>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                    </div><!-- /.row -->
                </form><!-- /.case-form-one__form -->
                <div class="result"></div><!-- /.result -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </section><!-- /.case-form-one -->
@endsection

@section('js')
    <script src="{{ asset('js/case.js') }}"></script>
    <script src="{{ asset('js/appointment.js') }}"></script>
@endsection
