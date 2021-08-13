@extends('Front.Layout.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <section class="blog-one blog-one__classic blog-details-page">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9">
                    <div class="blog-one__classic-content">

                        @if(app()->getLocale() == 'az')
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <div class="blog-one__image-inner">
                                        <img src="{{ asset('storage/blog-covers/'.$blog->photo) }}" alt="{{ $blog->title_az }}" />
                                    </div><!-- /.blog-one__image-inner -->
                                </div><!-- /.blog-one__image -->
                                <div class="blog-one__content">
                                    <div class="blog-one__date"><span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d') }}</span>{{ explode(' ',\Carbon\Carbon::parse($blog->updated_at)->formatLocalized('%d %b %Y'))[1] }}</div><!-- /.blog-one__date -->
                                    <div class="blog-one__meta">
                                        <a href="javascript: void(0)">Sanan Suleymanli</a>
                                        <a href="javascript: void(0)">Comments (4)</a>
                                    </div><!-- /.blog-one__meta -->
                                    <h3 class="blog-one__title">{{ $blog->title_az }}</h3><!-- /.blog-one__title -->
                                    {!! $blog->blog_az !!}
                                    <div class="blog-one__bottom">
                                        <div class="blog-details__tags">
                                            @foreach($blog->getTags as $tag)
                                                <a href="{{ route('front.tag',$tag->getTag->slug_az) }}" class="btn btn-primary mb-1">{{ '#'.$tag->getTag->tag_az  }}</a>
                                            @endforeach
                                        </div><!-- /.blog-details__tags -->
                                        <a href="#" class="blog-one__share"><i class="fa fa-share-alt"></i><span class="text-uppercase">{{ __('blog.share_this') }}</span></a>
                                    </div><!-- /.blog-one__bottom -->
                                </div><!-- /.blog-one__content -->
                            </div><!-- /.blog-one__single -->
                        @else
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <div class="blog-one__image-inner">
                                        <img src="{{ asset('storage/blog-covers/'.$blog->photo) }}" alt="{{ $blog->title_en }}" />
                                    </div><!-- /.blog-one__image-inner -->
                                </div><!-- /.blog-one__image -->
                                <div class="blog-one__content">
                                    <div class="blog-one__date"><span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('d') }}</span>{{ explode(' ',\Carbon\Carbon::parse($blog->updated_at)->formatLocalized('%d %b %Y'))[1] }}</div><!-- /.blog-one__date -->
                                    <div class="blog-one__meta">
                                        <a href="javascript: void(0)">Sanan Suleymanli</a>
                                        <a href="javascript: void(0)">Comments (4)</a>
                                    </div><!-- /.blog-one__meta -->
                                    <h3 class="blog-one__title">{{ $blog->title_en }}</h3><!-- /.blog-one__title -->
                                    {!! $blog->blog_en !!}
                                    <div class="blog-one__bottom">
                                        <div class="blog-details__tags">
                                            @foreach($blog->getTags as $tag)
                                                <a href="{{ route('front.tag',$tag->getTag->slug_en) }}" class="btn btn-primary mb-1">{{ '#'.$tag->getTag->tag_en  }}</a>
                                            @endforeach
                                        </div><!-- /.blog-details__tags -->
                                        <a href="#" class="blog-one__share"><i class="fa fa-share-alt"></i><span class="text-uppercase">{{ __('blog.share_this') }}</span></a>
                                    </div><!-- /.blog-one__bottom -->
                                </div><!-- /.blog-one__content -->
                            </div><!-- /.blog-one__single -->
                        @endif


                        <div class="comment-one">
                            <h3 class="blog-details__block-title">Comments (2)</h3><!-- /.blog-details__block-title -->

                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <div class="comment-one__image-inner">
                                        <img src="{{ asset('assets/avatar/user.png') }}" alt="Awesome Image" />
                                    </div><!-- /.comment-one__image-inner -->
                                </div><!-- /.comment-one__image -->
                                <div class="comment-one__content">
                                    <h4 class="comment-one__title">William Caleb</h4><!-- /.comment-one__title -->
                                    <div class="comment-one__meta">
                                        <a href="blog-post.html">November 30, 2019</a>
                                        <a href="blog-post.html">9:35 PM</a>
                                    </div><!-- /.comment-one__meta -->
                                    <div class="comment-one__text">
                                        <p>Proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                    </div><!-- /.comment-one__text -->
                                </div><!-- /.comment-one__content -->
                            </div><!-- /.comment-one__single -->

                        </div><!-- /.comment-one -->


                        <div class="comment-form">
                            <h3 class="blog-details__block-title">{{ __('blog.leave_a_reply') }}</h3><!-- /.blog-details__block-title -->


                            <form action="#" class="contact-one__form">

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="case-form-one__field">
                                            <textarea name="message" placeholder="{{ __('front_master.message') }}"></textarea>
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->

                                    <div class="col-sm-6">
                                        <div class="case-form-one__field">
                                            <input type="text" name="name" placeholder="{{ __('front_master.your_name') }}">
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-sm-6">
                                        <div class="case-form-one__field">
                                            <input type="text" name="email" placeholder="{{ __('login.email') }}">
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="case-form-one__field text-left mb-0">
                                            <button type="submit" class="thm-btn case-form-one__btn">{{ __('blog.post_comment') }} <i class="fa fa-long-arrow-alt-right"></i></button>
                                        </div><!-- /.case-form-one__field -->
                                    </div><!-- /.col-md-6 col-sm-12 -->
                                </div><!-- /.row -->
                            </form><!-- /.contact-one__form -->
                        </div><!-- /.comment-form -->
                    </div><!-- /.blog-one__classic-content -->
                </div><!-- /.col-lg-9 -->
                @include('Front.Pages.blog-sidebar')
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-one__classic -->
@endsection

@section('js')

@endsection
