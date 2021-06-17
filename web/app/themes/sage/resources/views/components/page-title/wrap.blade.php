@if( is_front_page() )
    @php $title = get_field('main_title'); @endphp
@elseif(!is_product())
    @php $title =  App::title(); @endphp
@endif

@if(is_singular('city'))
    @php $title = pll__('Носки оптом в ') . ' ' . get_field('city-rod') . pll__(' – Фабрика носков в ') . ' ' . get_field('city-rod'); @endphp
@endif

@if (isset($title))
    @include('components.title.title', ['classes' => 'title_huge title_main', 'title' => $title])
@endif