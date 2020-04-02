{{--
  Template Name: Главная страница
--}}
@extends('layouts.app')

@section('content')

    @include('components.banner.banner-duo')
    @include('components.category-output.output')
    @include('components.content.page-index-content')
@endsection
