{{--
  Вывод одиночной новости
--}}

@extends('layouts.app')
@section('content')
  <div class="blog blog_single">
    @while(have_posts()) @php the_post() @endphp
    <div class="blog__item blog__item_single">
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
