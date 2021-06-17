{{--
  Template Name: Главная страница
--}}
@extends('layouts.app')

@section('content')
    {{--    @include('components.tags.wrap')--}}
{{--        @include('components.card.stories.wrap')--}}
    @include('components.slider.wrap')
    @include('components.banner.banner-duo')
    @include('components.category-output.output', ['overflow' => ''])

    <div class="content__block the-content">
        {!! apply_filters( 'the_content', $post->post_content, $post->ID ); !!}
    </div>

    @include('components.blog.wrap')
@endsection
