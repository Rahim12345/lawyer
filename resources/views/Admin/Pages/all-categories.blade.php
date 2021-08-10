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
                            Kateqoriyalar
                        </div>
                        <h2 class="page-title">
                            Bütün kateqoriyalar
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">{{ __('admin_master.add') }}</a>
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table" id="subscriber-table">
                            <thead>
                            <tr>
                                <th scope="col">Kateqoriya(AZ)</th>
                                <th scope="col">Kateqoriya(EN)</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($categories) !== 0)
                                @foreach($categories as $category)
                                        <td data-label="Kateqoriya(AZ)" class="col-md-2">{{ $category->category_az }}</td>
                                        <td data-label="Kateqoriya(EN)" class="col-md-2">{{ $category->category_en }}</td>
                                        <td data-label="Actions" class="col-3">
                                            <div class="btn-list flex-nowrap">
                                                <a class="btn  btn-sm btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                                                <form class="d-inline-block" action="{{ route('category.destroy',$category->id) }}" method="POST">
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
