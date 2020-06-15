<?php
remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);
add_action('woocommerce_after_checkout_form', 'woocommerce_checkout_coupon_form');