{{--
Слева направо submit, privacy. Добавить в $class: singlerow_privacy
--}}

<div class="singlerow_privacy">
    <input type="submit" class="submit" value="{{ $submit or '' }}">
    <div class="form__privacy form__privacy_left">
        Отправляя форму я соглашаюсь<br/> с <a class="form__privacy_link" href="/uslovija-peredachi-informacii">условиями
            передачи информации</a>
    </div>
</div>