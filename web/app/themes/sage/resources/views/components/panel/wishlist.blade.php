<div class="panel__item">
    <a class="panel__wishlist panel__link" href="@php echo YITH_WCWL()->get_wishlist_url() @endphp">
        <i class="panel__icon">@include('icon::panel.heart')</i>
        @include('components.wishlist.counter')
    </a>
</div>