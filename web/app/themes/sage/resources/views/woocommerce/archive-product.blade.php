{{--
The Template for displaying product archives, including the main shop page which is a post type archive
This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
HOWEVER, on occasion WooCommerce will need to update template files and you
(the theme developer) will need to copy the new files to your theme to
maintain compatibility. We try to do this as little as possible, but it does
happen. When this occurs the version of the template file will be bumped and
the readme will list any important changes.
@see https://docs.woocommerce.com/document/template-structure/
@package WooCommerce/Templates
@version 3.4.0
--}}

@extends('layouts.app')

@section('content')
  @php
    do_action('get_header', 'shop');
    do_action('woocommerce_before_main_content');
  @endphp

  @if(apply_filters('woocommerce_show_page_title', true))
    <h1 class="woocommerce-products-header__title page-title">{!! woocommerce_page_title(false) !!}</h1>
  @endif

  @php do_action('custom_woocommerce_before_sidebar') @endphp

  @if(is_dynamic_sidebar('filter-sidebar'))
    @include('components.filter.filter')
  @endif

  <div class="archive__content">

    {{--  @if (function_exists('dynamic_sidebar'))
          @php dynamic_sidebar('tags-cloud') @endphp
      @endif--}}
    @include('components.tags.wrap')

    @if(woocommerce_product_loop())
      @php
        do_action('woocommerce_before_shop_loop');
        woocommerce_product_loop_start();
      @endphp

      @if(wc_get_loop_prop('total'))
        @while(have_posts())
          @php
            the_post();
            do_action('woocommerce_shop_loop');
            wc_get_template_part('content', 'product');
          @endphp
        @endwhile
      @endif

      @php
        woocommerce_product_loop_end();
        do_action('woocommerce_after_shop_loop');
      @endphp
    @else
      @php
        do_action('woocommerce_no_products_found');
      @endphp
    @endif

  </div>
  <div class="archive__description">
    <div class="archive__form">
      @include('components.form.default', ['title' => 'Бесплатная консультация по поставке и производству', 'submit' => 'Отправить'])
    </div>
    @php
      do_action('woocommerce_archive_description');
    @endphp
  </div>

  {{-- Если не найдены товары --}}
      @if (!have_posts())
        @php
          $productCategories = get_terms([
              'taxonomy' => "product_cat",
              'orderby' => 'count',
              'parent' => 0
          ])
        @endphp
        @foreach($productCategories as $prodCat)
          <div class="category-output">
            @include('components.category-output.title')
            @include('components.category-output.list' , ['overflow' => '', 'count' => 10])
          </div>
        @endforeach
      @endif
  {{-- Если не найдены товары --}}
  @php
    do_action('woocommerce_after_main_content');
    do_action('get_sidebar', 'shop');
    do_action('get_footer', 'shop');
  @endphp
@endsection
