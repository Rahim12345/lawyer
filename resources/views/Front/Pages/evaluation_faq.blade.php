<section class="faq-case-form">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6 case-form-two__wrapper">
                <div class="case-form-two">
                    <div class="case-form-two__inner">
                        <div class="block-title">
                            <i class="block-title__icon opklim-law-1-1"></i>
                            <span style="line-height: 35px" class="block-title__title">{{ __('front_service.free_case_evaluation') }}</span><!-- /.block-title__title -->
                            <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd laborum perspicia <br> natus error voluptatem qui acusantium doloremque laudan.</p><!-- /.block-title__text-two -->
                        </div><!-- /.block-title -->
                        <form method="POST" action="" onsubmit="return false" class="case-form-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="name" id="appointment_name" placeholder="{{ __('front_master.your_name') }}">
                                        <small class="text-danger" id="appointment_name-error"></small>
                                    </div><!-- /.case-form-one__field -->
                                </div><!-- /.col-md-6 col-sm-12 -->
                                <div class="col-md-6 col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="email" id="appointment_email" placeholder="{{ __('login.email') }}">
                                        <small class="text-danger" id="appointment_email-error"></small>
                                    </div><!-- /.case-form-one__field -->
                                </div><!-- /.col-md-6 col-sm-12 -->
                                <div class="col-md-6 col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="phone" id="appointment_phone" placeholder="{{ __('front_master.phone') }}">
                                        <small class="text-danger" id="appointment_phone-error"></small>
                                    </div><!-- /.case-form-one__field -->
                                </div><!-- /.col-md-6 col-sm-12 -->
                                <div class="col-md-6 col-sm-12">
                                    <div class="case-form-one__field">
                                        <i class="far fa-calendar-alt"></i>
                                        <input type="text" name="date" id="appointment_date" class="datepicker" placeholder="{{ __('front_about.select_day') }}">
                                        <small class="text-danger" id="appointment_date-error"></small>
                                    </div><!-- /.case-form-one__field -->
                                </div><!-- /.col-md-6 col-sm-12 -->
                                <div class="col-md-6 col-sm-12">
                                    <div class="case-form-one__field">
                                        <select class="selectpicker" id="appointment_clock" name="time">
                                            <option value="">{{ __('front_about.select_time') }}</option>
                                            <option value="9.01-12.00">9.01-12.00</option>
                                            <option value="12.01-15.00">12.01-15.00</option>
                                            <option value="15.01-11.00">15.01-18.00</option>
                                        </select>
                                        <small class="text-danger" id="appointment_clock-error"></small>
                                    </div><!-- /.case-form-one__field -->
                                </div><!-- /.col-md-6 col-sm-12 -->
                                <div class="col-md-6 col-sm-12">
                                    <div class="case-form-one__field">
                                        <select class="selectpicker" id="appointment_service" name="services">
                                            <option value="">{{ __('front_about.service_required') }}</option>
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
                                    <div class="case-form-one__field text-left mb-0">
                                        <input type="hidden" id="appointment_url" value="{{ route('front.get.free.case.evaluation') }}">
                                        <button type="button" id="appointment_btn" class="thm-btn case-form-one__btn">{{ __('front_master.book_an_appointment') }} <i class="fa fa-long-arrow-alt-right"></i></button>
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
