@php
    $privacy = pll__('Отправляя форму я соглашаюсь с [условиями передачи информации]');
    $privacy = str_replace('[', '<a class="form__privacy_link" href="/uslovija-peredachi-informacii/">', $privacy);
    $privacy = str_replace(']', '</a>', $privacy);
@endphp
<div class="singlerow_privacy {{ $class or '' }}">
    <div class="form__privacy">
        {!! $privacy !!}
    </div>
    <input type="submit" class="submit submit_privacy" value="{{ $submit or pll__('Отправить') }}">
</div>
