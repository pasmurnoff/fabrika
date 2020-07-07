{{--
  Вывод блога
--}}

@extends('layouts.app')
@section('content')
    <div class="blog blog_loop">
        @while(have_posts()) @php the_post() @endphp
        <div class="blog__item blog__item_loop">
            <div class="blog__side blog__side_text">
                <a href="@php the_permalink(); @endphp" class="title title_huge blog__title blog__title_loop">
                    @php the_title(); @endphp
                </a>
                <div class="blog__excerpt">
                    @php the_excerpt(); @endphp
                </div>
                <div class="mrgn15-top">
                    @include('components.blog.meta')
                </div>
            </div>
            <div class="blog__side">
                <div class="blog__thumb blog__thumb_loop" itemscope itemtype="http://schema.org/ImageObject">
                    <img src="{{ get_the_post_thumbnail_url() }}" alt="{!! get_the_title() !!}" itemprop="contentUrl">
                </div>
            </div>
        </div>
        @endwhile
    </div>
    @php the_posts_pagination([
        'screen_reader_text' => ' ',
        'prev_next' => false,
        'end_size' => 3,
        'mid_size' => 3,
]) @endphp
@endsection
