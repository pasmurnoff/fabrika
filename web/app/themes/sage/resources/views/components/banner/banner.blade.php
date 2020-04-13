<div class="banner banner_single {{ $classes or '' }}">
    <div class="banner__inner">
        <div class="banner__side banner__side_left">
            <div class="banner__cont-wrap">
                <div class="banner__title title title_large">{{ $title or '' }}</div>
                @isset($text)
                    <div class="banner__text">{{ $text or '' }}</div>
                @endisset
            </div>
            @if(isset($href2))
                <div class="banner__btn-wrap">
                    <a href="{{ $href or '#'}}" class="button banner__button">{{ $buttonText or '' }}</a>
                    <a href="{{ $href2 }}" class="button banner__button">{{ $buttonText2 or '' }}</a>
                </div>
            @else
                <a href="{{ $href or '#'}}" class="button banner__button">{{ $buttonText or '' }}</a>
            @endif
        </div>
        <div class="banner__side banner__side_right">
            <div class="banner__icon">{{ $icon or ''}}</div>
        </div>
    </div>
</div>
