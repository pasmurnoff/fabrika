<div class="mrgn35 banner banner_simple {{ $classes or '' }}">
    <a href="{{ $href or '#'}}" class="banner__inner">
        <div class="banner__side banner__side_left">
            <div class="banner__cont-wrap">
                <div class="banner__title title title_large">{{ $title or '' }}</div>
            </div>
        </div>
        <div class="banner__side banner__side_right">
            <div class="button banner__button">{{ $buttonText or '' }}</div>
        </div>
    </a>
</div>
