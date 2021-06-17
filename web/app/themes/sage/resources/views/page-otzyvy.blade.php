{{--
Template Name: Отзывы
--}}

@extends('layouts.app')
@section('content')

    @include('components.thumbnail.wrap')


    @php do_action('generateRVW') @endphp

    <form action method="post">
        <input type="hidden" name="addReview">

        <input type="text" name="full_name">
        <button class="button">Добавить отзыв</button>
    </form>


    @include('components.reviews.wrap')

@endsection
