@php
  $wishlist = get_permalink(get_page_by_title( __('Список желаний', 'sage') )->ID);
@endphp

<div class="panel__item">
  <a class="panel__wishlist panel__link" href="{!! $wishlist !!}">
    <i class="panel__icon">@include('icon::panel.heart', ['iClasses' => 'panel__icon_heart'])</i>
    @include('components.wishlist.counter')
  </a>
</div>