<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if (!defined('ABSPATH')) {
    exit;
}

?>
<form role="search" method="get" class="search woocommerce-product-search pdng15-top"
      action="<?php echo esc_url(home_url('/')); ?>">
    <div class="labelwrap">
        <label class="screen-reader-text search__label"
               for="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>"></label>
        <input class="search__input input" type="search"
               id="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>"
               class="search-field"
               value="<?php echo get_search_query(); ?>" name="s" placeholder="Найти..."/>
        <button class="search__button" type="submit">@include('icon::common.search-regular')</button>
        <input type="hidden" name="post_type" value="product"/>
    </div>
</form>
