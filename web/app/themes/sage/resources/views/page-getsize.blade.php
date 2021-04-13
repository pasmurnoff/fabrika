{{--Template Name: Как выбрать размер
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/razmer_noskov_fabrika.jpg')"
           alt="{{ __('Как выбрать размер носков', 'sage') }}">
    </div>

    @while(have_posts()) @php the_post() @endphp
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile

  </div>
@endsection
