@extends('Front.Layout.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <section class="inner-banner inner-banner__overlay-none" style="background-image: url({{ asset('assets/front/images/background/inner-banner-bg-1-3.jpg') }});">
        <div class="container">
            <p class="inner-banner__tag-line">Most Successful Law Firm</p><!-- /.inner-banner__tag-line -->
            <h2 class="inner-banner__title">Practice Areas</h2><!-- /.inner-banner__title -->
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Our Services</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->


    <section class="case-three case-three__service-page-two">
        <div class="container">
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
                            <a class="case-three__link" href="#"><span>More Details</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.case-three__content -->
                    </div><!-- /.case-three__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.case-three -->

    <section class="service-two service-two__service-page-two">
        <div class="container-fluid">
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
                            <form action="assets/inc/sendemail.php" class="case-form-one__form contact-form-validated">
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
@endsection

@section('js')

@endsection
