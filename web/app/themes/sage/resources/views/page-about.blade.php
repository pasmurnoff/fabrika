{{--
Template Name: О фабрике
--}}

@extends('layouts.app')
@section('content')
    @php
        $banner_buttons = get_field( "banner_buttons" );
        $about_info = get_field( "about_info" );
    @endphp

    @component('components.banner.banner', ['buttons' => $banner_buttons])
        @slot('title')
            {!! get_field( 'banner_title' ) !!}
        @endslot

        @slot('text')
            {!! get_field( 'banner_text' ) !!}
        @endslot

        @slot('icon')
            <img width="210" src="@asset('images/components/banners/Fabrika_Noskov_O_Kompanii.png')"
                 alt="Производство и продажа носков по низким ценам">
        @endslot

    @endcomponent

    @while(have_posts()) @php the_post() @endphp
        <div class="the-content">
            @php the_content() @endphp
        </div>
    @endwhile

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
