<div class="panel__item">
    <a class="panel__cart panel__link" href="@php  echo wc_get_cart_url() @endphp">
        <i class="panel__icon">@include('icon::panel.cart')</i>
        @include('components.cart.counter')
    </a>
</div>