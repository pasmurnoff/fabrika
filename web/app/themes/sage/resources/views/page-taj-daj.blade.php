{{--
Template Name: Тай дай
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp

        @include('components.thumbnail.wrap')

        <div class="the-content">
            @php the_content() @endphp
        </div>

    @endwhile

    {{-- Палитра цветов --}}
    @include('components.gallery.color-palette')

    @include('components.gallery.photo', ['gallery' => get_field( 'photo_gallery', get_the_ID() ), 'sectionTitle' => 'Примеры наших работ'])

    @include('components.writeus.writeus')
@endsection
