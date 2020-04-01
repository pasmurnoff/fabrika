<!doctype html>
<html {!! get_language_attributes() !!}>
@include('components.head')
<body {{ body_class() }}>
<div class="wrap">
    @php do_action('get_header') @endphp
    @include('components.header')
    <div class="container">

        @if( is_front_page() )
            @php $title = 'Носки и колготки оптом. Продажа и изготовление на заказ.'; @endphp
        @elseif(!is_product())
            @php $title =  App::title(); @endphp
        @endif

        @if (isset($title))
            @include('components.title.title', ['classes' => 'title_huge title_main', 'title' => $title])
        @endif
        @php
            if (!is_front_page() && !is_product()) {
              if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
              } else {
                echo 'no';
              }
            } elseif(is_product()) {
                function_exists('yoast_breadcrumb') ? yoast_breadcrumb('<p class="breadcrumbs breadcrumbs_mrgn15-top">', '</p>') : '';
            }
        @endphp
        <div class="content">
            @yield('content')
        </div>
    </div>

    @php do_action('get_footer') @endphp

    @include('components.footer.footer')
    @php wp_footer() @endphp
</div>
<div class="overlay"></div>
</body>
</html>
