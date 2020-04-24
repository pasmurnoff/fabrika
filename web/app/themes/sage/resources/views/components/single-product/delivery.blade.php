@php
    function get_delivery_date($type_of_delivery)
    {
        $months = [
            'января',
            'февраля',
            'марта',
            'апреля',
            'мая',
            'июня',
            'июля',
            'августа',
            'сентября',
            'октября',
            'ноября',
            'декабря'
        ];

        date_default_timezone_set('Europe/Moscow');
        $month = date('n') - 1;
        $current_time = strtotime(date('G:i:s'));

        $date = date('Y-m-d');
        $pickup_date = $min_date = date('d', strtotime("+3 days", strtotime($date)));
        $min_date = date('d', strtotime("+4 days", strtotime($date)));
        $middle_date = date('d', strtotime("+5 days", strtotime($date)));
        $max_date = date('d', strtotime("+6 days", strtotime($date)));
        $delivery = ($current_time > strtotime('19:00:00')) ? $middle_date . '-' . $max_date . ' ' . $months[$month] : $min_date . '-' . $middle_date . ' ' . $months[$month];
        $pickup = ($current_time > strtotime('19:00:00')) ? $min_date . ' ' . $months[$month] : $pickup_date . ' ' . $months[$month];

        echo ($type_of_delivery == 'delivery') ? $delivery : $pickup;

    }

@endphp

<div class="product__delivery mrgn35">
    <div class="text text_bold pdng5-bottom">Доставка</div>
    <p class="delivery__city title">В Казань</p>
    <ul class="delivery__items">
        @php
            global $product;
            $availability = $product->get_availability();
            $instock =  empty( $availability['availability']) ? true : false ;
        @endphp

        <li class="delivery__item pdng5-top mrgn15-bottom @php echo  $instock ? '' : 'out-of-stock' @endphp">
            @include('icon::single-product.instock')
            <span class="text delivery__item-details">@php echo  $instock ? 'Есть в наличии' : 'Нет в наличии'  @endphp</span>
        </li>

        <li class="delivery__item mrgn15-bottom">
            @include('icon::single-product.car')
            <span class="text delivery__item-details">Доставка</span>
            <span class="text delivery__date">@php get_delivery_date('delivery'); @endphp</span>
        </li>
        <li class="delivery__item mrgn15-bottom">
            @include('icon::single-product.box')
            <span class="text delivery__item-details">Самовывоз</span>
            <span class="text delivery__date">@php get_delivery_date('pickup'); @endphp</span>
        </li>
    </ul>
</div>
