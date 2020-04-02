<div class="banner banner_single {{ $classes or '' }}">
    <div class="banner__inner">
        <div class="banner__side banner__side_left">
            <div class="banner__cont-wrap">
                <div class="banner__title title title_large">{{ $title or '' }}</div>
                <div class="banner__text">{{ $text or '' }}</div>
            </div>
            <a href="{{ $href or '#'}}" class="button banner__button">{{ $buttonText or '' }}</a>
        </div>
        <div class="banner__side banner__side_right">
            <div class="banner__icon">{{ $icon or ''}}</div>
        </div>
    </div>
</div>
