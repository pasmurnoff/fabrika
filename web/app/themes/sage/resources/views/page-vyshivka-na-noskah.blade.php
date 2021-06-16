{{--
Template Name: Вышивка на носках
--}}

@extends('layouts.app')
@section('content')

    @while(have_posts()) @php the_post() @endphp
        @include('components.thumbnail.wrap')

        <div class="the-content">
            @php the_content() @endphp
        </div>
    @endwhile

    @include('components.writeus.writeus', ['title' => 'Консультация по вышивке', 'class' => 'mrgn35-bottom'])

    @include('components.gallery.photo', ['gallery' => get_field( 'photo_gallery', get_the_ID() )])

@endsection
