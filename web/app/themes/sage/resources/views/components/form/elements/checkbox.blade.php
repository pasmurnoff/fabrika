<label class="checkbox__label checkbox__label_checkbox text text_black">
    <span class="checkbox__text">{{ $value or '' }}</span>
    <input class="checkbox__item" type="checkbox" {{ $attr or '' }} name="{{ $name or '' }}[]" value="{{ $value or '' }}"/>
    <span class="checkbox__checked checkbox__checked_checkbox"></span>
</label>