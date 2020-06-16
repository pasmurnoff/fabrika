<?php
// the ajax function
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');
function data_fetch()
{

    $the_query = new WP_Query([
        'posts_per_page' => 20,
        's' => esc_attr($_POST['keyword']),
        'post_type' => 'product',
        "meta_query" => [
            "key" => "_sku",
            "value" => esc_attr($_POST['keyword']),
            "compare" => "LIKE"
        ]
    ]);

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()): $the_query->the_post();
            $link = get_post_permalink();
            $id = get_the_ID();
            $sku = get_post_meta($id, '_sku', true);
            $price = get_post_meta($id, '_price', true);
            $title = get_the_title();
            $img = get_the_post_thumbnail('', 'thumb');
            ?>


            <li class="search__item">
                <a class="search__link text_link" href="<?php echo $link ?>">
                    <div class="search__item-wrap">
                        <div class="search__img">
                            <?php echo $img ?>
                        </div>
                        <div class="search__content">
                            <h3 class="text text_bold text_middle search__title"><?php echo $title ?></h3>
                            <div class="search__attr">
                                <span class="text_bold text_middle search__price"><?php echo $price ?> руб.</span>
                                <span class="search__sku">Артикул: <?php echo $sku ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>

        <?php endwhile;
        wp_reset_postdata();
    else: echo '<div class="text text_bold text_middle text_grey search__nofind">По данному запросу товаров не найдено</div>';
    endif;

    die();
}
