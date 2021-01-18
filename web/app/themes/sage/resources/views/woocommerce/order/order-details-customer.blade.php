<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<section class="woocommerce-customer-details">

	<?php if ( $show_shipping ) : ?>

	<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
		<div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">

	<?php endif; ?>

	<h2 class="woocommerce-column__title"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h2>

	<div class="woocommerce-customer-details__meta">
		<p class="name">
			ФИО: <span>{!! $order->get_billing_first_name()!!} {!! $order->get_billing_last_name()!!}</span>
		</p>
		@if ($order->get_billing_company())
			<p class="company">
				Организация: <span>{!! $order->get_billing_company() !!}</span>
			</p>
		@endif
		@if ($order->get_billing_address_1())
			<p class="addres">
				Адрес: <span>{!! $order->get_billing_country() !!}, {!! $order->get_billing_city() !!}, {!! $order->get_billing_address_1() !!}</span>
			</p>
		@endif
		

		<?php if ( $order->get_billing_phone() ) : ?>
			<p class="woocommerce-customer-details--phone">Телефон: <span>{!! $order->get_billing_phone() !!}</span></p>
		<?php endif; ?>

		<?php if ( $order->get_billing_email() ) : ?>
			<p class="woocommerce-customer-details--email">Email: <span>{!! $order->get_billing_email() !!}</span></p>
		<?php endif; ?>
	</div>

	<?php if ( $show_shipping ) : ?>

		</div><!-- /.col-1 -->

		<div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
			<h2 class="woocommerce-column__title"><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h2>
			<address>
				<?php echo wp_kses_post( $order->get_formatted_shipping_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>
			</address>
		</div><!-- /.col-2 -->

	</section><!-- /.col2-set -->

	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>
