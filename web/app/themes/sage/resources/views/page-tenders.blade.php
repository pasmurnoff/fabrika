{{--Template Name: Участие в тендерах
--}}

@extends('layouts.app')

@section('content')
    @include('components.banner.wrap')
    <div class="tenders mrgn50">
        <div class="tenders__title title title_huge text_thin mrgn50-bottom pdng50">
            {!! get_field( "tenders_fact" ) !!}
        </div>
        <div class="tenders__block mrgn50-bottom pdng50-bottom">
            <div class="tenders__block-left">
                <div class="tenders__block-left_first title title_large mrgn35-bottom">{!! get_field( "tenders_delivery" )['title'] !!}</div>
                <div class="text text_large mrgn15-bottom">
                    {!! get_field( "tenders_delivery" )['descr'] !!}
                </div>
            </div>
            <div class="tenders__block-right" itemscope itemtype="http://schema.org/ImageObject">
                <img src="{{ get_field( "tenders_delivery" )['image']['url'] }}"
                     alt="{{ get_field( "tenders_delivery" )['alt'] }}"
                     itemprop="contentUrl">
            </div>
        </div>
        <div class="tenders__block mrgn50-bottom pdng50">
            <div class="tenders__block-left">
                <div class="title title_large mrgn35-bottom">
                    {!! get_field( "tenders_advantages" )['title'] !!}
                </div>
            </div>
            <div class="tenders__block-right tenders__block-right_exclude">
                <ul class="tenders__list">
                    @foreach(get_field('tenders_advantages')['items'] as $item)
                        <li class="tenders__point">
                            {!! $item['item'] !!}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="tenders__block tenders__block_bg mrgn50 pdng35-bottom">
            <div class="tenders__title tenders__title_bg title title_huge text_thin mrgn50-bottom">
                {!! get_field('tenders_platforms')['title'] !!}
            </div>
            <ul class="tenders__list tenders__list_bg">
                @foreach(get_field('tenders_platforms')['items'] as $item)
                    <li class="tenders__point tenders__point_bg">{!! $item['item'] !!}</li>
                @endforeach
            </ul>
        </div>

        <div class="tenders__callback pdng50">
            @foreach(get_field('tenders_questions')['region'] as $item)
                <div class="tenders__callback-item">
                    <div class="title mrgn15-bottom text_large text_bold text_black">{!! $item['title'] !!}</div>
                    @foreach($item['human'] as $human)
                        <div class="tenders__contact mrgn15-bottom text_middle text text_black">
                            {!! $human['name'] !!}
                            <br>
                            <span class="tenders__status">{!! $human['role'] !!}</span>
                            <br>
                            <a href="{{generationPhoneLink($human['phone'])}}">{!! $human['phone'] !!}</a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <div class="tenders__more text text_large text_black mrgn35 pdng35-bottom">
            {!! get_field('tenders_links')['email_text'] !!}
            <a href="mailto:{{ get_field('tenders_links')['email'] }}">{!! get_field('tenders_links')['email'] !!}</a>
            <br>
            {!! get_field('tenders_links')['phone_text'] !!}
            <a href="{{ generationPhoneLink(get_field('tenders_links')['phone']) }}">{!! get_field('tenders_links')['phone'] !!}</a>
        </div>
    </div>
@endsection
