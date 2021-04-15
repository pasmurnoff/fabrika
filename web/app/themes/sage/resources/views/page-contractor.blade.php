{{--Template Name: Стать нашим подрядчиком
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov_stat-podryadchikom.jpg')"
           alt="Стать подрядчиком фабрики носков">
    </div>

    @while(have_posts()) @php the_post() @endphp
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile

  </div>
@endsection
