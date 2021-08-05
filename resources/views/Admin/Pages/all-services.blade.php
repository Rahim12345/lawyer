@extends('Admin.Layout.master')

@section('title')
Bütün xidmətlər
@endsection

@section('css')

@endsection

@section('content')
    <div class="mb-auto">
        <div class="container-xl shadow p-3 mb-5 bg-white rounded col-11">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Xidmətlər
                        </div>
                        <h2 class="page-title">
                            Bütün xidmətlər
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <a href="{{ route('service.create') }}" class="btn btn-primary">{{ __('admin_master.add') }}</a>
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table" id="subscriber-table">
                            <thead>
                            <tr>
                                <th scope="col">Cover</th>
                                <th scope="col">Xidmətin adı(AZ)</th>
                                <th scope="col">Xidmətin adı(EN)</th>
                                <th scope="col">Xidmət haqqında qısa məlumat(AZ)</th>
                                <th scope="col">Xidmət haqqında qısa məlumat(EN)</th>
                                <th scope="col">Xidmət haqqında-Ətraflı(AZ)</th>
                                <th scope="col">Xidmət haqqında-Ətraflı(EN)</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($services) !== 0)
                                @foreach($services as $service)
                                    <tr data-id="{{ $service->id }}">
                                        <td data-label="Cover"><img src="{{ asset('storage/service-covers/'.$service->cover) }}" alt=""></td>

                                        <td data-label="Xidmətin adı(AZ)" class="col-md-2">{{ $service->service_name_az }}</td>
                                        <td data-label="Xidmətin adı(EN)" class="col-md-2">{{ $service->service_name_en }}</td>
                                        <td data-label="Xidmət haqqında qısa məlumat(AZ)" class="col-md-2">{{ $service->service_less_az }}</td>
                                        <td data-label="Xidmətin adı(EN)" class="col-md-2">{{ $service->service_less_en }}</td>
                                        <td data-label="Xidmət haqqında-Ətraflı(AZ)" class="col-md-2">{!! $service->service_more_az !!}</td>
                                        <td data-label="Xidmət haqqında-Ətraflı(EN)" class="col-md-2">{!! $service->service_more_en !!}</td>
                                        <td data-label="Actions">
                                            <div class="btn-list flex-nowrap">
                                                <a class="btn  btn-sm btn-primary" href="{{ route('service.edit',$service->id) }}">Edit</a>
                                                <form class="d-inline-block" action="{{ route('service.destroy',$service->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="button" onclick="if(confirm('Are you sure?')) $(this).closest('form').submit();">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" style="text-align: center">Data not found</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
