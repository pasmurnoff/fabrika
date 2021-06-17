<!doctype html>
<html {!! get_language_attributes() !!}>
@include('components.head')
<body {{ body_class('preload') }}>
<div class="wrap">
  @php do_action('get_header') @endphp
  @include('components.header.wrap')
  @php get_template_part('functions/watched') @endphp

  <div class="container">
    @include('components.page-title.wrap')

    @php
      if (!is_front_page() && !is_product()) {
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
        } else {
          echo 'no';
        }
      } elseif(is_product()) {
          the_title('<h1>','</h1>');
          function_exists('yoast_breadcrumb') ? yoast_breadcrumb('<p class="breadcrumbs breadcrumbs_mrgn15-top">', '</p>') : '';
      }
    @endphp

    <div class="content">
      @yield('content')
    </div>
  </div>
  @if(is_dynamic_sidebar('cart-sidebar'))
    @php dynamic_sidebar( 'cart-sidebar' ); @endphp
  @endif
  @php do_action('get_footer') @endphp

  @include('components.footer.footer')


  @php wp_footer() @endphp
</div>
<div class="overlay"></div>
</body>
</html>
