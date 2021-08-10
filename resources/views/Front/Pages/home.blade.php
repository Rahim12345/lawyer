@extends('Front.Layout.master')

@section('title')
 | Home
@endsection

@section('css')

@endsection

@section('content')
    <section class="slider-two">
        <div class="slider-one__carousel owl-carousel owl-theme">
            <div class="item slider-one__slide slide-two__slide slider-two__slider-1" style="background-image: url({{ asset('assets/front') }}/images/slider/new-slider-2-1.jpg);" data-thumb="{{ asset('assets/front') }}/images/slider/new-slider-2-1.jpg">
                <div class="container text-center">
                    <p class="slider-two__tag-line">{{ __('front_about.most_successful_law_firm') }}</p><!-- /.slider-two__tag-line -->
                    <h2 class="slider-two__title">{{ __('front_service.effective_legal_solutions') }}</h2><!-- /.slider-two__title -->
                    <p class="slider-two__text">Eiusmod tempor incididunt ut labore et dolore magna aliqua <br> anim sed minim veniam quis nostrud exercitation </p>
                    <!-- /.slider-two__text -->
                    <div class="slider-two__btn-block">
                        <a href="#" class="thm-btn slider-two__btn">get started <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                        <a href="{{ route('front.services') }}" class="thm-btn slider-two__btn slider-two__btn-two">{{ __('front_service.our_services') }} <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                    </div><!-- /.slider-two__btn-block -->
                </div><!-- /.container -->
            </div><!-- /.item -->
            <div class="item slider-one__slide slide-two__slide slider-two__slider-2" style="background-image: url({{ asset('assets/front') }}/images/slider/new-slider-2-2.jpg);" data-thumb="{{ asset('assets/front') }}/images/slider/new-slider-2-2.jpg">
                <div class="container text-center">
                    <p class="slider-two__tag-line">{{ __('front_about.most_successful_law_firm') }}</p>
                    <!-- /.slider-two__tag-line -->
                    <h2 class="slider-two__title">{{ __('front_service.effective_legal_solutions') }}</h2><!-- /.slider-two__title -->
                    <p class="slider-two__text">Eiusmod tempor incididunt ut labore et dolore magna aliqua <br> anim sed minim veniam quis nostrud exercitation </p>
                    <!-- /.slider-two__text -->
                    <div class="slider-two__btn-block">
                        <a href="#" class="thm-btn slider-two__btn">get started <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                        <a href="{{ route('front.services') }}" class="thm-btn slider-two__btn slider-two__btn-two">{{ __('front_service.our_services') }} <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                    </div><!-- /.slider-two__btn-block -->
                </div><!-- /.container -->
            </div><!-- /.item -->
            <div class="item slider-one__slide slide-two__slide slider-two__slider-3" style="background-image: url({{ asset('assets/front') }}/images/slider/new-slider-2-3.jpg);" data-thumb="{{ asset('assets/front') }}/images/slider/new-slider-2-3.jpg">
                <div class="container text-center">
                    <p class="slider-two__tag-line">{{ __('front_about.most_successful_law_firm') }}</p><!-- /.slider-two__tag-line -->
                    <h2 class="slider-two__title">{{ __('front_service.effective_legal_solutions') }}</h2><!-- /.slider-two__title -->
                    <p class="slider-two__text">Eiusmod tempor incididunt ut labore et dolore magna aliqua <br> anim sed minim veniam quis nostrud exercitation </p>
                    <!-- /.slider-two__text -->
                    <div class="slider-two__btn-block">
                        <a href="#" class="thm-btn slider-two__btn">get started <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                        <a href="{{ route('front.services') }}" class="thm-btn slider-two__btn slider-two__btn-two">{{ __('front_service.our_services') }} <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                    </div><!-- /.slider-two__btn-block -->
                </div><!-- /.container -->
            </div><!-- /.item -->
        </div><!-- /.slider-two__carousel -->
        <div class="slider-one__nav">
            <a class="slider-one__nav-left slide-one__left-btn" href="#">
                <i class="fas fa-angle-left"></i>
            </a>
            <a class="slider-one__nav-right slide-one__right-btn" href="#">
                <i class="fas fa-angle-right"></i>
            </a>
        </div><!-- /.slider-one__nav -->
    </section><!-- /.slider-two -->
    <div class="brand-one">
        <div class="container">
            <div class="thm__owl-carousel owl-carousel owl-theme" data-options='{"loop": true, "margin": 100, "nav": false, "dots": false, "autoWidth": false, "autoplay": true, "smartSpeed": 700, "autoplayTimeout": 5000, "autoplayHoverPause": true, "responsive": {"0": {"items": 2, "margin": 30 }, "480": {"items": 3, "margin": 40 }, "600": {"items": 4, "margin": 50 }, "991": {"items": 5 }, "1000": {"items": 6 }, "1200": {"items": 6 } } }'>
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-1.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-2.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-3.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-4.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-5.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-6.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-1.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-2.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-3.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-4.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-5.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/new-brand-1-6.png" alt="Awesome Image" />
                </div><!-- /.item -->
            </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
        </div><!-- /.container -->
    </div><!-- /.brand-one -->
    @include('Front.Pages.tetrak')
    <section class="case-three">
        <div class="container">
            <div class="block-title text-center">
                <p class="block-title__text-two">Culpa officia deserunt mollit animd laborum</p><!-- /.block-title__text-one -->
                <h3 style="font-family: Arial" class="block-title__title">{{ __('front_service.legal_practice_areas') }}</h3><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="case-three__single">
                            <div class="case-three__image">
                                <div class="case-three__image-inner">
                                    <img src="{{ asset('storage/service-covers/'.$service->cover) }}" alt="{{ app()->getLocale() == 'az' ? $service->service_name_az : $service->service_name_en }}" />
                                    <a href="#" class="case-three__image-link"><i class="opklim-house-with-scales"></i></a>
                                </div><!-- /.case-three__image-inner -->
                            </div><!-- /.case-three__image -->
                            <div class="case-three__content">
                                <h3 class="case-three__title"><a href="#">{{ app()->getLocale() == 'az' ? $service->service_name_az : $service->service_name_en }}</a></h3><!-- /.case-three__title -->
                            {{ app()->getLocale() == 'az' ? $service->service_less_az : $service->service_less_en }}<!-- /.case-three__text -->
                                <a class="case-three__link" href="{{ route('front.single.services',$service->slug) }}"><span>{{ __('front_service.more_details') }}</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-three__content -->
                        </div><!-- /.case-three__single -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.case-three -->
    <section class="fact-two">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="fact-two__image">
                        <img src="{{ asset('assets/front') }}/images/resources/new-fact-2-1.jpg" alt="Awesome Image" />
                    </div><!-- /.fact-two__image -->
                </div><!-- /.col-lg-5 -->
                <div class="col-lg-7">
                    <div class="fact-two__top">
                        <i class="opklim-law-1-1 fact-two__icon"></i>
                        <h3 class="fact-two__title">Developed a stronger commitment for people to make a difference by our leading attorneys.</h3><!-- /.fact-two__title -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#mission" class="nav-link active" data-toggle="tab">Our Mission</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="#vision" class="nav-link" data-toggle="tab">Our Vision</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="#success" class="nav-link" data-toggle="tab">Our Success</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.nav nav-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane animated fadeInUp show active" id="mission">
                                <p>Labore et dolore magna aliqu. Ut enim ad minim veniam quis nostrud exerci tation laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehende voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cupid atas non proident, sunt in culpa qui officia deserunt.</p>
                            </div><!-- /.tab-pane animated fadeInUp -->
                            <div class="tab-pane animated fadeInUp" id="vision">
                                <p>Labore et dolore magna aliqu. Ut enim ad minim veniam quis nostrud exerci tation laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehende voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cupid atas non proident, sunt in culpa qui officia deserunt.</p>
                            </div><!-- /.tab-pane animated fadeInUp -->
                            <div class="tab-pane animated fadeInUp" id="success">
                                <p>Labore et dolore magna aliqu. Ut enim ad minim veniam quis nostrud exerci tation laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehende voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cupid atas non proident, sunt in culpa qui officia deserunt.</p>
                            </div><!-- /.tab-pane animated fadeInUp -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.fact-two__top -->
                    <div class="fact-two__counter wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="fact-two__counter-single">
                                    <h3 class="counter">206</h3>
                                    <p>lawyers team</p>
                                </div><!-- /.fact-two__counter-single -->
                            </div><!-- /.col-md-4 col-sm-12 -->
                            <div class="col-md-4 col-sm-12">
                                <div class="fact-two__counter-single">
                                    <h3 class="counter">387</h3>
                                    <p>cases dismissed</p>
                                </div><!-- /.fact-two__counter-single -->
                            </div><!-- /.col-md-4 col-sm-12 -->
                            <div class="col-md-4 col-sm-12">
                                <div class="fact-two__counter-single">
                                    <h3><span class="counter">95</span>%</h3>
                                    <p>cases we won</p>
                                </div><!-- /.fact-two__counter-single -->
                            </div><!-- /.col-md-4 col-sm-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.fact-two__counter -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.fact-two -->

    @include('Front.Pages.evaluation_faq')

    @include('Front.Pages.our_lawyers')

    <section class="testimonials-two">
        <div class="container">
            <div class="thm__owl-carousel testimonials-two__carousel owl-carousel owl-theme" data-options='{"loop": true, "margin": 75, "nav": false, "dots": true, "autoWidth": false, "autoplay": true, "smartSpeed": 700, "autoplayTimeout": 5000, "autoplayHoverPause": true, "responsive": {"0": {"items": 1 }, "480": {"items": 1 }, "600": {"items": 1 }, "991": {"items": 2 }, "1000": {"items": 2 }, "1200": {"items": 2 } } }' data-carousel-prev-btn=".null" data-carousel-next-btn=".null">
                <div class="item">
                    <div class="testimonials-two__single">
                        <div class="testimonials-two__icon">
                            <i class="opklim-qoute-1-1"></i>
                        </div><!-- /.testimonials-two__icon -->
                        <div class="testimonials-two__content">
                            <p class="testimonials-two__text">Ipsum dolor sit amet, consecte stur adipisicing elit sed eiusmod aduras minim veniam quis nostrud exercitation ullamco enim ad duis autey irure dolor in reprehender voluptate sint occaecat cup non</p><!-- /.testimonials-two__text -->
                            <div class="testimonials-two__info">
                                <div class="testimonials-two__info-image">
                                    <div class="testimonials-two__info-image-inner">
                                        <img src="{{ asset('assets/front') }}/images/resources/testi-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.testimonials-two__info-image-inner -->
                                </div><!-- /.testimonials-two__info-image -->
                                <div class="testimonials-two__info-content">
                                    <h4 class="testimonials-two__info-name">John Benson</h4><!-- /.testimonials-two__info-name -->
                                    <p class="testimonials-two__info-designation">Florida, USA</p><!-- /.testimonials-two__info-designation -->
                                </div><!-- /.testimonials-two__info-content -->
                            </div><!-- /.testimonials-two__info -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.testimonials-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-two__single">
                        <div class="testimonials-two__icon">
                            <i class="opklim-qoute-1-1"></i>
                        </div><!-- /.testimonials-two__icon -->
                        <div class="testimonials-two__content">
                            <p class="testimonials-two__text">Ipsum dolor sit amet, consecte stur adipisicing elit sed eiusmod aduras minim veniam quis nostrud exercitation ullamco enim ad duis autey irure dolor in reprehender voluptate sint occaecat cup non</p><!-- /.testimonials-two__text -->
                            <div class="testimonials-two__info">
                                <div class="testimonials-two__info-image">
                                    <div class="testimonials-two__info-image-inner">
                                        <img src="{{ asset('assets/front') }}/images/resources/testi-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.testimonials-two__info-image-inner -->
                                </div><!-- /.testimonials-two__info-image -->
                                <div class="testimonials-two__info-content">
                                    <h4 class="testimonials-two__info-name">John Benson</h4><!-- /.testimonials-two__info-name -->
                                    <p class="testimonials-two__info-designation">Florida, USA</p><!-- /.testimonials-two__info-designation -->
                                </div><!-- /.testimonials-two__info-content -->
                            </div><!-- /.testimonials-two__info -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.testimonials-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-two__single">
                        <div class="testimonials-two__icon">
                            <i class="opklim-qoute-1-1"></i>
                        </div><!-- /.testimonials-two__icon -->
                        <div class="testimonials-two__content">
                            <p class="testimonials-two__text">Ipsum dolor sit amet, consecte stur adipisicing elit sed eiusmod aduras minim veniam quis nostrud exercitation ullamco enim ad duis autey irure dolor in reprehender voluptate sint occaecat cup non</p><!-- /.testimonials-two__text -->
                            <div class="testimonials-two__info">
                                <div class="testimonials-two__info-image">
                                    <div class="testimonials-two__info-image-inner">
                                        <img src="{{ asset('assets/front') }}/images/resources/testi-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.testimonials-two__info-image-inner -->
                                </div><!-- /.testimonials-two__info-image -->
                                <div class="testimonials-two__info-content">
                                    <h4 class="testimonials-two__info-name">John Benson</h4><!-- /.testimonials-two__info-name -->
                                    <p class="testimonials-two__info-designation">Florida, USA</p><!-- /.testimonials-two__info-designation -->
                                </div><!-- /.testimonials-two__info-content -->
                            </div><!-- /.testimonials-two__info -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.testimonials-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-two__single">
                        <div class="testimonials-two__icon">
                            <i class="opklim-qoute-1-1"></i>
                        </div><!-- /.testimonials-two__icon -->
                        <div class="testimonials-two__content">
                            <p class="testimonials-two__text">Ipsum dolor sit amet, consecte stur adipisicing elit sed eiusmod aduras minim veniam quis nostrud exercitation ullamco enim ad duis autey irure dolor in reprehender voluptate sint occaecat cup non</p><!-- /.testimonials-two__text -->
                            <div class="testimonials-two__info">
                                <div class="testimonials-two__info-image">
                                    <div class="testimonials-two__info-image-inner">
                                        <img src="{{ asset('assets/front') }}/images/resources/testi-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.testimonials-two__info-image-inner -->
                                </div><!-- /.testimonials-two__info-image -->
                                <div class="testimonials-two__info-content">
                                    <h4 class="testimonials-two__info-name">John Benson</h4><!-- /.testimonials-two__info-name -->
                                    <p class="testimonials-two__info-designation">Florida, USA</p><!-- /.testimonials-two__info-designation -->
                                </div><!-- /.testimonials-two__info-content -->
                            </div><!-- /.testimonials-two__info -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.testimonials-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-two__single">
                        <div class="testimonials-two__icon">
                            <i class="opklim-qoute-1-1"></i>
                        </div><!-- /.testimonials-two__icon -->
                        <div class="testimonials-two__content">
                            <p class="testimonials-two__text">Ipsum dolor sit amet, consecte stur adipisicing elit sed eiusmod aduras minim veniam quis nostrud exercitation ullamco enim ad duis autey irure dolor in reprehender voluptate sint occaecat cup non</p><!-- /.testimonials-two__text -->
                            <div class="testimonials-two__info">
                                <div class="testimonials-two__info-image">
                                    <div class="testimonials-two__info-image-inner">
                                        <img src="{{ asset('assets/front') }}/images/resources/testi-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.testimonials-two__info-image-inner -->
                                </div><!-- /.testimonials-two__info-image -->
                                <div class="testimonials-two__info-content">
                                    <h4 class="testimonials-two__info-name">John Benson</h4><!-- /.testimonials-two__info-name -->
                                    <p class="testimonials-two__info-designation">Florida, USA</p><!-- /.testimonials-two__info-designation -->
                                </div><!-- /.testimonials-two__info-content -->
                            </div><!-- /.testimonials-two__info -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.testimonials-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-two__single">
                        <div class="testimonials-two__icon">
                            <i class="opklim-qoute-1-1"></i>
                        </div><!-- /.testimonials-two__icon -->
                        <div class="testimonials-two__content">
                            <p class="testimonials-two__text">Ipsum dolor sit amet, consecte stur adipisicing elit sed eiusmod aduras minim veniam quis nostrud exercitation ullamco enim ad duis autey irure dolor in reprehender voluptate sint occaecat cup non</p><!-- /.testimonials-two__text -->
                            <div class="testimonials-two__info">
                                <div class="testimonials-two__info-image">
                                    <div class="testimonials-two__info-image-inner">
                                        <img src="{{ asset('assets/front') }}/images/resources/testi-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.testimonials-two__info-image-inner -->
                                </div><!-- /.testimonials-two__info-image -->
                                <div class="testimonials-two__info-content">
                                    <h4 class="testimonials-two__info-name">John Benson</h4><!-- /.testimonials-two__info-name -->
                                    <p class="testimonials-two__info-designation">Florida, USA</p><!-- /.testimonials-two__info-designation -->
                                </div><!-- /.testimonials-two__info-content -->
                            </div><!-- /.testimonials-two__info -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.testimonials-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-two__single">
                        <div class="testimonials-two__icon">
                            <i class="opklim-qoute-1-1"></i>
                        </div><!-- /.testimonials-two__icon -->
                        <div class="testimonials-two__content">
                            <p class="testimonials-two__text">Ipsum dolor sit amet, consecte stur adipisicing elit sed eiusmod aduras minim veniam quis nostrud exercitation ullamco enim ad duis autey irure dolor in reprehender voluptate sint occaecat cup non</p><!-- /.testimonials-two__text -->
                            <div class="testimonials-two__info">
                                <div class="testimonials-two__info-image">
                                    <div class="testimonials-two__info-image-inner">
                                        <img src="{{ asset('assets/front') }}/images/resources/testi-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.testimonials-two__info-image-inner -->
                                </div><!-- /.testimonials-two__info-image -->
                                <div class="testimonials-two__info-content">
                                    <h4 class="testimonials-two__info-name">John Benson</h4><!-- /.testimonials-two__info-name -->
                                    <p class="testimonials-two__info-designation">Florida, USA</p><!-- /.testimonials-two__info-designation -->
                                </div><!-- /.testimonials-two__info-content -->
                            </div><!-- /.testimonials-two__info -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.testimonials-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-two__single">
                        <div class="testimonials-two__icon">
                            <i class="opklim-qoute-1-1"></i>
                        </div><!-- /.testimonials-two__icon -->
                        <div class="testimonials-two__content">
                            <p class="testimonials-two__text">Ipsum dolor sit amet, consecte stur adipisicing elit sed eiusmod aduras minim veniam quis nostrud exercitation ullamco enim ad duis autey irure dolor in reprehender voluptate sint occaecat cup non</p><!-- /.testimonials-two__text -->
                            <div class="testimonials-two__info">
                                <div class="testimonials-two__info-image">
                                    <div class="testimonials-two__info-image-inner">
                                        <img src="{{ asset('assets/front') }}/images/resources/testi-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.testimonials-two__info-image-inner -->
                                </div><!-- /.testimonials-two__info-image -->
                                <div class="testimonials-two__info-content">
                                    <h4 class="testimonials-two__info-name">John Benson</h4><!-- /.testimonials-two__info-name -->
                                    <p class="testimonials-two__info-designation">Florida, USA</p><!-- /.testimonials-two__info-designation -->
                                </div><!-- /.testimonials-two__info-content -->
                            </div><!-- /.testimonials-two__info -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.testimonials-two__single -->
                </div><!-- /.item -->
            </div><!-- /.testimonials-two__carousel -->
        </div><!-- /.container -->
    </section><!-- /.testimonials-two -->

    <section class="blog-one blog-one__home-two">
        <div class="container">
            <div class="block-title text-center">
                <h3 class="block-title__title">What’s Happening</h3><!-- /.block-title__title -->
                <p class="block-title__text-two">Sunt officia deserunt animd laborum perspicial</p><!-- /.block-title__text-one -->
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <div class="blog-one__image-inner">
                                <img src="{{ asset('assets/front') }}/images/blog/blog-1-1.jpg" alt="Awesome Image" />
                                <a href="blog-post.html" class="blog-one__image-link"><i class="fa fa-link"></i></a>
                            </div><!-- /.blog-one__image-inner -->
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <div class="blog-one__meta">
                                <a href="blog-post.html">Sam benson</a>
                                <a href="blog-post.html">Immigration</a>
                            </div><!-- /.blog-one__meta -->
                            <h3 class="blog-one__title"><a href="blog-post.html">Tips for the Security Regulators The ‘Inside Story’</a></h3><!-- /.blog-one__title -->
                            <p class="blog-one__text">Miventore veritatis et quasi architec beat vitae dicta sunt explicabo nem enim cone quuntur magni dolores eos.</p><!-- /.blog-one__text -->
                            <div class="blog-one__bottom">
                                <a class="blog-one__link" href="blog-post.html"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                                <a href="blog-post.html" class="blog-one__share"><i class="fa fa-share-alt"></i></a>
                            </div><!-- /.blog-one__bottom -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <div class="blog-one__image-inner">
                                <img src="{{ asset('assets/front') }}/images/blog/blog-1-2.jpg" alt="Awesome Image" />
                                <a href="blog-post.html" class="blog-one__image-link"><i class="fa fa-link"></i></a>
                            </div><!-- /.blog-one__image-inner -->
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <div class="blog-one__meta">
                                <a href="blog-post.html">Sam benson</a>
                                <a href="blog-post.html">Immigration</a>
                            </div><!-- /.blog-one__meta -->
                            <h3 class="blog-one__title"><a href="blog-post.html">Tips for the Security Regulators The ‘Inside Story’</a></h3><!-- /.blog-one__title -->
                            <p class="blog-one__text">Miventore veritatis et quasi architec beat vitae dicta sunt explicabo nem enim cone quuntur magni dolores eos.</p><!-- /.blog-one__text -->
                            <div class="blog-one__bottom">
                                <a class="blog-one__link" href="blog-post.html"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                                <a href="blog-post.html" class="blog-one__share"><i class="fa fa-share-alt"></i></a>
                            </div><!-- /.blog-one__bottom -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="blog-one__more-block text-center">
                <a href="blog-grid.html" class="thm-btn blog-one__more-btn">view all news <i class="fas fa-long-arrow-alt-right"></i></a>
            </div><!-- /.blog-one__more-block -->
        </div><!-- /.container -->
    </section><!-- /.blog-one -->
@endsection

@section('js')
    <script src="{{ asset('js/appointment.js') }}"></script>
@endsection
