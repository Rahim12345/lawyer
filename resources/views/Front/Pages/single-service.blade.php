@extends('Front.Layout.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <section class="case-three case-three__service-page-two">
        <div class="container">
            <div class="row">
                <div class="card w-100 m-3">
                    <div class="card-title">
                        <div class="p-3 text-center font-weight-bold">
                            @if(app()->getLocale() == 'az')
                                {{ $service->service_name_az }}
                            @else
                                {{ $service->service_name_en }}
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="p-3">
                                @if(app()->getLocale() == 'az')
                                    {!! $service->service_more_az !!}
                                @else
                                    {!! $service->service_more_en !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.case-three -->

@endsection

@section('js')

@endsection
