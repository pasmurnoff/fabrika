{{--
Template Name: Отзывы
--}}

@extends('layouts.app')
@section('content')

    @include('components.thumbnail.wrap')

    @include('components.form.review', ['title' => 'Добавить отзыв'])


    @php do_action('generateRVW') @endphp

    <form action method="post" enctype="multipart/form-data">
        <input type="hidden" name="addReview">

        <input type="text" name="review_author"> <br><br>
        <textarea name="review_body"></textarea> <br><br>
        <input type="text" name="review_rating"> <br><br>
        <input type="file" name="review_image" multiple="false"> <br><br>
        <button class="button">Добавить отзыв</button>
    </form>

    @include('components.reviews.wrap')

@endsection
