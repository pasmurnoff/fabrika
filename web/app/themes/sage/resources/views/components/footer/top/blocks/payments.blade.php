<div class="title footer__title">{!! pll__('Способы оплаты') !!}</div>
<div class="payments">
  @include('icon::visa')
  @include('icon::mastercard')
  @include('icon::mir')
  <div class="payments__text">
    {!! pll__('Вы можете оплатить покупки наложенным платежом, либо выбрать другой способ оплаты.') !!}
  </div>
</div>
