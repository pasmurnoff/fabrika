{{--Template Name: Пряжа
--}}

@extends('layouts.app')

@section('content')

    @include('components.banner.wrap')

    @php
        $yarn_info = get_field( "yarn_info" );
    @endphp

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

    @component('components.form.default', ['title' => pll__('Проконсультируйтесь с нами')])
        @slot('text')
            {{ pll__('Наши специалисты подробно расскажут вам о вариациях товара, а также об оборудовании') }}
        @endslot
    @endcomponent
@endsection
