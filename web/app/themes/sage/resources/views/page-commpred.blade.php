{{--
Template Name: Коммерческое предложение
--}}

@extends('layouts.app')

@section('content')

    @include('components.banner.wrap')

    @include('components.сommercial-offer.wrap', ['page_id' => get_the_ID()] )

@endsection
