<?php
/**
 * Order Item Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-item.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
	return;
}
?>
<div class="{!! esc_attr( apply_filters( 'woocommerce_order_item_class', 'woocommerce-table__line-item order_item', $item, $order ) ) !!}">

  <img src="{!! wp_get_attachment_image_src( get_post_thumbnail_id( $item->get_product_id() ), 'single-post-thumbnail' )[0] !!}" alt="{!! $item->get_name() !!}">

  @php
    $is_visible        = $product && $product->is_visible();
    $product_permalink = apply_filters( 'woocommerce_order_item_permalink', $is_visible ? $product->get_permalink( $item ) : '', $item, $order );
  @endphp
  
  {!! apply_filters( 'woocommerce_order_item_name', $product_permalink ? sprintf( '<a class="woocommerce-table__product-name product-name" href="%s">%s</a>', $product_permalink, $item->get_name() ) : $item->get_name(), $item, $is_visible ) !!}
  
  <div class="woocommerce-table__product-qty">
    @php
      $qty = $item->get_quantity();
		  $refunded_qty = $order->get_qty_refunded_for_item( $item_id );
    @endphp

		@if ( $refunded_qty )
			@php
        $qty_display = '<del>' . esc_html( $qty ) . '</del> <ins>' . esc_html( $qty - ( $refunded_qty * -1 ) ) . '</ins>';
      @endphp
		@else
			@php
        $qty_display = esc_html( $qty );
      @endphp
		@endif
    Количество: <span>{!! $qty_display !!}</span>
  </div>
  <div class="woocommerce-table__product-meta">
    @php
      do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order, false );
    @endphp

		{!! wc_display_item_meta( $item ) !!}

		@php
      do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order, false );
    @endphp
  </div>
  <div class="subtotal">
    {!! $order->get_formatted_line_subtotal( $item ) !!}
  </div>
</div>

@if ( $show_purchase_note && $purchase_note )
  <div class="woocommerce-table__product-purchase-note product-purchase-note">
    <div colspan="2">{!! wpautop( do_shortcode( wp_kses_post( $purchase_note ) ) ) !!}</div>
  </div>
@endif
