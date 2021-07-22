@extends('Admin.Layout.master')

@section('title')
{{ __('admin_master.attorneys') }}
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
                            {{ __('admin_master.attorneys') }}
                        </div>
                        <h2 class="page-title">
                            All attorneys
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <a href="{{ route('admin.vekiller.create') }}" class="btn btn-primary">{{ __('admin_master.add') }}</a>
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table" id="subscriber-table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Name & Lastname</th>
                                <th scope="col">Job</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Email</th>
                                <th scope="col">Twitter</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">Youtube</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($attorneys) !== 0)
                                @foreach($attorneys as $attorney)
                                    <tr data-id="{{ $attorney->id }}">
                                        <td data-label="#">{{ $loop->iteration }}</td>
                                        <td data-label="Photo"><img style="width: 50px;height: 50px" src="{{ asset('storage/attorneys/'.$attorney->photo) }}" alt=""></td>
                                        <td data-label="NAME & LASTNAME">{{ $attorney->name_lastname }}</td>
                                        <td data-label="JOB">{{ $attorney->job }}</td>
                                        <td data-label="TEL">{{ $attorney->tel }}</td>
                                        <td data-label="EMAIL">{{ $attorney->email }}</td>
                                        <td data-label="TWITTER">{{ $attorney->twitter }}</td>
                                        <td data-label="FACEBOOK">{{ $attorney->facebook }}</td>
                                        <td data-label="INSTAGRAM">{{ $attorney->instagram }}</td>
                                        <td data-label="YOUTUBE">{{ $attorney->youtube }}</td>
                                        <td data-label="Date" class="col-md-2">{{ $attorney->updated_at->toFormattedDateString() }}</td>
                                        <td data-label="Actions">
                                            <div class="btn-list flex-nowrap">
                                                <a class="btn  btn-sm btn-primary" href="{{ route('admin.vekiller.edit',$attorney->id) }}">Edit</a>
                                                <form class="d-inline-block" action="{{ route('admin.vekiller.delete') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $attorney->id }}">
                                                    <button class="btn btn-sm btn-danger" type="button" onclick="if(confirm('Are you sure?')) $(this).closest('form').submit();">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="12" style="text-align: center">Data not found</td>
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
