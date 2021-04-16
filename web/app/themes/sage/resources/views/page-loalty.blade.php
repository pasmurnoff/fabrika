{{--Template Name: Программа лояльности
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/Skidki_fabrika_noskov.jpg')"
           alt="Программа лояльности">
    </div>

    @while(have_posts()) @php the_post() @endphp
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile
  </div>
@endsection
