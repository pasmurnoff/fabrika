{{--
Template Name: О фабрике
--}}

@extends('layouts.app')
@section('content')

    @include('components.banner.wrap')

    @while(have_posts()) @php the_post() @endphp
        <div class="the-content">
            @php the_content() @endphp
        </div>
    @endwhile

    @php
        $about_info = get_field( "about_info" );
    @endphp
    @if($about_info)
        <div class="forwhom forwhom_padding-bottom">
            @foreach($about_info as $info)
                <div class="forwhom__item">
                    <div class="title title_middle forwhom__title">{!! $info['title'] !!}</div>
                    <div class="forwhom__sep"></div>
                    <div class="forwhom__text">{!! $info['text'] !!}</div>
                </div>
            @endforeach
        </div>
    @endif

    @include('components.workyears.workyears')
@endsection
