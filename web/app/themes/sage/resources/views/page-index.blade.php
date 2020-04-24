{{--
  Template Name: Главная страница
--}}
@extends('layouts.app')

@section('content')
    @include('components.tags.wrap')
    @include('components.card.stories.wrap')
    @include('components.banner.banner-duo')
    @include('components.category-output.output')
    @include('components.content.page-index-content')
    @include('components.blog.wrap')
@endsection
