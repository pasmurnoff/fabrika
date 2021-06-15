{{--
Template Name: Наши работы
--}}

@extends('layouts.app')
@section('content')

    @while(have_posts()) @php the_post() @endphp
        @include('components.thumbnail.wrap')

        @include('components.photo-gallery.wrap', ['gallery' => get_field( 'photo_gallery', get_the_ID() )])

        <div class="the-content">
            @php the_content() @endphp
        </div>
    @endwhile

@endsection
