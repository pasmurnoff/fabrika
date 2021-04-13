{{--Template Name: Вакансии
--}}

@extends('layouts.app')

@section('content')
    <div class="defaultpage">
        <div class="defaultpage__imgwrap" itemscope itemtype="http://schema.org/ImageObject">
            <img class="defaultpage__image" src="@asset('images/defaultpages/vakancii_fabrika_noskov.jpg')"
                 alt="Вакансии на фабрику носков" itemprop="contentUrl">
        </div>

        @while(have_posts()) @php the_post() @endphp
            <div class="the-content">
                @php the_content() @endphp
            </div>
        @endwhile
    </div>
@endsection
