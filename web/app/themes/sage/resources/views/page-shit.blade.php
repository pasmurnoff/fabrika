{{--
Template Name: dontuse
--}}

@extends('layouts.app')
@section('content')
  @php
    $loop = new WP_Query([
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC'
        ]);
    $increment = 1;
    $template = '00000';
  @endphp

  @while ( $loop->have_posts() )
    @php
        $loop->the_post();
        $productID = get_the_ID();
        $productSku = get_post_meta($productID, '_sku', true);
        $productAttr = get_post_meta($productID, '_fabric_id', true);
        //update_post_meta($productID, '_fabric_id', $productSku);
        $stringIncrement = strval($increment);
        $newSKU =  substr_replace($template, $stringIncrement, -strlen($stringIncrement));
        // update_post_meta($productID, '_sku', $newSKU);
        $increment++;
    @endphp
  @endwhile

@endsection
