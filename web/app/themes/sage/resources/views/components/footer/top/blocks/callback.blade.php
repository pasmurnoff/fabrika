<div class="title footer__title mrgn15-bottom">{!! pll__('Заказать обратный звонок') !!}</div>
<form method="POST" class="form formline">
    <div class="footer__callback">
        <div class="labelwrap footer__callback_field">
            <input required type="tel" class="input" name="phone" placeholder="+7 (___) ___-__-__">
        </div>
        <div class="labelwrap footer__callback_submit">
            <input type="submit" class="submit submit_line" value="{{ pll__('Отправить') }}">
        </div>
    </div>
</form>
