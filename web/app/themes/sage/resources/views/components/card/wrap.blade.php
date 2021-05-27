<div class="card">
    <div class="card__top" style="background-color: {{ $bgc or ''}}">
        <div class="card__img">{{ $img or '' }}</div>
    </div>
    <div class="card__bottom">
        <h3 class="title title_middle pdng15-bottom">{{ $title or '' }}</h3>
        <div class="text pdng15-bottom">{{ $text or '' }}</div>
        <a class="button" href="{{ $href or '#' }}">{{ $buttonText or '' }}</a>
    </div>
</div>