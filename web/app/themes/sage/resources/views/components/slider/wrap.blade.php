<section class="slider-big">
    <div class="slider-big__slider">
        @if(get_field('main_slides'))
            @foreach(get_field('main_slides') as $item)
                <div class="slider-big__slide">
                    <a href="{{ $item['link'] }}">
                        <picture class="slider-preview__item-picture">
                            <source srcset="{{ $item['image_mobile']['url'] }}" media="(max-width: 767px)">
                            <img src="{{ $item['image']['url'] }}" alt="{{ $item['title'] }}" class="slider-big__image">
                        </picture>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="slider-big__arrow slider-big__arrow-left">
        @include('icon::slider/arrow-right')
    </div>
    <div class="slider-big__arrow slider-big__arrow-right">
        @include('icon::slider/arrow-right')
    </div>
</section>