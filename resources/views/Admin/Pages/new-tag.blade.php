@extends('Admin.Layout.master')

@section('title')
    {{ __('admin_master.add') }}
@endsection

@section('css')

@endsection

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <a href="{{ route('tag.index') }}" class="btn btn-primary float-end">{{ __('admin_master.all') }}</a>
            <div class="card-header">
                <h3 class="card-title">{{ __('admin_master.add') }}</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('tag.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row mb-3">
                        <label for="tag_az" class="col-sm-2 col-form-label">Tag(AZ)</label>
                        <div class="col-sm-10">
                            <input type="text" name="tag_az" value="{{ old('tag_az') }}" class="form-control" id="tag_az" placeholder="Daşınmaz əmlak">
                            @error('tag_az')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="tag_en" class="col-sm-2 col-form-label">Tag(EN)</label>
                        <div class="col-sm-10">
                            <input type="text" name="tag_en" value="{{ old('tag_en') }}" class="form-control" id="tag_en" placeholder="Real Estate Laws">
                            @error('tag_en')
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
@endsection
