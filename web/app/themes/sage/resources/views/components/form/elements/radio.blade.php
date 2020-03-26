<label class="radio__label text text_black">
    <span class="radio__text">{{ $value or '' }}</span>
    <input class="radio__item" type="radio" {{ $attr or '' }} name="{{ $name or '' }}[]" value="{{ $value or '' }}"/>
    <span class="radio__checked radio__checked_radio"></span>
</label>