<?php

/**
* Thankyou page
*
* This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.7.0
*/

defined('ABSPATH') || exit(); ?>

<div class="thankyou-block">
  <div class="woocommerce-order">

    @if ($order)
      @php do_action('woocommerce_before_thankyou', $order->get_id()) @endphp

      @if ($order->has_status('failed'))

        <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed">
          {!! esc_html_e('Unfortunately your order cannot be processed as the originating bank/merchant has declined
          your transaction. Please attempt your purchase again.', 'woocommerce') !!}
        </p>

        <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
          <a href="{!!  esc_url($order->get_checkout_payment_url()) !!}" class="button pay">{!! esc_html_e('Pay',
            'woocommerce') !!}</a>

          @if (is_user_logged_in())
            <a href="{!!  esc_url(wc_get_page_permalink('myaccount')) !!}" class="button pay">{!! esc_html_e('My
              account', 'woocommerce') !!}</a>
          @endif
        </p>

      @else

        <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
          Спасибо, ваш заказ был получен
        </p>

        <div class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
          <h2 class="woocommerce-order-details__title">{!! esc_html_e('Order details', 'woocommerce') !!}</h2>

          <p class="woocommerce-order-overview__order order">
            {!! esc_html_e('Order number:', 'woocommerce') !!}
            <strong>{!! $order->get_order_number() !!}</strong>
          </p>

          <p class="woocommerce-order-overview__date date">
            {!! esc_html_e('Date:', 'woocommerce') !!}
            <strong>{!! wc_format_datetime($order->get_date_created()) !!}</strong>
          </p>

          @if (is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email())
            <p class="woocommerce-order-overview__email email">
              {!! esc_html_e('Email:', 'woocommerce') !!}
              <strong>{!! $order->get_billing_email() !!}</strong>
            </p>
          @endif

          <p class="woocommerce-order-overview__total total">
            {!! esc_html_e('Total:', 'woocommerce') !!}
            <strong>{!! $order->get_formatted_order_total() !!}</strong>
          </p>

          @if ($order->get_payment_method_title())
            <p class="woocommerce-order-overview__payment-method method">
              {!! esc_html_e('Payment method:', 'woocommerce') !!}
              <strong>{!! wp_kses_post($order->get_payment_method_title()) !!}</strong>
            </p>
          @endif

          </div>

      @endif

      @php
    //   do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id());
      do_action('woocommerce_thankyou', $order->get_id());
      @endphp

    @else
      <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
        {!! apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been
        received.', 'woocommerce'), null) !!}
      </p>
    @endif

  </div>
</div>
