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
                            Taglar
                        </div>
                        <h2 class="page-title">
                            Bütün taglar
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <a href="{{ route('tag.create') }}" class="btn btn-primary">{{ __('admin_master.add') }}</a>
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table" id="subscriber-table">
                            <thead>
                            <tr>
                                <th scope="col">Tag(AZ)</th>
                                <th scope="col">Tag(EN)</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($tags) !== 0)
                                @foreach($tags as $tag)
                                        <td data-label="Tag(AZ)" class="col-md-2">{{ $tag->tag_az }}</td>
                                        <td data-label="Tag(EN)" class="col-md-2">{{ $tag->tag_en }}</td>
                                        <td data-label="Actions" class="col-3">
                                            <div class="btn-list flex-nowrap">
                                                <a class="btn  btn-sm btn-primary" href="{{ route('tag.edit',$tag->id) }}">Edit</a>
                                                <form class="d-inline-block" action="{{ route('tag.destroy',$tag->id) }}" method="POST">
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
