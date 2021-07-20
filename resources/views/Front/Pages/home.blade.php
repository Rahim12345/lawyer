@extends('Front.Layout.master')

@section('title')
 | Home
@endsection

@section('css')

@endsection

@section('content')
    <section class="slider-two">
        <div class="slider-one__carousel owl-carousel owl-theme">
            <div class="item slider-one__slide slide-two__slide slider-two__slider-1" style="background-image: url({{ asset('assets/front') }}/images/slider/slider-2-1.jpg);" data-thumb="{{ asset('assets/front') }}/images/slider/slider-2-1.jpg">
                <div class="container text-center">
                    <p class="slider-two__tag-line">Most Successful Law Firm</p><!-- /.slider-two__tag-line -->
                    <h2 class="slider-two__title">Effective Legal Solutions</h2><!-- /.slider-two__title -->
                    <p class="slider-two__text">Eiusmod tempor incididunt ut labore et dolore magna aliqua <br> anim sed minim veniam quis nostrud exercitation </p>
                    <!-- /.slider-two__text -->
                    <div class="slider-two__btn-block">
                        <a href="#" class="thm-btn slider-two__btn">get started <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                        <a href="#" class="thm-btn slider-two__btn slider-two__btn-two">our services <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                    </div><!-- /.slider-two__btn-block -->
                </div><!-- /.container -->
            </div><!-- /.item -->
            <div class="item slider-one__slide slide-two__slide slider-two__slider-2" style="background-image: url({{ asset('assets/front') }}/images/slider/slider-2-2.jpg);" data-thumb="{{ asset('assets/front') }}/images/slider/slider-2-2.jpg">
                <div class="container text-center">
                    <p class="slider-two__tag-line">Most Successful Law Firm</p>
                    <!-- /.slider-two__tag-line -->
                    <h2 class="slider-two__title">Effective Legal Solutions</h2><!-- /.slider-two__title -->
                    <p class="slider-two__text">Eiusmod tempor incididunt ut labore et dolore magna aliqua <br> anim sed minim veniam quis nostrud exercitation </p>
                    <!-- /.slider-two__text -->
                    <div class="slider-two__btn-block">
                        <a href="#" class="thm-btn slider-two__btn">get started <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                        <a href="#" class="thm-btn slider-two__btn slider-two__btn-two">our services <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                    </div><!-- /.slider-two__btn-block -->
                </div><!-- /.container -->
            </div><!-- /.item -->
            <div class="item slider-one__slide slide-two__slide slider-two__slider-3" style="background-image: url({{ asset('assets/front') }}/images/slider/slider-2-3.jpg);" data-thumb="{{ asset('assets/front') }}/images/slider/slider-2-3.jpg">
                <div class="container text-center">
                    <p class="slider-two__tag-line">Most Successful Law Firm</p><!-- /.slider-two__tag-line -->
                    <h2 class="slider-two__title">Effective Legal Solutions</h2><!-- /.slider-two__title -->
                    <p class="slider-two__text">Eiusmod tempor incididunt ut labore et dolore magna aliqua <br> anim sed minim veniam quis nostrud exercitation </p>
                    <!-- /.slider-two__text -->
                    <div class="slider-two__btn-block">
                        <a href="#" class="thm-btn slider-two__btn">get started <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
                        <a href="#" class="thm-btn slider-two__btn slider-two__btn-two">our services <i class="fas fa-long-arrow-alt-right"></i></a><!-- /.thm-btn slider-two__btn -->
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
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-1.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-2.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-3.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-4.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-5.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-6.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-1.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-2.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-3.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-4.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-5.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('assets/front') }}/images/brand/brand-1-6.png" alt="Awesome Image" />
                </div><!-- /.item -->
            </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
        </div><!-- /.container -->
    </div><!-- /.brand-one -->
    <section class="service-two">
        <div class="container-fluid">
            <div class="block-title text-center">
                <h3 class="block-title__title">We’re recognized in all legal practises</h3><!-- /.block-title__title -->
                <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd laborum perspicia natus qui acusantium</p><!-- /.block-title__text-one -->
            </div><!-- /.block-title -->
            <p class="service-two__block-text text-center">Labore et dolore magna aliqu. Ut enim ad minim veniam, quis nostrud exercitation ullamco dui laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor reprehenderit kind voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatas non proident sunt <br> culpa qui officia deserunt doloremque laudantium totam rem aperiam eaque ipsa quae ab illo.</p><!-- /.service-two__block-text -->

            <div class="thm__owl-carousel owl-carousel owl-theme" data-options='{"loop": true, "margin": 0, "nav": false, "dots": false, "autoWidth": false, "touchDrag": false, "mouseDrag": false, "autoplay": false, "smartSpeed": 700, "autoplayTimeout": 5000, "autoplayHoverPause": true, "responsive": {"0": {"items": 1, "touchDrag": true, "mouseDrag": true }, "480": {"items": 1, "touchDrag": true, "mouseDrag": true }, "600": {"items": 2, "touchDrag": true, "mouseDrag": true }, "991": {"items": 3, "touchDrag": true, "mouseDrag": true }, "1440": {"items": 4, "touchDrag": true, "mouseDrag": true }, "1600": {"items": 4, "touchDrag": false, "mouseDrag": false } } }'>
                <div class="item">
                    <div class="service-two__single">
                        <div class="service-two__icon">
                            <i class="opklim-policy"></i>
                        </div><!-- /.service-two__icon -->
                        <div class="service-two__content">
                            <h3 class="service-two__title"><a href="#">free case evaluation</a></h3><!-- /.service-two__title -->
                            <p class="service-two__text">Sit amet, consectetur adipisicing elit por incididunt ut labore et dolore mal gna alin veniam sed quis.</p><!-- /.service-two__text -->
                        </div><!-- /.service-two__content -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="service-two__single">
                        <div class="service-two__icon">
                            <i class="opklim-judge"></i>
                        </div><!-- /.service-two__icon -->
                        <div class="service-two__content">
                            <h3 class="service-two__title"><a href="#">Find best lawyers</a></h3><!-- /.service-two__title -->
                            <p class="service-two__text">Sit amet, consectetur adipisicing elit por incididunt ut labore et dolore mal gna alin veniam sed quis.</p><!-- /.service-two__text -->
                        </div><!-- /.service-two__content -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="service-two__single">
                        <div class="service-two__icon">
                            <i class="opklim-service-1-3"></i>
                        </div><!-- /.service-two__icon -->
                        <div class="service-two__content">
                            <h3 class="service-two__title"><a href="#">passionate to help</a></h3><!-- /.service-two__title -->
                            <p class="service-two__text">Sit amet, consectetur adipisicing elit por incididunt ut labore et dolore mal gna alin veniam sed quis.</p><!-- /.service-two__text -->
                        </div><!-- /.service-two__content -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="service-two__single">
                        <div class="service-two__icon">
                            <i class="opklim-house-with-scales"></i>
                        </div><!-- /.service-two__icon -->
                        <div class="service-two__content">
                            <h3 class="service-two__title"><a href="#">trusted law firm</a></h3><!-- /.service-two__title -->
                            <p class="service-two__text">Sit amet, consectetur adipisicing elit por incididunt ut labore et dolore mal gna alin veniam sed quis.</p><!-- /.service-two__text -->
                        </div><!-- /.service-two__content -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.item -->
            </div><!-- /.service-two__carousel owl-carousel owl-theme -->
        </div><!-- /.container-fluid -->
    </section><!-- /.service-two -->
    <section class="case-three">
        <div class="container">
            <div class="block-title text-center">
                <p class="block-title__text-two">Culpa officia deserunt mollit animd laborum</p><!-- /.block-title__text-one -->
                <h3 class="block-title__title">Legal Practice Areas</h3><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="case-three__single">
                        <div class="case-three__image">
                            <div class="case-three__image-inner">
                                <img src="{{ asset('assets/front') }}/images/case/case-3-1.jpg" alt="Awesome Image" />
                                <a href="#" class="case-three__image-link"><i class="opklim-house-with-scales"></i></a>
                            </div><!-- /.case-three__image-inner -->
                        </div><!-- /.case-three__image -->
                        <div class="case-three__content">
                            <h3 class="case-three__title"><a href="#">Real Estate Laws</a></h3><!-- /.case-three__title -->
                            <p class="case-three__text">Sit amet, consectetur suadipisicing sed elit binty por incididunt uet laboret dolore dic maylas sinad gna alin veniam sem duiky quis.</p><!-- /.case-three__text -->
                            <a class="case-three__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.case-three__content -->
                    </div><!-- /.case-three__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="case-three__single">
                        <div class="case-three__image">
                            <div class="case-three__image-inner">
                                <img src="{{ asset('assets/front') }}/images/case/case-3-2.jpg" alt="Awesome Image" />
                                <a href="#" class="case-three__image-link"><i class="opklim-pistol"></i></a>
                            </div><!-- /.case-three__image-inner -->
                        </div><!-- /.case-three__image -->
                        <div class="case-three__content">
                            <h3 class="case-three__title"><a href="#">All Criminal Laws</a></h3><!-- /.case-three__title -->
                            <p class="case-three__text">Sit amet, consectetur suadipisicing sed elit binty por incididunt uet laboret dolore dic maylas sinad gna alin veniam sem duiky quis.</p><!-- /.case-three__text -->
                            <a class="case-three__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.case-three__content -->
                    </div><!-- /.case-three__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="case-three__single">
                        <div class="case-three__image">
                            <div class="case-three__image-inner">
                                <img src="{{ asset('assets/front') }}/images/case/case-3-3.jpg" alt="Awesome Image" />
                                <a href="#" class="case-three__image-link"><i class="opklim-judge"></i></a>
                            </div><!-- /.case-three__image-inner -->
                        </div><!-- /.case-three__image -->
                        <div class="case-three__content">
                            <h3 class="case-three__title"><a href="#">Personal Injury</a></h3><!-- /.case-three__title -->
                            <p class="case-three__text">Sit amet, consectetur suadipisicing sed elit binty por incididunt uet laboret dolore dic maylas sinad gna alin veniam sem duiky quis.</p><!-- /.case-three__text -->
                            <a class="case-three__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.case-three__content -->
                    </div><!-- /.case-three__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="case-three__single">
                        <div class="case-three__image">
                            <div class="case-three__image-inner">
                                <img src="{{ asset('assets/front') }}/images/case/case-3-4.jpg" alt="Awesome Image" />
                                <a href="#" class="case-three__image-link"><i class="opklim-law-1-1"></i></a>
                            </div><!-- /.case-three__image-inner -->
                        </div><!-- /.case-three__image -->
                        <div class="case-three__content">
                            <h3 class="case-three__title"><a href="#">Corporate Issues</a></h3><!-- /.case-three__title -->
                            <p class="case-three__text">Sit amet, consectetur suadipisicing sed elit binty por incididunt uet laboret dolore dic maylas sinad gna alin veniam sem duiky quis.</p><!-- /.case-three__text -->
                            <a class="case-three__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.case-three__content -->
                    </div><!-- /.case-three__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="case-three__single">
                        <div class="case-three__image">
                            <div class="case-three__image-inner">
                                <img src="{{ asset('assets/front') }}/images/case/case-3-5.jpg" alt="Awesome Image" />
                                <a href="#" class="case-three__image-link"><i class="opklim-justice"></i></a>
                            </div><!-- /.case-three__image-inner -->
                        </div><!-- /.case-three__image -->
                        <div class="case-three__content">
                            <h3 class="case-three__title"><a href="#">Health Related Laws</a></h3><!-- /.case-three__title -->
                            <p class="case-three__text">Sit amet, consectetur suadipisicing sed elit binty por incididunt uet laboret dolore dic maylas sinad gna alin veniam sem duiky quis.</p><!-- /.case-three__text -->
                            <a class="case-three__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.case-three__content -->
                    </div><!-- /.case-three__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="case-three__single">
                        <div class="case-three__image">
                            <div class="case-three__image-inner">
                                <img src="{{ asset('assets/front') }}/images/case/case-3-6.jpg" alt="Awesome Image" />
                                <a href="#" class="case-three__image-link"><i class="opklim-protect"></i></a>
                            </div><!-- /.case-three__image-inner -->
                        </div><!-- /.case-three__image -->
                        <div class="case-three__content">
                            <h3 class="case-three__title"><a href="#">Domestic Voilence</a></h3><!-- /.case-three__title -->
                            <p class="case-three__text">Sit amet, consectetur suadipisicing sed elit binty por incididunt uet laboret dolore dic maylas sinad gna alin veniam sem duiky quis.</p><!-- /.case-three__text -->
                            <a class="case-three__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.case-three__content -->
                    </div><!-- /.case-three__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.case-three -->
    <section class="fact-two">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="fact-two__image">
                        <img src="{{ asset('assets/front') }}/images/resources/fact-2-1.jpg" alt="Awesome Image" />
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
    <section class="case-four">
        <div class="case-four__top">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__text-two">Culpa officia deserunt mollit animd laborum</p><!-- /.block-title__text-one -->
                    <h3 class="block-title__title">Solutions From Opklim</h3><!-- /.block-title__title -->
                </div><!-- /.block-title -->
            </div><!-- /.container -->
        </div><!-- /.case-four__top -->
        <div class="case-four__box">
            <div class="container">
                <div class="case-four__col-wrap">
                    <div class="case-four__col-5">
                        <div class="case-four__single">
                            <div class="case-four__image">
                                <div class="case-four__image-inner">
                                    <img src="{{ asset('assets/front') }}/images/case/case-4-1.jpg" alt="Awesome Image" />
                                    <a href="#" class="case-three__image-link"><i class="opklim-house-with-scales"></i></a>
                                </div><!-- /.case-four__image-inner -->
                            </div><!-- /.case-four__image -->
                            <div class="case-four__content">
                                <h3 class="case-four__title"><a href="#">For Property</a></h3><!-- /.case-four__title -->
                            </div><!-- /.case-four__content -->
                        </div><!-- /.case-four__single -->
                    </div><!-- /.case-four__col-5 -->
                    <div class="case-four__col-5">
                        <div class="case-four__single">
                            <div class="case-four__image">
                                <div class="case-four__image-inner">
                                    <img src="{{ asset('assets/front') }}/images/case/case-4-2.jpg" alt="Awesome Image" />
                                    <a href="#" class="case-three__image-link"><i class="opklim-pistol"></i></a>
                                </div><!-- /.case-four__image-inner -->
                            </div><!-- /.case-four__image -->
                            <div class="case-four__content">
                                <h3 class="case-four__title"><a href="#">For Employment</a></h3><!-- /.case-four__title -->
                            </div><!-- /.case-four__content -->
                        </div><!-- /.case-four__single -->
                    </div><!-- /.case-four__col-5 -->
                    <div class="case-four__col-5">
                        <div class="case-four__single">
                            <div class="case-four__image">
                                <div class="case-four__image-inner">
                                    <img src="{{ asset('assets/front') }}/images/case/case-4-3.jpg" alt="Awesome Image" />
                                    <a href="#" class="case-three__image-link"><i class="opklim-judge"></i></a>
                                </div><!-- /.case-four__image-inner -->
                            </div><!-- /.case-four__image -->
                            <div class="case-four__content">
                                <h3 class="case-four__title"><a href="#">For Family</a></h3><!-- /.case-four__title -->
                            </div><!-- /.case-four__content -->
                        </div><!-- /.case-four__single -->
                    </div><!-- /.case-four__col-5 -->
                    <div class="case-four__col-5">
                        <div class="case-four__single">
                            <div class="case-four__image">
                                <div class="case-four__image-inner">
                                    <img src="{{ asset('assets/front') }}/images/case/case-4-4.jpg" alt="Awesome Image" />
                                    <a href="#" class="case-three__image-link"><i class="opklim-law-1-1"></i></a>
                                </div><!-- /.case-four__image-inner -->
                            </div><!-- /.case-four__image -->
                            <div class="case-four__content">
                                <h3 class="case-four__title"><a href="#">For Business</a></h3><!-- /.case-four__title -->
                            </div><!-- /.case-four__content -->
                        </div><!-- /.case-four__single -->
                    </div><!-- /.case-four__col-5 -->
                    <div class="case-four__col-5">
                        <div class="case-four__single">
                            <div class="case-four__image">
                                <div class="case-four__image-inner">
                                    <img src="{{ asset('assets/front') }}/images/case/case-4-5.jpg" alt="Awesome Image" />
                                    <a href="#" class="case-three__image-link"><i class="opklim-justice"></i></a>
                                </div><!-- /.case-four__image-inner -->
                            </div><!-- /.case-four__image -->
                            <div class="case-four__content">
                                <h3 class="case-four__title"><a href="#">For Bankruptcy</a></h3><!-- /.case-four__title -->
                            </div><!-- /.case-four__content -->
                        </div><!-- /.case-four__single -->
                    </div><!-- /.case-four__col-5 -->
                </div><!-- /.case-four__col-wrap -->
            </div><!-- /.container -->
        </div><!-- /.case-four__box -->
    </section><!-- /.case-four -->
    <section class="case-one case-one__home-two">
        <div class="container">
            <div class="case-one__top">
                <div class="block-title">
                    <h3 class="block-title__title">Recent Case Studies</h3><!-- /.block-title__title -->
                    <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd laborum perspicial</p><!-- /.block-title__text-one -->
                </div><!-- /.block-title -->
                <div class="case-two__nav">
                    <a href="#" class="case-two__nav__left"><i class="fa fa-long-arrow-alt-left"></i></a>
                    <a href="#" class="case-two__nav__right"><i class="fa fa-long-arrow-alt-right"></i></a>
                </div><!-- /.case-two__nav -->
            </div><!-- /.case-one__top -->
        </div><!-- /.container -->
        <div class="container-fluid">
            <div class="thm__owl-carousel owl-carousel owl-theme" data-options='{"loop": true, "margin": 0, "nav": false, "dots": false, "autoWidth": false, "autoplay": true, "smartSpeed": 700, "autoplayTimeout": 5000, "autoplayHoverPause": true, "responsive": {"0": {"items": 1 }, "480": {"items": 1 }, "600": {"items": 2 }, "991": {"items": 3 }, "1000": {"items": 4 }, "1200": {"items": 4 } } }' data-carousel-prev-btn=".case-two__nav__left" data-carousel-next-btn=".case-two__nav__right">
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-1.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-2.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-3.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-1.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-2.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-3.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-4.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-1.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-2.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-3.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="case-one__single">
                        <img src="{{ asset('assets/front') }}/images/case/case-2-4.jpg" alt="Awesome Image" />
                        <div class="case-one__hover">
                            <div class="case-one__hover-inner">
                                <h3 class="case-one__title"><a href="#">HighStreet Criminal Case</a></h3><!-- /.case-one__title -->
                                <a class="case-one__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.case-one__hover-inner -->
                        </div><!-- /.case-one__hover -->
                    </div><!-- /.case-one__single -->
                </div><!-- /.item -->
            </div><!-- /.case-one__carousel -->
        </div><!-- /.container-fluid -->
    </section><!-- /.case-one -->
    <section class="faq-case-form">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6 case-form-two__wrapper">
                    <div class="case-form-two">
                        <div class="case-form-two__inner">
                            <div class="block-title">
                                <i class="block-title__icon opklim-law-1-1"></i>
                                <h2 class="block-title__title">Free Case Evaluation</h2><!-- /.block-title__title -->
                                <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd laborum perspicia <br> natus error voluptatem qui acusantium doloremque laudan.</p><!-- /.block-title__text-two -->
                            </div><!-- /.block-title -->
                            <form action="{{ asset('assets/front') }}/inc/sendemail.php" class="case-form-one__form contact-form-validated">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="case-form-one__field">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="case-form-one__field">
                                            <input type="text" name="email" placeholder="Email">
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="case-form-one__field">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="case-form-one__field">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="text" name="date" class="datepicker" placeholder="Select Day">
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="case-form-one__field">
                                            <select class="selectpicker" name="time">
                                                <option value="">Select Time</option>
                                                <option value="8.00-9.00">8.00-9.00</option>
                                                <option value="9.01-10.00">9.01-10.00</option>
                                                <option value="10.01-11.00">10.01-11.00</option>
                                                <option value="12.01-13.00">12.01-13.00</option>
                                            </select>
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="case-form-one__field">
                                            <select class="selectpicker" name="services">
                                                <option>Service Required</option>
                                                <option value="Real Estate Laws">Real Estate Laws</option>
                                                <option value="Personal Injury">Personal Injury</option>
                                                <option value="Criminal Laws">Criminal Laws</option>
                                                <option value="Health Related Laws">Health Related Laws</option>
                                            </select>
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="case-form-one__field">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="case-form-one__field text-left mb-0">
                                            <button type="submit" class="thm-btn case-form-one__btn">book an appointment <i class="fa fa-long-arrow-alt-right"></i></button>
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                </div><!-- /.row -->
                            </form><!-- /.case-form-one__form -->
                            <div class="result"></div><!-- /.result -->
                        </div><!-- /.case-form-two__inner -->
                    </div><!-- /.case-form-two -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="faq-one">
                        <div class="faq-one__inner">
                            <div class="block-title">
                                <i class="block-title__icon opklim-law-1-1"></i>
                                <h2 class="block-title__title">Read Core FAQ’s</h2><!-- /.block-title__title -->
                                <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd laborum perspicia <br> natus error voluptatem qui acusantium doloremque laudan.</p><!-- /.block-title__text-two -->
                            </div><!-- /.block-title -->
                            <div class="accrodion-grp" data-grp-name="faq-one__accrodion">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>We are a different law firm that support justice?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Miventore veritatis et quasi architecto beatae vitae dict sunt explicabo nemo enim consequuntur magni dolores eos dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatas non proident sunt.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion ">
                                    <div class="accrodion-title">
                                        <h4>Effective legal solutions with appointments?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Miventore veritatis et quasi architecto beatae vitae dict sunt explicabo nemo enim consequuntur magni dolores eos dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatas non proident sunt.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Putting more efforts with people, for people?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Miventore veritatis et quasi architecto beatae vitae dict sunt explicabo nemo enim consequuntur magni dolores eos dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatas non proident sunt.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Wide-ranging experience in various fields?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Miventore veritatis et quasi architecto beatae vitae dict sunt explicabo nemo enim consequuntur magni dolores eos dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatas non proident sunt.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.faq-one__inner -->
                    </div><!-- /.faq-one -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section><!-- /.faq-case-form -->

    <section class="cta-two">
        <div class="container">
            <div class="cta-two__left">
                <div class="cta-two__icon">
                    <i class="opklim-law-1-1"></i>
                </div><!-- /.cta-two__icon -->
                <div class="cta-two__content">
                    <h3 class="cta-two__title">Get a Free Consultation From Expert Lawyers!</h3><!-- /.cta-two__title -->
                    <p class="cta-two__text">Stay in Touch and enim adminim veniam quis nostrud exercitation ullamco quasi architecto</p><!-- /.cta-two__text -->
                </div><!-- /.cta-two__content -->
            </div><!-- /.cta-two__left -->
            <div class="cta-two__right">
                <a href="#" class="thm-btn cta-two__btn">get in touch <i class="fa fa-long-arrow-alt-right"></i></a>
            </div><!-- /.cta-two__right -->
        </div><!-- /.container -->
    </section><!-- /.cta-two -->
    <section class="team-one team-one__home-two">
        <div class="container">
            <div class="block-title text-center">
                <h3 class="block-title__title">Meet Our Lawyers</h3><!-- /.block-title__title -->
                <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd laborum perspicial</p><!-- /.block-title__text-one -->
            </div><!-- /.block-title -->
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset('assets/front') }}/images/team/team-1-1.jpg" alt="Awesome Image" />
                            <div class="team-one__image-hover">
                                <div class="team-one__social">
                                    <a href="#" class="fab fa-google-plus-g"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-linkedin-in"></a>
                                </div><!-- /.team-one__social -->
                                <a href="mailto:Paz.Conyers@example.com" class="team-one__contact">Paz.Conyers@example.com</a>
                                <a href="tel:222-333-8800" class="team-one__contact">Tel: <span>222 333 8800</span></a>
                            </div><!-- /.team-one__image-hover -->
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h3 class="team-one__name">Paz Conyers</h3><!-- /.team-one__name -->
                            <p class="team-one__designation">Senior Attorney</p><!-- /.team-one__designation -->
                        </div><!-- /.team-one__content -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset('assets/front') }}/images/team/team-1-2.jpg" alt="Awesome Image" />
                            <div class="team-one__image-hover">
                                <div class="team-one__social">
                                    <a href="#" class="fab fa-google-plus-g"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-linkedin-in"></a>
                                </div><!-- /.team-one__social -->
                                <a href="mailto:Wanita.Touchette@example.com" class="team-one__contact">Wanita.Touchette@example.com</a>
                                <a href="tel:222-333-8800" class="team-one__contact">Tel: <span>222 333 8800</span></a>
                            </div><!-- /.team-one__image-hover -->
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h3 class="team-one__name">Wanita Touchette</h3><!-- /.team-one__name -->
                            <p class="team-one__designation">Senior Attorney</p><!-- /.team-one__designation -->
                        </div><!-- /.team-one__content -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset('assets/front') }}/images/team/team-1-3.jpg" alt="Awesome Image" />
                            <div class="team-one__image-hover">
                                <div class="team-one__social">
                                    <a href="#" class="fab fa-google-plus-g"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-linkedin-in"></a>
                                </div><!-- /.team-one__social -->
                                <a href="mailto:Jefferson.Leveston@example.com" class="team-one__contact">Jefferson.Leveston@example.com</a>
                                <a href="tel:222-333-8800" class="team-one__contact">Tel: <span>222 333 8800</span></a>
                            </div><!-- /.team-one__image-hover -->
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h3 class="team-one__name">Jefferson Leveston</h3><!-- /.team-one__name -->
                            <p class="team-one__designation">Senior Attorney</p><!-- /.team-one__designation -->
                        </div><!-- /.team-one__content -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset('assets/front') }}/images/team/team-1-4.jpg" alt="Awesome Image" />
                            <div class="team-one__image-hover">
                                <div class="team-one__social">
                                    <a href="#" class="fab fa-google-plus-g"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-linkedin-in"></a>
                                </div><!-- /.team-one__social -->
                                <a href="mailto:Dorothy@example.com" class="team-one__contact">Dorothy@example.com</a>
                                <a href="tel:222-333-8800" class="team-one__contact">Tel: <span>222 333 8800</span></a>
                            </div><!-- /.team-one__image-hover -->
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h3 class="team-one__name">Dorothy Usman</h3><!-- /.team-one__name -->
                            <p class="team-one__designation">Senior Attorney</p><!-- /.team-one__designation -->
                        </div><!-- /.team-one__content -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-one -->

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

@endsection
