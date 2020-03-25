<div class="header__bottom">
  @include('common.logo')

  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'items_wrap' => '<ul class="%2$s">%3$s</ul>', 'menu_class' => 'menu menu_inline' ]) !!}
  @endif

  @include('components.header.wooitems')
</div>
