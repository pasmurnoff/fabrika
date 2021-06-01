{{--
Template Name: Карта сайта
--}}
@php
    $posts = get_posts( [
      'post_type'   => 'page',
      'exclude'     => [
        $post->ID,
      ],
      'orderby'     => 'title',
      'order'       => 'ASC',
      'numberposts' => -1
    ]);

    $cities = get_posts( [
      'post_type'   => 'city',
      'exclude'     => [
        $post->ID,
      ],
      'orderby'     => 'title',
      'order'       => 'ASC',
      'numberposts' => -1
    ]);


    $wooCategories = get_categories([
      'taxonomy'     => 'product_cat',
      'orderby'      => 'name',
      'show_count'   => false,
      'pad_counts'   => false,
      'hierarchical' => true,
      'title_li'     => '',
      'hide_empty'   => false,
      'exclude'      => [
        15
      ]
    ]);

    $cityPages = [];
    $allPages = [];

    foreach( $posts as $post ) {
      $checkCity = false;
      $temp = explode("\n", get_the_title() );
      foreach ($temp as $value) {
        if(strpos($value, 'Фабрика носков в') !== false) {
          $cityPages[] = $post;
          $checkCity = true;
        }
      }
      if ( !$checkCity ) {
        $allPages[] = $post;
      }
    }

    function countPages( array $pages ): int {
      $numPages = count($pages);
      $numPages = round($numPages/4);
      foreach ( $pages as $page ) {

      }
      return $numPages;
    }
    function findParent( array $arrayPosts, int $cats ): string {
      $parentSlug = '';

      foreach ( $arrayPosts as $wooCat ) {
        if ( $wooCat->term_id == $cats ) {
          $parentSlug = $wooCat->slug;
        }
      }

      return $parentSlug;
    }

    wp_reset_postdata();
@endphp

@extends('layouts.app')
@section('content')
    <div class="sitemap">
        <div class="sitemap__section">
            <div class="title title_middle sitemap__title">{{ pll__('Страницы') }}:</div>
            <div class="sitemap__block sitemap__all">
                @php
                    foreach ($allPages as $page) {
                      echo '<a href="' . get_permalink($page->ID) . '" class="sitemap__single">' . get_the_title($page->ID) . '</a>';
                    }
                @endphp
            </div>
        </div>
        @if(get_bloginfo('language') == 'ru-RU')
            <div class="sitemap__section">
                <div class="title title_middle sitemap__title">Фабрика носков по городам:</div>
                <div class="sitemap__block sitemap__cities">
                    @php
                        foreach ($cities as $city) {
                          echo '<a href="' . get_permalink($city->ID) . '" class="sitemap__single">' . get_the_title($city->ID) . '</a>';
                        }
                    @endphp
                </div>
            </div>
        @endif
        <div class="sitemap__section">
            <div class="title title_middle sitemap__title">{{ pll__('Магазин') }}:</div>
            <div class="sitemap__block sitemap__woo">
                @php
                    foreach ($wooCategories as $wooCat) {
                      $catLink = get_category_link( $wooCat->cat_ID );
                      echo '<a href="' . $catLink . '" class="sitemap__single">' . $wooCat->name . '</a>';
                    }
                @endphp
            </div>
        </div>
    </div>

    @if(current_user_can('level_10'))
        @php
            $pages = get_posts( [
                'numberposts'  => '-1',
                'post_type'    => 'page',
                'post_status'  => 'publish',
            ] );
        @endphp
        <table border="1" style="width:100%;">
        @foreach($pages as $page)
                @php
                    $page_en = pll_get_post($page->ID, 'en');
                @endphp
                <tr style="padding: 5px;">
                    <td><a href="{{ get_permalink($page->ID) }}">{!! $page->post_title !!}</a></td>
                    <td>{!! get_post_meta($page->ID, '_wp_page_template', true) !!}</td>
                    @if($page_en)
                        <td><a href="{{ get_permalink($page_en) }}">{!! get_the_title($page_en) !!}</a></td>
                        <td>{!! get_post_meta($page_en, '_wp_page_template', true) !!}</td>
                        <td>{!! get_post_meta($page->ID, '_wp_page_template', true) != get_post_meta($page_en, '_wp_page_template', true) ? 'ОШИБКА' : 'все норм' !!}</td>
                    @else
                        <td></td>
                        <td></td>
                        <td>пусто</td>
                    @endif
                </tr>
        @endforeach
        </table>
    @endif

@endsection
