{{--Template Name: Вопросы и ответы
--}}

@extends('layouts.app')

@section('content')
    @php
        $banner_buttons = get_field( "banner_buttons" );
    @endphp
    <div class="defaultpage">
        @component('components.banner.banner', ['buttons' => $banner_buttons, 'classes' => 'mrgn35 banner_bg banner_faq'])
            @slot('title')
                {!! get_field( 'banner_title' ) !!}
            @endslot
            @slot('text')
                {!! get_field( 'banner_text' ) !!}
            @endslot
            @slot('icon')
                <img width="350" src="@asset('images/components/banners/voprosi_fabrika_noskov.png')"
                     alt="Носки на заказ с Вашим дизайном от 1000 пар">
            @endslot
        @endcomponent

        @while(have_posts()) @php the_post() @endphp
          <div class="the-content the-content__black-marker">
              @php the_content() @endphp
          </div>
        @endwhile

        @include('components.form.default', ['title' => __('Задать вопрос на Фабрику Носков', 'sage'), 'submit' => __('Задать вопрос', 'sage'), 'id' =>'toform'])
    </div>
@endsection
