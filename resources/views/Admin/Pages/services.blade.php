@extends('Admin.Layout.master')

@section('title')
{{ __('admin_master.services') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/attorney.css') }}">
@endsection

@section('content')
    <div class="col-md-10 offset-md-2">
        <div class="card">
            <a href="{{ route('service.index') }}" class="btn btn-primary float-end">{{ __('admin_master.all_services') }}</a>
            <div class="card-header">
                <h3 class="card-title">{{ __('admin_master.add') }}</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('service.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-5">
                        <div class="form-group">
                            <label for="photo" class="form-label">Cover (360x250)</label>
                            <div class="col-sm-10">
                                <div class="dropzone">
                                    <img id="preview" src="{{ asset('assets/images/Add-photo-icon.png') }}" alt="Add photo icon"/>
                                    <input type="file" name="photo" class="upload-input" id="photo" value="{{ old('photo') }}" aria-describedby="photoHelp"/>
                                </div>
                            </div>
                            @error('photo')
                            <small id="photoHelp" class="form-text text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="service_name_az" class="col-sm-2 col-form-label">Xidmətin adı(AZ)</label>
                        <div class="col-sm-10">
                            <input type="text" name="service_name_az" id="service_name_az" value="{{ old('service_name_az') }}" class="form-control" id="name">
                            @error('service_name_az')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="service_name_en" class="col-sm-2 col-form-label">Xidmətin adı(EN)</label>
                        <div class="col-sm-10">
                            <input type="text" name="service_name_en" id="service_name_en" value="{{ old('service_name_en') }}" class="form-control" id="name">
                            @error('service_name_en')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="service_less_az" class="col-sm-2 col-form-label">Xidmət haqqında qısa məlumat(AZ)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="service_less_az" id="service_less_az" cols="30" rows="2">{{ old('service_less_az') }}</textarea>
                            @error('service_less_az')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="service_less_en" class="col-sm-2 col-form-label">Xidmət haqqında qısa məlumat(EN)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="service_less_en" id="service_less_en" cols="30" rows="2">{{ old('service_less_en') }}</textarea>
                            @error('service_less_en')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="service_more_az" class="col-sm-2 col-form-label">Xidmət haqqında-Ətraflı(AZ)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="service_more_az" id="service_more_az" cols="30" rows="4">{{ old('service_more_az') }}</textarea>
                            @error('service_more_az')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="service_more_en" class="col-sm-2 col-form-label">Xidmət haqqında-Ətraflı(EN)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="service_more_en" id="service_more_en" cols="30" rows="4">{{ old('service_more_en') }}</textarea>
                            @error('service_more_en')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary float-end">Əlavə et</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        $( document ).ready( function () {
            let service_more_az = CKEDITOR.replace( 'service_more_az', {
                filebrowserUploadUrl: "{{route('admin.upload.service.photo', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            } );

            service_more_az.on( 'blur', function () {
                service_more_az.setData( service_more_az.getData().replace( /(<a.*?rel=".*?)noreferrer/g, '$1' ) );
            } );

            let service_more_en = CKEDITOR.replace( 'service_more_en', {
                filebrowserUploadUrl: "{{route('admin.upload.service.photo', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            } );

            service_more_en.on( 'blur', function () {
                service_more_en.setData( service_more_en.getData().replace( /(<a.*?rel=".*?)noreferrer/g, '$1' ) );
            } );
        } );
    </script>

    <script>
        $( document ).ready( function () {
            $( 'input[type=file]' ).change( function ( event ) {
                let val = $( this ).val().toLowerCase(),
                    regex = new RegExp( '(.*?)\.(png|jpeg|jpg)$' );

                if ( $( this )[ 0 ].files.length !== 1 )
                {
                    $( this ).val( '' );
                    toastr.error( 'You can only upload one image', 'Attention' );
                    $( '#preview' ).attr( 'src', '/assets/images/Add-photo-icon.png' );
                }
                else if ( ! ( regex.test( val ) ) )
                {
                    $( this ).val( '' );
                    toastr.error( 'Please only add images in png, jpeg, jpg format', 'Attention' );
                    $( '#preview' ).attr( 'src', '/assets/images/Add-photo-icon.png' );
                }
                else
                {
                    $( '#preview' ).attr( 'src' );
                    let reader = new FileReader();
                    reader.onload = function () {
                        let preview = document.getElementById( 'preview' );
                        preview.src = reader.result;
                    };
                    reader.readAsDataURL( event.target.files[ 0 ] );
                }
            } );
        } );
    </script>

    <script>
        $(document).ready(function () {
            CKEDITOR.instances['service_more_en'].on("blur", function() {
                let version_en = CKEDITOR.instances['service_more_en'].getData();
                $.ajax({
                    type : 'POST',
                    data : {version_en},
                    url  : '{!! route('admin.service.translate.to.az') !!}',
                    success :function (response) {
                        CKEDITOR.instances['service_more_az'].setData(response);
                    },
                    error : function (myErrors) {
                        $.each(myErrors.responseJSON.errors,function (key, value) {
                            console.log(value);
                        })
                    }
                });
            });
        })
    </script>
@endsection

