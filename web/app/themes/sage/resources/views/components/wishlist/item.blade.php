@if (isset($product))
  <div class="wishlist-block__item">
    <div class="wishlist-block__item-remove">
      <button data-parent="wishlist-block__item" data-product-id="{!! $product->get_id() !!}" class="wishlist-block__item-remove-btn"></button>
    </div>
    <div class="wishlist-block__item-content">
      <img src="{!!  wp_get_attachment_image_src($product->get_image_id(), 'full')[0] !!}" alt="{!!  $product->get_name() !!}">
      <h4 class="wishlist-block__item-name">{!! $product->get_name() !!}</h4>
    </div>
    <div class="wishlist-block__item-price">
      {!! $product->get_price() !!} {!! get_woocommerce_currency_symbol() !!}
    </div>
    <div class="wishlist-block__item-status">
      {!! $product->get_stock_status() == 'instock' ? 'В наличии' : 'Нет в наличии' !!}
    </div>
    <div class="wishlist-block__item-buy">
      <a href="{!!  get_permalink($product->get_id()) !!}" class="button">Купить</a>
    </div>
  </div>
@endif
