{{--
Template Name: Сертификаты
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php the_post() @endphp

        @include('components.thumbnail.wrap')

        <div class="the-content">
            @php the_content() @endphp
        </div>

        @include('components.gallery.files', ['files' => get_field( 'files_gallery', get_the_ID() )])

    @endwhile
@endsection
