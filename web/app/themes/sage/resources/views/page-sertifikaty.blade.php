{{--
Template Name: Сертификаты
--}}

@extends('layouts.app')
@section('content')

    @include('components.thumbnail.wrap')

    @include('components.gallery.files', ['files' => get_field( 'files_gallery', get_the_ID() ), 'class' => 'mrgn35-bottom'])

    @include('components.writeus.writeus')

@endsection
