<div class="stories__item">
    <a href="{{ $href or '' }}" target="_blank">
        <div class="stories__card-container"
             style="background-color: {{ $bgc or '' }};">
            <div class="stories__card-img">
                <img src="{{ $img or '' }}" alt="{{ $alt or '' }}">
            </div>

            <div class="stories__card-title" style="color:{{ $textColor or 'white' }}">{{ $text or ''}}</div>
            @if(isset($btnText))
                <div class="stories__card-btn"
                     style="background-color: {{ $btnColor or '' }}">
                    {{ $btnText }}
                </div>
            @endif
        </div>
    </a>
</div>
