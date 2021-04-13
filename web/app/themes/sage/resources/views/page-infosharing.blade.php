{{--Template Name: Условия передачи информации
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="the-content">
      @php the_content() @endphp
    </div>
  @endwhile
@endsection
