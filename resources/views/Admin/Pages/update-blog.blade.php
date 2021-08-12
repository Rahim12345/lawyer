@extends('Admin.Layout.master')

@section('title')
Blog
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/attorney.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="col-md-10 offset-md-2">
        <div class="card">
            <a href="{{ route('blog.index') }}" class="btn btn-primary float-end">{{ __('admin_master.all_services') }}</a>
            <div class="card-header">
                <h3 class="card-title">{{ __('admin_master.add') }}</h3>
            </div>
            <div class="card-body">
                <form method="post" id="blogForm" action="{{ route('blog.store') }}" onsubmit="return false" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="blog_id" value="{{ $blog->id }}">
                    <div class="form-group mb-5">
                        <div class="form-group">
                            <label for="photo" class="form-label">Banner (780x400 - optional)</label>
                            <div class="col-sm-10">
                                <div class="dropzone">
                                    <img id="preview" src="{{ asset('storage/blog-covers/'.$blog->photo) }}" alt="Add photo icon"/>
                                    <input type="file" name="photo" class="upload-input" id="photo" value="{{ old('photo') }}" aria-describedby="photoHelp"/>
                                </div>
                            </div>
                            <small id="photo-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="kateqoriyas" class="col-sm-2 col-form-label">Kateqoriyalar</label>
                        <div class="col-sm-10">
                            <select name="kateqoriyas" id="kateqoriyas" class="form-control">
                                <option value="">Birini seçin</option>
                                @foreach($kateqoriyas as $kateqoriya)
                                <option value="{{ $kateqoriya->id }}" {{ $blog->getCategory->id == $kateqoriya->id ? 'selected' : '' }}>{{ $kateqoriya->category_az }}</option>
                                @endforeach
                            </select>
                            <small id="kateqoriyas-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="tags" class="col-sm-2 col-form-label">Taglar</label>
                        <div class="col-sm-10">
                            <select id="tags" name="tags[]" class="form-control" multiple="multiple">
                                <option value="">Birini seçin</option>
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" {{ in_array($tag->id,$existTags) ? 'selected' : '' }}>{{ $tag->tag_az }}</option>
                                @endforeach
                            </select>
                            <small id="tags-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="title_az" class="col-sm-2 col-form-label">Title(AZ)</label>
                        <div class="col-sm-10">
                            <input type="text" name="title_az" id="title_az" value="{{ old('title_az',$blog->title_az) }}" class="form-control">
                            <small id="title_az-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="title_en" class="col-sm-2 col-form-label">Title(EN)</label>
                        <div class="col-sm-10">
                            <input type="text" name="title_en" id="title_en" value="{{ old('title_en',$blog->title_en) }}" class="form-control">
                            <small id="title_en-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="blog_az" class="col-sm-2 col-form-label">Blog(AZ)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="blog_az" id="blog_az" cols="30" rows="4">{{ old('blog_az',$blog->blog_az) }}</textarea>
                            <small id="blog_az-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="blog_en" class="col-sm-2 col-form-label">Blog(EN)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="blog_en" id="blog_en" cols="30" rows="4">{{ old('blog_en',$blog->blog_en) }}</textarea>
                            <small id="blog_en-error" class="form-text text-danger"></small>
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" id="addBlog" class="btn btn-primary float-end">Redaktə et</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/i18n/az.min.js" integrity="sha512-5h/4MstAOhpL8LHF6e7tTEv31xdr5wY7JL9w7nqOI2zs/tL1ofuRfX+g+RwJ7l/3xc5cIAeLMLne6m+QYX67hg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $( document ).ready( function () {
            let blog_az = CKEDITOR.replace( 'blog_az', {
                filebrowserUploadUrl: "{{route('admin.upload.blog.photo', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            } );

            blog_az.on( 'blur', function () {
                blog_az.setData( blog_az.getData().replace( /(<a.*?rel=".*?)noreferrer/g, '$1' ) );
            } );

            let blog_en = CKEDITOR.replace( 'blog_en', {
                filebrowserUploadUrl: "{{route('admin.upload.blog.photo', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            } );

            blog_en.on( 'blur', function () {
                blog_en.setData( blog_en.getData().replace( /(<a.*?rel=".*?)noreferrer/g, '$1' ) );
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
            CKEDITOR.instances['blog_en'].on("blur", function() {
                let version_en = CKEDITOR.instances['blog_en'].getData();
                $.ajax({
                    type : 'POST',
                    data : {version_en},
                    url  : '{!! route('admin.blog.translate.to.az') !!}',
                    success :function (response) {
                        CKEDITOR.instances['blog_az'].setData(response);
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

    <script>
        $(document).ready(function() {
            $("#kateqoriyas").select2({
                width : '100%'
            });
            $("#tags").select2({
                width : '100%',
                tags  : true
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#addBlog').click(function () {
                $(this).prop('disabled',true);
                let blogForm = document.getElementById("blogForm");
                let data = new FormData(blogForm);
                data.append('blog_az', CKEDITOR.instances['blog_az'].getData());
                data.append('blog_en', CKEDITOR.instances['blog_en'].getData());
                data.append('blog_id', $('#blog_id').val());
                $.ajax({
                    url: '{!! route('admin.blog.update') !!}',
                    data: data,
                    cache: false,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function () {
                        toastr.success('Blog updated successfully');
                        setTimeout(function () {
                            location.href = '{!! route('blog.index') !!}'
                        },3000);
                    },
                    error : function (myErrors) {
                        $.each(myErrors.responseJSON.errors, function (key, value) {
                            $('#' +key+ '-error').html('').html(value);
                        });
                        $('#addBlog').prop('disabled',false);
                    }
                });
            });
        });
    </script>
@endsection

