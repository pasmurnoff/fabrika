{{--
Template Name: Статус заказа по номеру
--}}
@extends('layouts.app')

@section('content')
    <div class="defaultpage">
        <div class="defaultpage__imgwrap" itemscope itemtype="http://schema.org/ImageObject">
            <img class="defaultpage__image" src="@asset('images/defaultpages/status_zakaza_fabrika_noskov.jpg')"
                 alt="{{ __('Статус заказа по номеру', 'sage') }}" itemprop="contentUrl">
        </div>

        @while(have_posts()) @php the_post() @endphp
            <div class="the-content">
                @php the_content() @endphp
            </div>
        @endwhile

        <div class="cdek">
            <form method="POST" class="cdek__form">
                <div class="cdek__wrap">
                    <div class="labelwrap cdek__labelwrap">
                        <label class="label">{{ __('Введите трек код вашего заказа', 'sage') }}</label>
                        <input type="text" class="input cdek__input">
                        <div class="cdek__alert">
                            Введен некорректный номер
                        </div>
                    </div>
                    <input type="submit" class="submit cdek__submit" value="{{ __('Отследить', 'sage') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
