{{--Template Name: Пряжа
--}}

@extends('layouts.app')

@section('content')
    @php
        $banner_buttons = get_field( "banner_buttons" );
        $yarn_info = get_field( "yarn_info" );
    @endphp
    @component('components.banner.banner', ['buttons' => $banner_buttons])
        @slot('title')
            {!! get_field( 'banner_title' ) !!}
        @endslot

        @slot('text')
            {!! get_field( 'banner_text' ) !!}
        @endslot

        @slot('icon')
            <img width="210" src="@asset('images/components/banners/pryazha/fabrika-noskov-prazha.png')"
                 alt="Производство и продажа носков по низким ценам">
        @endslot
    @endcomponent

    @if($yarn_info)
        <div class="pryazha__blocks mrgn35 pdng35-top">
            @foreach($yarn_info as $item)
                <div class="block-text pryazha__block">
                    <div class="pryazha__icon">
                        @include('icon::pryazha.' . $item['icon'])
                    </div>
                    <div class="pryazha__item">
                        <div class="title title_middle pdng5-bottom">{{ $item['title'] }}</div>
                        <div class="text">{!! $item['text'] !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @include('components.pryazha.wrap')

    @component('components.form.default', ['title' => __('Проконсультируйтесь с нами', 'sage')])
        @slot('text')
            {{ __('Наши специалисты подробно расскажут вам о вариациях товара, а также об оборудовании', 'sage') }}
        @endslot
    @endcomponent
@endsection
