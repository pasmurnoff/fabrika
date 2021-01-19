<section class="section wishlist-block">
  @if ($products)
    <div class="wishlist-block__header">
      <div class="wishlist-block__header-item wishlist-block__header-item_name">Название товара</div>
      <div class="wishlist-block__header-item wishlist-block__header-item_price">Цена</div>
      <div class="wishlist-block__header-item wishlist-block__header-item_status">Статус</div>
    </div>
    <div class="wishlist-block__items">
      @php
        $products = wc_get_products([
          'include' => $products,
        ])
      @endphp

      @foreach ($products as $product)
        @php setup_postdata($product); @endphp
        {{-- include here product card --}}
        @include('components.wishlist.item')
      @endforeach
      @php wp_reset_postdata() @endphp
    </div>
  @else
    @include('components.wishlist.empty')
  @endif
</section>