{{--
Template Name: Предложить помещение в аренду
--}}
@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov_predlozhit-arendu.jpg')"
           alt="Предложить помещение в аренду">
    </div>

    @while(have_posts()) @php the_post() @endphp
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile
  </div>

  @include('components.writeus.writeus')
@endsection
