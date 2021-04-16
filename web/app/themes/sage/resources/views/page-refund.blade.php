{{--Template Name: Условия возврата
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap" itemscope itemtype="http://schema.org/ImageObject">
      <img class="defaultpage__image" src="@asset('images/defaultpages/uslovia_vozvrata_noskov.jpg')"
           alt="Условия возврата носков" itemprop="contentUrl">
    </div>

    @while(have_posts()) @php the_post() @endphp
      <div class="the-content">
        @php the_content() @endphp
      </div>
    @endwhile
  </div>
@endsection
