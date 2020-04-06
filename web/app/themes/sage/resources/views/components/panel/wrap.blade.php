<div class="panel panel_logout">
    <div class="panel__items">
        <div class="panel__item">
            <?php $wishlist_count = YITH_WCWL()->count_products(); ?>
            <span class="your-counter-selector"><?php echo $wishlist_count; ?></span>
        </div>
        <div class="panel__item">
            <span class="panel__cart"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </div>
        <a href="#" class="button">Войти</a>
    </div>
</div>