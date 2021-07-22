@extends('Admin.Layout.master')

@section('title')
    Update
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/attorney.css') }}">
@endsection

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <a href="{{ route('admin.vekiller.index') }}" class="btn btn-primary float-end">{{ __('admin_master.all') }}</a>
            <div class="card-header">
                <h3 class="card-title">Update</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.vekiller.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="attorney_id" value="{{ $attorney->id }}">
                    <div class="form-group mb-5">
                        <div class="form-group">
                            <label for="photo" class="form-label">Photo (285x300)</label>
                            <div class="col-sm-10">
                                <div class="dropzone">
                                    <img id="preview" src="{{ asset('storage/attorneys/'.$attorney->photo) }}" alt="{{ $attorney->name_lastname }}"/>
                                    <input type="file" name="photo" class="upload-input" id="photo" value="{{ old('photo',$attorney->photo) }}" aria-describedby="photoHelp"/>
                                </div>
                            </div>
                            @error('photo')
                            <small id="photoHelp" class="form-text text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Ad&Soyad</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ old('name',$attorney->name_lastname) }}" class="form-control" id="name" placeholder="Paz Conyers">
                            @error('name')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="job" class="col-sm-2 col-form-label">Vəzifə</label>
                        <div class="col-sm-10">
                            <input type="text" name="job" value="{{ old('job',$attorney->job) }}" class="form-control" id="job" placeholder="Senior Attorney">
                            @error('job')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="tel" class="col-sm-2 col-form-label">Tel no</label>
                        <div class="col-sm-10">
                            <input type="text" name="tel" value="{{ old('tel',$attorney->tel) }}" class="form-control" id="tel" placeholder="222 333 8800">
                            @error('tel')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="{{ old('email',$attorney->email) }}" class="form-control" id="email" placeholder="Paz.Conyers@example.com">
                            @error('email')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="twitter" class="col-sm-2 col-form-label">TWITTER</label>
                        <div class="col-sm-10">
                            <input type="text" name="twitter" value="{{ old('twitter',$attorney->twitter) }}" class="form-control" id="twitter">
                            @error('twitter')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="facebook" class="col-sm-2 col-form-label">FACEBOOK</label>
                        <div class="col-sm-10">
                            <input type="text" name="facebook" value="{{ old('facebook',$attorney->facebook) }}" class="form-control" id="facebook">
                            @error('facebook')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="instagram" class="col-sm-2 col-form-label">INSTAGRAM</label>
                        <div class="col-sm-10">
                            <input type="text" name="instagram" value="{{ old('instagram',$attorney->instagram) }}" class="form-control" id="instagram">
                            @error('instagram')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="youtube" class="col-sm-2 col-form-label">YOUTUBE</label>
                        <div class="col-sm-10">
                            <input type="text" name="youtube" value="{{ old('youtube',$attorney->youtube) }}" class="form-control" id="youtube">
                            @error('youtube')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary float-end">Redaktə et</button>
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
