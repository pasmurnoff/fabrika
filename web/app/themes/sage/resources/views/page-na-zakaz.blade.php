{{--
  Template Name: Носки на заказ
--}}
@extends('layouts.app')

@section('content')
    @php
        $page_id = get_the_ID();
    @endphp

    @include('components.price-filter.wrap', ['page_id' => $page_id])
    @include('components.blocks.zakaz.wrap', ['page_id' => $page_id])
    @include('components.banner.wrap', ['field_slug' => 'na_zakaz_banner1'])
    @include('components.individualsocks', ['page_id' => $page_id, 'classes' => 'pdng35'])
    @include('components.banner.wrap', ['field_slug' => 'na_zakaz_banner2'])

    <div class="the-content pdng15-bottom">
        {!! get_field('na_zakaz_content', $page_id) !!}
    </div>

    @include('components.block-additional.additional', ['page_id' => $page_id])

    @include('components.whyus.whyus', ['page_id' => $page_id])

    @include('components.workorder.workorder')

    @include('components.form.default', ['title' => pll__('Бесплатная консультация по поставке и производству')])

    @include('components.tables.table')

    @include('components.workyears.workyears')

    <div class="title title_large">{{ pll__('Доставляем носки, колготки и прочие грузы') }}:</div>
    <img class="partner-image" src="@asset('images/defaultpages/dostavka_noski_kolgotki.jpg')"
         alt="{{ pll__('Доставляем носки, колготки и прочие грузы') }}">

    @include('components.сommercial-offer.wrap', ['page_id' => get_the_ID()] )

@endsection
