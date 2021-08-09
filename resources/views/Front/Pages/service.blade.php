@extends('Front.Layout.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <section class="inner-banner inner-banner__overlay-none" style="background-image: url({{ asset('assets/front/images/background/new-inner-banner-bg-1-3.jpg') }});">
        <div class="container">
            <p class="inner-banner__tag-line">{{ __('front_about.most_successful_law_firm') }}</p><!-- /.inner-banner__tag-line -->
            <h2 style="font-family: Arial" class="inner-banner__title">{{ __('front_master.services') }}</h2><!-- /.inner-banner__title -->
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="{{ route('front.home') }}">{{ __('front_master.home_upper') }}</a></li>
                <li>{{ __('front_master.services') }}</li>
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
                            <a class="case-three__link" href="{{ route('front.single.services',$service->slug) }}"><span>{{ __('front_service.more_details') }}</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.case-three__content -->
                    </div><!-- /.case-three__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.case-three -->
    @include('Front.Pages.tetrak')
    @include('Front.Pages.evaluation_faq')
@endsection

@section('js')
    <script src="{{ asset('js/appointment.js') }}"></script>
@endsection
