{{--
  Template Name: Главная страница
--}}
@extends('layouts.app')

@section('content')
    {{--    @include('components.tags.wrap')--}}
    {{--    @include('components.card.stories.wrap')--}}
    @include('components.banner.banner-duo')
    @include('components.category-output.output', ['overflow' => ''])
    @include('components.content.page-index-content')
    @include('components.blog.wrap')
    {{-- @php bullshit1() @endphp--}}
    {{--@php bullshit2() @endphp--}}

@endsection
