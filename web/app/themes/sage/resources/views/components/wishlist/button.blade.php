@php
  $productID = isset($productID) ? $productID : false;
  $issetIconClasses = isset($iconClasses) ? $iconClasses : "";
@endphp

@if ($productID)
  <button
    class="wishlist__like {{ checkIfProductInWishlist($productID) ? 'added' : 'deleted' }} {{ $buttonClasses or '' }}"
    data-product-id="{{ $productID }}"
    @isset($parentClass)
      data-parent="{{ $parentClass }}"
    @endisset
  >
    @include('icon::/panel/heart', ['iClasses' => 'wishlist__like-icon '. $issetIconClasses .''])
  </button>
@endif
