{{--
$positionClass:
Выберите класс `labelwrap_single`, чтобы разместить поле в одну строку.
Выберите класс `labelwrap_dual`, чтобы разместить два элемента в строке.
--}}

<div class="labelwrap {{ $positionClass or '' }}">
    <textarea name="{{ $name or ''}}" class="textarea"></textarea>
    <label class="label">{{ $label or '' }}</label>
</div>