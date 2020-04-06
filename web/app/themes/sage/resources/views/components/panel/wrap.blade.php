<div class="panel panel_logout">
    <div class="panel__items">
        <div class="panel__item">
            <div class="panel__wishlist">
                @include('components.wishlist.counter')
            </div>
        </div>
        <div class="panel__item">
            @include('components.cart.counter')
        </div>
        <a href="#" class="button">Войти</a>
    </div>
</div>