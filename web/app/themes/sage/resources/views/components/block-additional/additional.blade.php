<div class="additional mrgn35">
  @component('components.block-additional.additional-item')
    @slot('icon')
      @include('icon::quality')
    @endslot

    @slot('title')
        Гарантия
    @endslot

    @slot('text')
        Качественные экологичные материалы.<br/>
        Контроль каждого изделия
    @endslot
  @endcomponent

  @component('components.block-additional.additional-item')
    @slot('icon')
      @include('icon::dashboard')
    @endslot

    @slot('title')
      Доставка
    @endslot

    @slot('text')
      Быстрая доставка по России.<br/>
      Доставка по всему миру
    @endslot
  @endcomponent

  @component('components.block-additional.additional-item')
    @slot('icon')
      @include('icon::telemarketer')
    @endslot

    @slot('title')
      Сервис
    @endslot

    @slot('text')
        Лёгкий процесс оплаты,<br/>
        обмена и возврата
    @endslot
    @endcomponent
</div>
