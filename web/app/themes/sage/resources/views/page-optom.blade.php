{{--Template Name: Носки оптом
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">

    <div class="the-content">
      {!! get_field('wholesale_before') !!}
    </div>

    @include('components.category-output.all.wrap', ['overflow' => ''])

    @while(have_posts()) @php the_post() @endphp
      @include('components.thumbnail.wrap')
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile

  </div>

  @include('components.whyus.whyus')
@endsection
