@extends('Front.Layout.master')

@section('title')
 {{ __('front_master.about') }}
@endsection

@section('css')

@endsection

@section('content')
    <section class="inner-banner inner-banner__overlay-two" style="background-image: url({{ asset('assets/front') }}/images/background/inner-banner-bg-1-2.jpg);">
        <div class="container">
            <p class="inner-banner__tag-line">Most Successful Law Firm</p><!-- /.inner-banner__tag-line -->
            <h2 class="inner-banner__title">About Opklim</h2><!-- /.inner-banner__title -->
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->

    <section class="about-two">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-5">
                    <div class="about-two__content">
                        <p class="about-two__tag-line">Proident sunt culpa officia deserunt </p><!-- /.about-two__tag-line -->
                        <h3 class="about-two__title">Solving issues with <br> great attention.</h3><!-- /.about-two__title -->
                        <p class="about-two__text">Labore et dolore magna aliqu. Ut enim ad minim veniam, quis nostrud exercitation ullamco dui laboris nisi ut aliquip ex dea commodo consequat. Duis aute irure dolor reprehenderit kind voluptate velit ese cillum dolore fugiat nula pariatur. Excepteur sint occaecat cupidatas non.</p><!-- /.about-two__text -->
                        <a href="#" class="thm-btn about-two__btn">view services <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div><!-- /.about-two__content -->
                </div><!-- /.col-xl-5 -->
                <div class="col-xl-7">
                    <div class="about-two__images wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('assets/front') }}/images/resources/about-1-1.jpg" alt="" />
                        <img src="{{ asset('assets/front') }}/images/resources/about-1-2.jpg" alt="" />
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
                            <h3 class="service-one__title"><a href="contact.html">free case evaluation</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Deserunt mollit animd laborum perspic</p><!-- /.service-one__text -->
                            <a href="#" class="thm-btn service-one__btn">Learn More <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms">
                            <i class="service-one__icon  opklim-service-1-2"></i>
                            <h3 class="service-one__title"><a href="contact.html">Find a lawyer</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Deserunt mollit animd laborum perspic</p><!-- /.service-one__text -->
                            <a href="#" class="thm-btn service-one__btn">Get Appointment <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms">
                            <i class="service-one__icon  opklim-service-1-3"></i>
                            <h3 class="service-one__title"><a href="contact.html">Corporate ligitation</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Deserunt mollit animd laborum perspic</p><!-- /.service-one__text -->
                            <a href="#" class="thm-btn service-one__btn">Learn More <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </section><!-- /.service-one -->

    <section class="progress-feature__wrapper">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-6 progress-one__wrapper d-flex" style="background-image: url({{ asset('assets/front') }}/images/background/progress-bg-1-1.jpg);">
                    <div class="progress-one__content my-auto">
                        <div class="progress-one__box">
                            <div class="progress-one__box-single">
                                <div class="progress-one__circle circle-box" data-options='{"value": 0.72, "size": 155, "fill": {"color": "#e23e4e" }, "emptyFill": "#ffffff" }'>
                                    <span class="progress-one__value"><span class="counter">72</span>%</span>
                                </div><!-- /.progress-one__circle -->
                                <h3 class="progress-one__title">Legal Solutions</h3><!-- /.progress-one__title -->
                            </div><!-- /.progress-one__box-single -->
                            <div class="progress-one__box-single">
                                <div class="progress-one__circle circle-box" data-options='{"value": 0.93, "size": 155, "fill": {"color": "#e23e4e" }, "emptyFill": "#ffffff" }'>
                                    <span class="progress-one__value"><span class="counter">93</span>%</span>
                                </div><!-- /.progress-one__circle -->
                                <h3 class="progress-one__title">Legal Solutions</h3><!-- /.progress-one__title -->
                            </div><!-- /.progress-one__box-single -->
                            <div class="progress-one__box-single">
                                <div class="progress-one__circle circle-box" data-options='{"value": 0.66, "size": 155, "fill": {"color": "#e23e4e" }, "emptyFill": "#ffffff" }'>
                                    <span class="progress-one__value"><span class="counter">66</span>%</span>
                                </div><!-- /.progress-one__circle -->
                                <h3 class="progress-one__title">Legal Solutions</h3><!-- /.progress-one__title -->
                            </div><!-- /.progress-one__box-single -->
                        </div><!-- /.progress-one__box -->
                        <h3 class="progress-one__block-title">Skilled Lawyers at Help <br> With a Clear Mission</h3><!-- /.progress-one__block-title -->
                    </div><!-- /.progress-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 feature-one__wrap">
                    <div class="feature-one__main">
                        <div class="block-title text-left">
                            <p class="block-title__text-two">Culpa officia deserunt mollit animd laborum</p><!-- /.block-title__text-one -->
                            <h3 class="block-title__title">Innovative Approach</h3><!-- /.block-title__title -->
                        </div><!-- /.block-title -->
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <i class="opklim-police-badge"></i>
                            </div><!-- /.feature-one__icon -->
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">Trusted advisors for successful people</h3><!-- /.feature-one__title -->
                                <p class="feature-one__text">Miventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim consequuntur magni dolores eos.</p><!-- /.feature-one__text -->
                            </div><!-- /.feature-one__content -->
                        </div><!-- /.feature-one__single -->
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <i class="opklim-writing-tool"></i>
                            </div><!-- /.feature-one__icon -->
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">Our talks with people are confidential</h3><!-- /.feature-one__title -->
                                <p class="feature-one__text">Miventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim consequuntur magni dolores eos.</p><!-- /.feature-one__text -->
                            </div><!-- /.feature-one__content -->
                        </div><!-- /.feature-one__single -->
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <i class="opklim-books"></i>
                            </div><!-- /.feature-one__icon -->
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">Legal & regulatory developments that impact </h3><!-- /.feature-one__title -->
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
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="fact-three__single text-center">
                        <i class="fact-three__icon opklim-law-1-1"></i>
                        <h3 class="fact-three__title"><span class="counter">95</span>%</h3><!-- /.fact-three__title -->
                        <p class="fact-three__text">cases we won</p><!-- /.fact-three__text -->
                    </div><!-- /.fact-three__single -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="fact-three__single text-center">
                        <i class="fact-three__icon opklim-lawyer"></i>
                        <h3 class="fact-three__title"><span class="counter">206</span></h3><!-- /.fact-three__title -->
                        <p class="fact-three__text">lawyers team</p><!-- /.fact-three__text -->
                    </div><!-- /.fact-three__single -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="fact-three__single text-center">
                        <i class="fact-three__icon opklim-service-1-2"></i>
                        <h3 class="fact-three__title"><span class="counter">524</span></h3><!-- /.fact-three__title -->
                        <p class="fact-three__text">free consultations</p><!-- /.fact-three__text -->
                    </div><!-- /.fact-three__single -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="fact-three__single text-center">
                        <i class="fact-three__icon opklim-policy"></i>
                        <h3 class="fact-three__title"><span class="counter">387</span></h3><!-- /.fact-three__title -->
                        <p class="fact-three__text">cases dismissed</p><!-- /.fact-three__text -->
                    </div><!-- /.fact-three__single -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.fact-three -->

    <section class="team-one team-one__home-two">
        <div class="container">
            <div class="block-title text-center">
                <h3 class="block-title__title">Meet Our Lawyers</h3><!-- /.block-title__title -->
                <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd laborum perspicial</p><!-- /.block-title__text-one -->
            </div><!-- /.block-title -->
            @foreach($attorneys->chunk(4) as $chunk)
                <div class="row no-gutters">
                    @foreach($chunk as $attorney)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-one__single">
                                <div class="team-one__image">
                                    <img src="{{ asset('storage/attorneys/'.$attorney->photo) }}" alt="{{ $attorney->name }}" />
                                    <div class="team-one__image-hover">
                                        <div class="team-one__social">
                                            <a href="{{ $attorney->youtube }}" target="_blank" class="fab fa-youtube"></a>
                                            <a href="{{ $attorney->twitter }}" target="_blank" class="fab fa-twitter"></a>
                                            <a href="{{ $attorney->facebook }}" target="_blank" class="fab fa-facebook"></a>
                                            <a href="{{ $attorney->instagram }}" target="_blank" class="fab fa-instagram"></a>
                                        </div><!-- /.team-one__social -->
                                        <a href="mailto:{{ $attorney->email }}" class="team-one__contact">{{ $attorney->email }}</a>
                                        <a href="tel:{{ $attorney->tel }}" class="team-one__contact">Tel: <span>{{ $attorney->tel }}</span></a>
                                    </div><!-- /.team-one__image-hover -->
                                </div><!-- /.team-one__image -->
                                <div class="team-one__content">
                                    <h3 class="team-one__name">{{ $attorney->name_lastname }}</h3><!-- /.team-one__name -->
                                    <p class="team-one__designation">{{ $attorney->job }}</p><!-- /.team-one__designation -->
                                </div><!-- /.team-one__content -->
                            </div><!-- /.team-one__single -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    @endforeach
                </div><!-- /.row -->
            @endforeach
        </div><!-- /.container -->
    </section><!-- /.team-one -->


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
                    <h3 class="block-title__title">Get Free Case Evaluation</h3><!-- /.block-title__title -->
                    <p class="block-title__text-one">Proident sunt culpa officia deserunt mollit animd laborum perspicia natus <br> error voluptatem qui acusantium doloremque laudan.</p><!-- /.block-title__text-one -->
                </div><!-- /.block-title -->
                <form action="#" class="case-form-one__form contact-form-validated">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="name" placeholder="Your Name">
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="email" placeholder="Email">
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="phone" placeholder="Phone">
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="case-form-one__field">
                                <i class="far fa-calendar-alt"></i>
                                <input type="text" name="date" class="datepicker" placeholder="Select Day">
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
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
                        <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="case-form-one__field text-center mb-0">
                                <button type="submit" class="thm-btn case-form-one__btn">{{ __('front_master.book_an_appointment') }} <i class="fa fa-long-arrow-alt-right"></i></button>
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

@endsection
