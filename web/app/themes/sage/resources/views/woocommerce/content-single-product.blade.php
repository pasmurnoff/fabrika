<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<span class="button callpopup" data-popup="consultation-modal">Consultation button is here</span>

<div class="consultation-modal">
    <div class="consultation-modal__close">@include("icon::cross")</div>
    <div class="consultation-modal__main">
        <div class="consultation-modal__title">Заявка на консультацию</div>
        <div class="consultation-modal__text">Не можете определиться с выбором? Мы поможем в режиме онлайн!<br>
            Закажи видео- или аудиоконсультацию по FaceTime или WhatsApp и мы вам перезвоним.<br>
            Консультации проводим с 10 до 20 по московскому времени.<br></div>
        <form class="form mrgn35" enctype="multipart/form-data" method="post">

            @component('components.form.elements.form-item', ['title' => 'Выберите тип консультации','class' => 'radio singlerow'])
                @slot('content')
                    @include('components.form.elements.radio', ['name' => 'Тип-связи', 'value' => 'Видеоконсультация из магазина Фабрика Носков'])
                    @include('components.form.elements.radio', ['name' => 'Тип-связи', 'value' => 'Аудиозвонок специалиста Фаюрика Носков', 'attr' => 'checked="checked"'])
                @endslot
            @endcomponent

                @component('components.form.elements.form-item', ['title' => 'Выберите приложение','class' => 'radio singlerow'])
                    @slot('content')
                        @include('components.form.elements.radio', ['name' => 'Приложение', 'value' => 'FaceTime'])
                        @include('components.form.elements.radio', ['name' => 'Приложение', 'value' => 'WhatsApp', 'attr' => 'checked="checked"'])
                    @endslot
                @endcomponent

            @component('components.form.elements.form-item2', ['title' => 'Ваше имя','class' => 'singlerow child__mrgn'])
                @slot('content')
                    @include('components.form.elements.input', [
                                'positionClass' => 'labelwrap_single',
                                'name' => 'Имя',
                                'label' => 'Иван Иванов',
                                 'attr' => 'required'])
                @endslot
            @endcomponent

            @component('components.form.elements.form-item2', ['title' => 'Ваш email','class' => 'singlerow child__mrgn'])
                @slot('content')
                    @include('components.form.elements.input', [
                                'positionClass' => 'labelwrap_single',
                                'name' => 'email',
                                'type' => 'email',
                                'label' => 'primer@mail.ru',
                                 'attr' => 'required'])
                @endslot
            @endcomponent

            @component('components.form.elements.form-item2', ['title' => 'Ваш телефон','class' => 'singlerow child__mrgn'])
                @slot('content')
                    @include('components.form.elements.input', [
                                'positionClass' => 'labelwrap_single',
                                'name' => 'Телефон',
                                'type' => 'tel',
                                'label' => '+7 (999) 999-99-99',
                                 'attr' => 'required'])
                @endslot
            @endcomponent

            @include('components.form.elements.privacy', ['submit' => 'Отправить заявку'])
            <div id="result_form"></div>
        </form>
    </div>
</div>



<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

    <?php
    /**
     * Hook: woocommerce_before_single_product_summary.
     *
     * @hooked woocommerce_show_product_sale_flash - 10
     * @hooked woocommerce_show_product_images - 20
     */
    do_action('woocommerce_before_single_product_summary');
    ?>

    <div class="product__summary summary entry-summary">
        <?php
        /**
         * Hook: woocommerce_single_product_summary.
         *
         * @hooked woocommerce_template_single_title - 5
         * @hooked woocommerce_template_single_rating - 10
         * @hooked woocommerce_template_single_price - 10
         * @hooked woocommerce_template_single_excerpt - 20
         * @hooked woocommerce_template_single_add_to_cart - 30
         * @hooked woocommerce_template_single_meta - 40
         * @hooked woocommerce_template_single_sharing - 50
         * @hooked WC_Structured_Data::generate_product_data() - 60
         */
        do_action('woocommerce_single_product_summary');
        ?>
    </div>
    <?php do_action('custom_woocommerce_after_summary'); ?>
    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action('woocommerce_after_single_product_summary');
    ?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>

