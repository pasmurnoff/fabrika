{{--Template Name: Вопросы и ответы
--}}

@extends('layouts.app')

@section('content')
    @include('components.banner.wrap')

    <div class="defaultpage">
        @while(have_posts()) @php the_post() @endphp
          <div class="the-content the-content__black-marker">
              @php the_content() @endphp
          </div>
        @endwhile

        @include('components.form.default', ['title' => pll__('Задать вопрос на Фабрику Носков'), 'submit' => pll__('Задать вопрос'), 'id' =>'toform'])
    </div>
@endsection
