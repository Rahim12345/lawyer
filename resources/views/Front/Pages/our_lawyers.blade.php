<section class="team-one team-one__home-two">
    <div class="container">
        <div class="block-title text-center">
            <h3 class="block-title__title">{{ __('front_about.meet_our_lawyers') }}</h3><!-- /.block-title__title -->
            <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd laborum perspicial</p><!-- /.block-title__text-one -->
        </div><!-- /.block-title -->
        @foreach($attorneys->chunk(4) as $chunk)
            <div class="row no-gutters">
                @foreach($chunk as $attorney)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="{{ asset('storage/attorneys/'.$attorney->photo) }}" alt="{{ $attorney->name }}" />
                                <div class="team-one__image-hover">
                                    <div class="team-one__social">
                                        <a href="{{ $attorney->youtube }}" target="_blank" class="fab fa-youtube"></a>
                                        <a href="{{ $attorney->twitter }}" target="_blank" class="fab fa-twitter"></a>
                                        <a href="{{ $attorney->facebook }}" target="_blank" class="fab fa-facebook"></a>
                                        <a href="{{ $attorney->instagram }}" target="_blank" class="fab fa-instagram"></a>
                                    </div><!-- /.team-one__social -->
                                    <a href="mailto:{{ $attorney->email }}" class="team-one__contact">{{ $attorney->email }}</a>
                                    <a href="tel:{{ $attorney->tel }}" class="team-one__contact">Tel: <span>{{ $attorney->tel }}</span></a>
                                </div><!-- /.team-one__image-hover -->
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h3 class="team-one__name">{{ $attorney->name_lastname }}</h3><!-- /.team-one__name -->
                                <p class="team-one__designation">{{ $attorney->job }}</p><!-- /.team-one__designation -->
                            </div><!-- /.team-one__content -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                @endforeach
            </div><!-- /.row -->
        @endforeach
    </div><!-- /.container -->
</section><!-- /.team-one -->
