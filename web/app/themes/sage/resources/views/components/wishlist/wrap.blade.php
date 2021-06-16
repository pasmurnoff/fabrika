<section class="section wishlist-block">
    @if ($products)
        <div class="wishlist-block__header">
            <div class="wishlist-block__header-item wishlist-block__header-item_name">{!! pll__('Название товара') !!}</div>
            <div class="wishlist-block__header-item wishlist-block__header-item_price">{!! pll__('Цена') !!}</div>
            <div class="wishlist-block__header-item wishlist-block__header-item_status">{!! pll__('Статус') !!}</div>
        </div>
        <div class="wishlist-block__items">
            @php
                $products = wc_get_products([
                  'include' => $products,
                  'limit' => -1,
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