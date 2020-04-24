{{--
$positionClass:
Выберите класс `labelwrap_single`, чтобы разместить поле в одну строку.
Выберите класс `labelwrap_dual`, чтобы разместить два элемента в строке.
--}}

<div class="labelwrap {{$positionClass or ''}}">
    <input {{ $attr or '' }} type="{{$type or 'text'}}" class="input" name="{{ $name or '' }}">
    <label class="label">{{ $label or '' }}</label>
</div>