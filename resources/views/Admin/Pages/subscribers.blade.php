@extends('Admin.Layout.master')

@section('title')

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
                            Subscribes
                            <div class="mb-3 col-xl-4 col-md-3 float-end">
                                <div class="input-group">
                                    <div class="dropdown-menu dropdown-menu-end" id="subscriberDropdown">
                                        <a class="dropdown-item" href="javascript:void(0)" wire:click = "all">
                                            All
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)" wire:click = "verified">
                                            Verified
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)" wire:click = "non_verified">
                                            Non-verified
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="page-title">
                            All subscribes
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table" id="subscriber-table">
                            <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($subscribes) !== 0)
                                @foreach($subscribes as $subscribe)
                                    <tr data-id="{{ $subscribe->id }}">
                                        <td data-label="Email">{{ $subscribe->email }}</td>

                                        <td data-label="Date" class="col-md-2">{{ $subscribe->updated_at->toFormattedDateString() }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" style="text-align: center">Data not found</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    @if(count($subscribes) !== 0)
                        {{ $subscribes->onEachSide(0)->links('vendor.pagination.bootstrap-4') }}
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
