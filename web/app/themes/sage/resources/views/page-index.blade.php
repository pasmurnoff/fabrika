{{--
  Template Name: Главная страница
--}}
@extends('layouts.app')

@section('content')
    @include('components.banner.banner-duo', ['class' => 'container'])
    @include('components.category-output.output')
    @include('components.content.page-index-content')
    @include('components.blog.wrap', ['class' => 'container'])
@endsection
