@extends('Front.Layout.master')

@section('title')
{{ __('blog.blogs') }}
@endsection

@section('css')

@endsection

@section('content')
    <section class="blog-one blog-one__classic">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9">
                    <div class="blog-one__classic-content">
                        @foreach($blogs as $blog)
                            @if(app()->getLocale() == 'az')
                                <div class="blog-one__single">
                                    <div class="blog-one__image">
                                        <div class="blog-one__image-inner">
                                            <img src="{{ asset('storage/blog-covers/'.$blog->photo) }}" alt="{{ $blog->title_az }}" />
                                            <a href="{{ route('front.single.blog',$blog->slug_az) }}" class="blog-one__image-link"><i class="fa fa-link"></i></a>
                                        </div><!-- /.blog-one__image-inner -->
                                    </div><!-- /.blog-one__image -->
                                    <div class="blog-one__content">
                                        <div class="blog-one__date"><span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d') }}</span>{{ explode(' ',\Carbon\Carbon::parse($blog->updated_at)->formatLocalized('%d %b %Y'))[1] }}</div><!-- /.blog-one__date -->
                                        <div class="blog-one__meta">
                                            <a href="javascript: void(0)">Sanan Suleymanli</a>
                                            <a href="javascript: void(0)">Comments (4)</a>
                                        </div><!-- /.blog-one__meta -->
                                        <h3 class="blog-one__title"><a href="{{ route('front.single.blog',$blog->slug_az) }}">{{ $blog->title_az }}</a></h3><!-- /.blog-one__title -->
                                    {!! mb_substr($blog->blog_az,0,200) !!}<!-- /.blog-one__text -->
                                        <div class="blog-one__bottom">
                                            <a class="blog-one__link" href="{{ route('front.single.blog',$blog->slug_az) }}"><span>{{ __('blog.more_details') }}</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                                            <a href="{{ route('front.single.blog',$blog->slug_az) }}" class="blog-one__share"><i class="fa fa-share-alt"></i><span class="text-uppercase">{{ __('blog.share_this') }}</span></a>
                                        </div><!-- /.blog-one__bottom -->
                                        <br>
                                        @foreach($blog->getTags as $tag)
                                            <a href="{{ route('front.tag',$tag->getTag->slug_az) }}" class="btn btn-primary mb-1">{{ '#'.$tag->getTag->tag_az  }}</a>
                                        @endforeach
                                    </div><!-- /.blog-one__content -->
                                </div><!-- /.blog-one__single -->
                            @else
                                <div class="blog-one__single">
                                    <div class="blog-one__image">
                                        <div class="blog-one__image-inner">
                                            <img src="{{ asset('storage/blog-covers/'.$blog->photo) }}" alt="{{ $blog->title_en }}" />
                                            <a href="{{ route('front.single.blog',$blog->slug_en) }}" class="blog-one__image-link"><i class="fa fa-link"></i></a>
                                        </div><!-- /.blog-one__image-inner -->
                                    </div><!-- /.blog-one__image -->
                                    <div class="blog-one__content">
                                        <div class="blog-one__date"><span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d') }}</span>{{ explode(' ',\Carbon\Carbon::parse($blog->updated_at)->formatLocalized('%d %b %Y'))[1] }}</div><!-- /.blog-one__date -->
                                        <div class="blog-one__meta">
                                            <a href="javascript: void(0)">Sanan Suleymanli</a>
                                            <a href="javascript: void(0)">Comments (4)</a>
                                        </div><!-- /.blog-one__meta -->
                                        <h3 class="blog-one__title"><a href="{{ route('front.single.blog',$blog->slug_en) }}">{{ $blog->title_en }}</a></h3><!-- /.blog-one__title -->
                                    {!! mb_substr($blog->blog_en,0,200) !!}<!-- /.blog-one__text -->
                                        <div class="blog-one__bottom">
                                            <a class="blog-one__link" href="{{ route('front.single.blog',$blog->slug_en) }}"><span>{{ __('blog.more_details') }}</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                                            <a href="{{ route('front.single.blog',$blog->slug_en) }}" class="blog-one__share"><i class="fa fa-share-alt"></i><span class="text-uppercase">{{ __('blog.share_this') }}</span></a>
                                        </div><!-- /.blog-one__bottom -->
                                        <br>
                                        @foreach($blog->getTags as $tag)
                                            <a href="{{ route('front.tag',$tag->getTag->slug_en) }}" class="btn btn-primary mb-1">{{ '#'.$tag->getTag->tag_en  }}</a>
                                        @endforeach
                                    </div><!-- /.blog-one__content -->
                                </div><!-- /.blog-one__single -->
                            @endif
                        @endforeach
                        <div class="post-pagination">
                            {{ $blogs->links('vendor.pagination.bootstrap-4') }}
                        </div><!-- /.post-pagination -->
                    </div><!-- /.blog-one__classic-content -->
                </div><!-- /.col-lg-9 -->
                @include('Front.Pages.blog-sidebar')
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-one__classic -->
@endsection

@section('js')

@endsection
