{{--
Template Name: Сублимация
--}}

@extends('layouts.app')
@section('content')
    @php
        $page_id = get_the_ID();
    @endphp

    @include('components.thumbnail.wrap')

    <div class="the-content">{!! get_field('sublimation_text_1', $page_id) !!}</div>

    @include('components.gallery.photo', ['gallery' => get_field('sublimation_gallery_1', $page_id)])

    <div class="the-content">{!! get_field('sublimation_text_2', $page_id) !!}</div>

    @include('components.gallery.photo', ['gallery' => get_field('sublimation_gallery_2', $page_id)])

@endsection
