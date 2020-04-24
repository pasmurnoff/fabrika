export default function miniCart() {
    jQuery(function ($) {
        /* eslint-disable */
        $('.input-text.qty.text').bind('keyup mouseup', function () {
            var value = $(this).val();
            $('.product_quantity').val(value)
        });

        if (typeof wc_add_to_cart_params === 'undefined')
            return false;

        $(document).on('click', '.ajax_add_to_cart', function (e) {
            e.preventDefault();
            var $thisbutton = $(this);
            var $variation_form = $(this).closest('.variations_form');
            var var_id = $variation_form.find('input[name=variation_id]').val();
            $('.ajaxerrors').remove();
            var item = {},
                check = true;
            var variations = $variation_form.find('select[name^=attribute]');
            if (!variations.length) {
                variations = $variation_form.find('[name^=attribute]:checked');
            }
            if (!variations.length) {
                variations = $variation_form.find('input[name^=attribute]');
            }
            variations.each(function () {
                var $this = $(this),
                    attributeName = $this.attr('name'),
                    attributevalue = $this.val(),
                    index,
                    attributeTaxName;
                $this.removeClass('error');
                if (attributevalue.length === 0) {
                    index = attributeName.lastIndexOf('_');
                    attributeTaxName = attributeName.substring(index + 1);
                    $this
                        .addClass('required error')
                        .before('<div class="ajaxerrors"><p>Please select ' + attributeTaxName + '</p></div>')
                    check = false;
                } else {
                    item[attributeName] = attributevalue;
                }
            });
            if (!check) {
                return false;
            }

            if ($thisbutton.is('.ajax_add_to_cart')) {
                $thisbutton.removeClass('added');
                $thisbutton.addClass('loading');
                var product_id = $variation_form.find('input[name=product_id]').val();
                var quantity = $variation_form.find('input[name=quantity]').val();
                var data = {
                    action: 'bodycommerce_ajax_add_to_cart_woo',
                    product_id: product_id,
                    quantity: quantity,
                    variation_id: var_id,
                    variation: item,
                };

                $('body').trigger('adding_to_cart', [$thisbutton, data]);
                $.post(wc_add_to_cart_params.ajax_url, data, function (response) {
                    if (!response)
                        return;
                    var this_page = window.location.toString();
                    this_page = this_page.replace('add-to-cart', 'added-to-cart');
                    if (response.error && response.product_url) {
                        window.location = response.product_url;
                        return;
                    }
                    if (wc_add_to_cart_params.cart_redirect_after_add === 'yes') {
                        window.location = wc_add_to_cart_params.cart_url;
                        return;
                    } else {
                        $thisbutton.removeClass('loading');
                        var fragments = response.fragments;
                        var cart_hash = response.cart_hash;
                        if (fragments) {
                            $.each(fragments, function (key) {
                                $(key).addClass('updating');
                            });
                        }
                        $thisbutton.addClass('added');
                        if (fragments) {
                            $.each(fragments, function (key, value) {
                                $(key).replaceWith(value);
                            });
                        }
                        if (!$thisbutton.hasClass('checkout-button')) {
                            $('.mini-cart').addClass('active');
                            $('.overlay').addClass('active');
                        } else {
                            window.location.href = window.wp_data.checkout_url;
                        }
                    }
                });
                return false;
            } else {
                return true;
            }
        });
        /* eslint-enable */

        /* mini-cart close */
        $('.closeminicart').on('click', function () {
            const block = $(this).data('minicart');
            $('.' + block).removeClass('active');
            $('.overlay').removeClass('active');
        });
    });
}