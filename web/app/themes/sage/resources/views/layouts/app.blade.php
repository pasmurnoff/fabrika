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
        @else
            @php $title =  App::title(); @endphp
        @endif


        @include('components.title.title', ['classes' => 'title_huge title_main', 'title' => $title])
        @php
            if (!is_front_page()) {
              if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
              } else {
                echo 'no';
              }
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
</body>
</html>
