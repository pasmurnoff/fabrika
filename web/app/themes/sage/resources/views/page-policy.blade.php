{{--Template Name: Политика конфиденциальности
--}}

@extends('layouts.app')

@section('content')
    @if(have_posts())
        @while(have_posts()) @php the_post() @endphp
            <div class="the-content">
                @php the_content() @endphp
            </div>
        @endwhile
    @endif
@endsection