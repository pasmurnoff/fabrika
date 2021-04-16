{{--Template Name: Бесплатная доставка
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/besplatnaya_dostavka_noskov.jpg')"
           alt="{{ __('Бесплатная доставка носков', 'sage') }}">
    </div>

    @while(have_posts()) @php the_post() @endphp
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile
  </div>
@endsection
