{{--
  Вывод одиночной новости
--}}

@extends('layouts.app')
@section('content')
  <div class="blog blog_single">
    @while(have_posts()) @php the_post() @endphp
    <div class="blog__item blog__item_single">
      @include('components.blog.meta')

      <div class="article__content hidden">
        <h2 class="article__content-title title title_large">Содержание</h2>
        <div class="article__list"></div>
      </div>

      <div class="blog__thumb blog__thumb_single">
        @php the_post_thumbnail(); @endphp
      </div>

      <div class="blog__content">
        @php the_content(); @endphp
      </div>

    </div>
    @endwhile
  </div>
@endsection
