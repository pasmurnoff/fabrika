{{--
Template Name: Список желаний
--}}
@extends('layouts.app')

@php
  $products = [];

  if (is_user_logged_in()) {
    $products = getUserList();
  } else if(!is_user_logged_in() && isset($_COOKIE['wishlist']) && $_COOKIE['wishlist'] !== '') {
    $products = explode(',', $_COOKIE['wishlist']);
  }
@endphp

@section('content')
  @include('components.wishlist.wrap')
@endsection
