{{--Template Name: Этикетка и упаковка носков
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap" itemscope itemtype="http://schema.org/ImageObject">
      <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov-upakovka_noskov.jpg')"
           alt="Этикетка и упаковка носков" itemprop="contentUrl">
    </div>
  </div>

  @while(have_posts()) @php the_post() @endphp
    <div class="the-content">
      @php the_content() @endphp
    </div>
  @endwhile

  @include('components.writeus.writeus')
@endsection
