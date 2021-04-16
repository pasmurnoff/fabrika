<div class="banner banner_single {{ $classes or '' }}">
    <div class="banner__inner">
        <div class="banner__side banner__side_left">
            <div class="banner__cont-wrap">
                <div class="banner__title title title_large">{{ $title or '' }}</div>
                @isset($text)
                    <div class="banner__text">{{ $text or '' }}</div>
                @endisset
            </div>
            @if(!empty($buttons))
                <div class="banner__btn-wrap">
                    @foreach($buttons AS $button)
                        <a href="{{ $button['link']['url'] or '#'}}" class="button banner__button">{{ $button['link']['title'] or '' }}</a>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="banner__side banner__side_right">
            <div class="banner__icon">{{ $icon or ''}}</div>
        </div>
    </div>
</div>
