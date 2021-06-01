{{--
Template Name: Статус заказа по номеру
--}}
@extends('layouts.app')

@section('content')
    <div class="defaultpage">
        @include('components.thumbnail.wrap')

        @while(have_posts()) @php the_post() @endphp
            <div class="the-content">
                @php the_content() @endphp
            </div>
        @endwhile

        <div class="cdek">
            <form method="POST" class="cdek__form">
                <div class="cdek__wrap">
                    <div class="labelwrap cdek__labelwrap">
                        <label class="label">{{ pll__('Введите трек код вашего заказа') }}</label>
                        <input type="text" class="input cdek__input">
                        <div class="cdek__alert">
                            Введен некорректный номер
                        </div>
                    </div>
                    <input type="submit" class="submit cdek__submit" value="{{ pll__('Отследить') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
