@extends('Admin.Layout.master')

@section('title')
    {{ \App\Helpers\Options::getOption('photo_banner') && \App\Helpers\Options::getOption('photo_mission') ? 'Redaktə et' : 'Əlavə et' }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/attorney.css') }}">
@endsection

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ \App\Helpers\Options::getOption('photo_banner') && \App\Helpers\Options::getOption('photo_mission') ? 'Redaktə et' : 'Əlavə et' }}</h3>
            </div>
            <div class="card-body">
                <form method="post" id="my-form" action="{{ route('admin.vekiller.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="add_or_update" id="add_or_update" value="{{ \App\Helpers\Options::getOption('photo_banner') && \App\Helpers\Options::getOption('photo_mission') ? 1 : 0 }}">
                    <div class="form-group mb-5">
                        <div class="form-group">
                            <label for="photo_banner" class="form-label">Banner (1920x1285)</label>
                            <div class="col-sm-10">
                                <div class="dropzone">
                                    <img id="preview_banner" src="{{ \App\Helpers\Options::getOption('photo_banner') ? asset('storage/about/banners/').'/'.\App\Helpers\Options::getOption('photo_banner') : asset('assets/images/Add-photo-icon.png') }}" alt="Add photo icon"/>
                                    <input type="file" name="photo_banner" class="upload-input" id="photo_banner" value="{{ old('photo_banner') }}" aria-describedby="photo_bannerHelp"/>
                                </div>
                            </div>
                            <small id="banner-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group mb-5">
                        <div class="form-group">
                            <label for="photo_mission" class="form-label">Missiya şəkili (960x685)</label>
                            <div class="col-sm-10">
                                <div class="dropzone">
                                    <img id="preview_mission" src="{{ \App\Helpers\Options::getOption('photo_mission') ? asset('storage/about/missions/').'/'.\App\Helpers\Options::getOption('photo_mission') : asset('assets/images/Add-photo-icon.png') }}" alt="Add photo icon"/>
                                    <input type="file" name="photo_mission" class="upload-input" id="photo_mission" value="{{ old('photo_mission') }}" aria-describedby="photo_missionHelp"/>
                                </div>
                            </div>
                            <small id="mission-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary float-end" id="add">{{ \App\Helpers\Options::getOption('photo_banner') && \App\Helpers\Options::getOption('photo_mission') ? 'Redaktə et' : 'Əlavə et' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $( document ).ready( function () {
            $( 'input[id=photo_banner]' ).change( function ( event ) {
                let val = $( this ).val().toLowerCase(),
                    regex = new RegExp( '(.*?)\.(png|jpeg|jpg)$' );

                if ( $( this )[ 0 ].files.length !== 1 )
                {
                    $( this ).val( '' );
                    toastr.error( 'You can only upload one image', 'Attention' );
                    $( '#preview_banner' ).attr( 'src', '/assets/images/Add-photo-icon.png' );
                }
                else if ( ! ( regex.test( val ) ) )
                {
                    $( this ).val( '' );
                    toastr.error( 'Please only add images in png, jpeg, jpg format', 'Attention' );
                    $( '#preview_banner' ).attr( 'src', '/assets/images/Add-photo-icon.png' );
                }
                else
                {
                    $( '#preview_banner' ).attr( 'src' );
                    let reader = new FileReader();
                    reader.onload = function () {
                        let preview_banner = document.getElementById( 'preview_banner' );
                        preview_banner.src = reader.result;
                    };

                    let img = new Image()
                    img.src = window.URL.createObjectURL(event.target.files[0])
                    img.onload = () => {
                        if (img.width === 1920 && img.height === 1285)
                        {
                            reader.readAsDataURL( event.target.files[ 0 ] );
                        }
                        else
                        {
                            $( this ).val( '' );
                            toastr.error( 'Please only add images 1920x1285', 'Attention' );
                        }
                    }
                }
            } );

            $( 'input[id=photo_mission]' ).change( function ( event ) {
                let val = $( this ).val().toLowerCase(),
                    regex = new RegExp( '(.*?)\.(png|jpeg|jpg)$' );

                if ( $( this )[ 0 ].files.length !== 1 )
                {
                    $( this ).val( '' );
                    toastr.error( 'You can only upload one image', 'Attention' );
                    $( '#preview_mission' ).attr( 'src', '/assets/images/Add-photo-icon.png' );
                }
                else if ( ! ( regex.test( val ) ) )
                {
                    $( this ).val( '' );
                    toastr.error( 'Please only add images in png, jpeg, jpg format', 'Attention' );
                    $( '#preview_mission' ).attr( 'src', '/assets/images/Add-photo-icon.png' );
                }
                else
                {
                    $( '#preview_mission' ).attr( 'src' );
                    let reader = new FileReader();
                    reader.onload = function () {
                        let preview_mission = document.getElementById( 'preview_mission' );
                        preview_mission.src = reader.result;
                    };

                    let img = new Image()
                    img.src = window.URL.createObjectURL(event.target.files[0])
                    img.onload = () => {
                        if (img.width === 960 && img.height === 685)
                        {
                            reader.readAsDataURL( event.target.files[ 0 ] );
                        }
                        else
                        {
                            $( this ).val( '' );
                            toastr.error( 'Please only add images 960x685', 'Attention' );
                        }
                    }
                }
            } );

            $( '#my-form' ).submit(function (event) {
                event.preventDefault();
                let banner_image    = $('#preview_banner').attr('src');
                let mission_image   = $('#preview_mission').attr('src');
                let add_or_update   = $('#add_or_update').val();
                if (add_or_update == 0)
                {
                    if (banner_image == '{{ asset('assets/images/Add-photo-icon.png') }}')
                    {
                        toastr.error( 'Banner şəkilin daxil edin', 'Xəta' );
                        return;
                    }
                    else if (mission_image == '{{ asset('assets/images/Add-photo-icon.png') }}')
                    {
                        toastr.error( 'Missiya şəkilin daxil edin', 'Xəta' );
                        return;
                    }
                    else
                    {
                        $('#banner-error').html('');
                        $('#mission-error').html('');
                        let formData = new FormData(this);
                        $.ajax({
                            type : 'POST',
                            data : formData,
                            contentType: false,
                            processData: false,
                            url  : '{!! route('about.store') !!}',
                            success : function (response) {
                                toastr.success( 'Şəkillər uğurla yaddaşa yazıldı.Yönləndirilirsiniz ...', 'Uğurlu əməliyyat' );
                                setInterval(function () {
                                    window.location.href = '{!! route('about.create') !!}';
                                },3000);
                            },
                            error : function (myErrors) {
                                $.each(myErrors.responseJSON.errors, function (key, item) {
                                    $('#' + key + '-error').html(item);
                                });
                            }
                        });
                    }
                }
                else
                {
                    $('#banner-error').html('');
                    $('#mission-error').html('');
                    let formData = new FormData(this);
                    $.ajax({
                        type : 'POST',
                        data : formData,
                        contentType: false,
                        processData: false,
                        url  : '{!! route('about.store') !!}',
                        success : function (response) {
                            toastr.success( 'Şəkillər uğurla yaddaşa yazıldı.Yönləndirilirsiniz ...', 'Uğurlu əməliyyat' );
                            setInterval(function () {
                                window.location.href = '{!! route('about.create') !!}';
                            },3000);
                        },
                        error : function (myErrors) {
                            $.each(myErrors.responseJSON.errors, function (key, item) {
                                $('#' + key + '-error').html(item);
                            });
                        }
                    });
                }
            });
        } );
    </script>
@endsection
