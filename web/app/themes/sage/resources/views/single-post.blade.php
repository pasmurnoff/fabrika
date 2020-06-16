{{--
  Вывод одиночной новости
--}}

@extends('layouts.app')
@section('content')
    <div class="blog blog_single">
        @while(have_posts()) @php the_post() @endphp
        @include('components.blog.meta')
        <div class="blog__item blog__item_single">

            <div class="article__content hidden">
                <h2 class="article__content-title title title_large">Содержание</h2>
                <ul class="article__list"></ul>
            </div>

            <div class="blog__thumb blog__thumb_single">
                @php the_post_thumbnail(); @endphp
            </div>

            <div class="blog__content">
                @php the_content(); @endphp
            </div>

            <div class="article__rating">
                @php rating() @endphp
            </div>

            <div class="blog__comments mrgn30-bottom mrgn50-top">
                @php comments_template(); @endphp
                <div class="commentlist">
                    @php wp_list_comments(['style' => 'div', 'avatar_size' => 80]);@endphp
                </div>
                @include('components.comments.wrap')
            </div>
            @include('components.blog.navigtion')

        </div>
        @endwhile
    </div>
@endsection
