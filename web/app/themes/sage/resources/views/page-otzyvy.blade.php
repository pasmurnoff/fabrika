{{--
Template Name: Отзывы
--}}

@extends('layouts.app')
@section('content')

    @include('components.thumbnail.wrap')

    @include('components.form.review', ['title' => 'Добавить отзыв'])

    @include('components.reviews.wrap')

@endsection
