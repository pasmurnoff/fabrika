@php

@endphp
<div class="singlerow_privacy {{ $class or '' }}">
    <div class="form__privacy">
        {!! __('Отправляя форму я соглашаюсь с <a class="form__privacy_link" href="/uslovija-peredachi-informacii/">условиями передачи информации</a>', 'sage') !!}
    </div>
    <input type="submit" class="submit submit_privacy" value="{{ $submit or __('Отправить', 'sage') }}">
</div>