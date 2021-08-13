<div class="col-lg-3">
    <div class="sidebar sidebar__right">
        <div class="sidebar__single sidebar__search">
            <form action="#" class="sidebar__search-form" id="searchForm" onsubmit="return false">
                <input type="search" name="search" id="search-word" placeholder="{{ __('blog.search') }}...">
                <button type="submit" id="searchBtn"><i class="fa fa-search"></i></button>
            </form><!-- /.sidebar__search-form -->
            <div id="searchList"></div>
        </div><!-- /.sidebar__single -->
        <div class="sidebar__single">
            <h3 class="sidebar__title">{{ __('blog.categories') }}</h3><!-- /.sidebar__title -->
            <ul class="list-unstyled sidebar__cat-list">
                @foreach($categories as $category)
                <li>
                    <a href="{{ route('front.category',app()->getLocale() == 'az' ? $category->slug_az : $category->slug_en) }}">
                        <i class="fa fa-long-arrow-alt-right"></i>
                        {{ app()->getLocale() == 'az' ? $category->category_az : $category->category_en }}
                    </a>
                </li>
                @endforeach
            </ul><!-- /.sidebar__cat-list -->
        </div><!-- /.sidebar__single -->

        <div class="sidebar__single">
            <h3 class="sidebar__title">{{ __('blog.tags') }}</h3><!-- /.sidebar__title -->
            <div class="sidebar__tags-list">
                @if(app()->getLocale() == 'az')
                    @foreach($tags as $tag)
                        <a href="{{ route('front.tag',$tag->slug_az) }}">{{ $tag->tag_az }}</a>
                    @endforeach
                @else
                    @foreach($tags as $tag)
                        <a href="{{ route('front.tag',$tag->slug_en) }}">{{ $tag->tag_en }}</a>
                    @endforeach
                @endif
            </div><!-- /.sidebar__tags-list -->
        </div><!-- /.sidebar__single -->
    </div><!-- /.sidebar -->
</div><!-- /.col-lg-3 -->
