<div class="afisha__item-wrap afisha-hasbg"
     style="background-color: {{ $color or 'transparent' }}">
    <a href="{{ $href or '#' }}" class="afisha__item">
        <div class="afisha__img">
            {{$icon or ''}}
        </div>
        <div class="afisha__text text text_bold text_white">{{ $text or '' }}</div>
    </a>
</div>