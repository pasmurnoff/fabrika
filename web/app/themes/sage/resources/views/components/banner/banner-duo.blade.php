<div class="banner__wrapper banner__wrapper_duo {{ $class or '' }}">
    @foreach(get_field('main_cards', get_option( 'page_on_front' )) as $card)
        @include('components.banner.duo-item', [
            'title' => $card['title'],
            'text' => $card['descr'],
            'buttonText' => $card['button_text'],
            'href' => $card['button_link'],
            'icon' => $card['icon']
        ])
    @endforeach
</div>
