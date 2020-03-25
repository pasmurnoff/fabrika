<div class="workorder mrgn35">
  <div class="workorder__title title title_huge">Порядок работы</div>
  <div class="workorder__inner">
    @component('components.workorder.workorder-item', ['num' => '1', 'right' => false])
      @slot('title')
        Сбор данных
      @endslot

      @slot('text')
        Вы формируете детализированную идею.
      @endslot
    @endcomponent

    @component('components.workorder.workorder-item', ['num' => '2', 'right' => true])
      @slot('title')
        Заполнение брифа
      @endslot

      @slot('text')
        Переносите всю информацию по пунктам в нашу анкету.
      @endslot
    @endcomponent

    @component('components.workorder.workorder-item', ['num' => '3', 'right' => false])
      @slot('title')
        Создание макета
      @endslot

      @slot('text')
        Создаете схематичный макет взяв за основу вашу идею и нашу анкету. По возможности. Создаете макет 156 (ширина)
        (78 одна сторона носка (зона А1-А2) + 78 вторая сторона носка (зона А3-А4) и 320 (160 пикселей высота паголенка
        и 160 длина следа) пикселей в 16-цветовой гамме, bmp формат. Это позволит максимально четко, быстро, согласовать
        изделие и запустить в тираж.
      @endslot
    @endcomponent

    @component('components.workorder.workorder-item', ['num' => '4', 'right' => true])
      @slot('title')
        Оплата образца
      @endslot

      @slot('text')
        Оплачиваете макет. *При согласовании тиража стоимость за образец учитывается в счете за тираж.
      @endslot
    @endcomponent

    @component('components.workorder.workorder-item', ['num' => '5', 'right' => false])
      @slot('title')
        Отрисовка макета
      @endslot

      @slot('text')
        Мы отрисовываем изделие по цветам в программе. Предоставляем картинку из программы. Вы подтверждаете. Вносим
        правки в подготовленный к утверждению образец, если тот не учитывал все пожелания заказчика.
      @endslot
    @endcomponent

    @component('components.workorder.workorder-item', ['num' => '6', 'right' => true])
      @slot('title')
        Производство образца
      @endslot

      @slot('text')
        Вяжем пару носков на основании данных из анкеты, подтвержденному изображению из программы и переданному полотну.
      @endslot
    @endcomponent

    @component('components.workorder.workorder-item', ['num' => '7', 'right' => false])
      @slot('title')
        Предоплата тиража
      @endslot

      @slot('text')
        Оплачиваете 75% стоимости тиража.
      @endslot
    @endcomponent

    @component('components.workorder.workorder-item', ['num' => '8', 'right' => true])
      @slot('title')
        Запуск тиража
      @endslot

      @slot('text')
        Начинаем производство тиража.
      @endslot
    @endcomponent

    @component('components.workorder.workorder-item', ['num' => '9', 'right' => false, 'last' => 'workorder__subline_last'])
      @slot('title')
        Отгрузка и оплата изделий
      @endslot

      @slot('text')
        Отгружаем заказ. Оплачиваете оставшуюся сумму.
      @endslot
    @endcomponent

  </div>
</div>
