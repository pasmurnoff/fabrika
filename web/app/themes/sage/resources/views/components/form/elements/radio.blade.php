<label class="radio__label text text_black">
    {{ $value or '' }}
    <input class="radio__item" type="radio" {{ $attr or '' }} name="{{ $name or '' }}[]" value="{{ $value or '' }}"/>
    <span class="radio__checked radio__checked_radio"></span>
</label>