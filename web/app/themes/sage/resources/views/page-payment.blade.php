{{--Template Name: Условия оплаты
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/uslovia_oplati_noskov.jpg')"
           alt="Условия оплаты носков">
    </div>

    <div class="title title_large">Способы оплаты для юридических лиц и индивидуальных предпринимателей</div>
    <div class="block-text">
      <ul class="block-text__list">
        <li class="block-text__point">Создаете заявку на сайте, указывая форму оплаты и способ доставки и получаете от
          менеджера подтверждение того, что заказ принят, сумму к оплате и счет для оплаты.
        </li>
        <li class="block-text__point">Подтвержденный заказ можно оплатить в течении 5 суток. На этот срок бронируется
          товар на складе при его наличии, в противном случае товар поступает в производство (от 5 дней) при наличии
          необходимого сырья (в случае отсутствия необходимо сырья срок изготовления увеличивается до 21-45 дней).
        </li>
        <li class="block-text__point">Отгружаем товар НЕ ПОЗДНЕЕ 5-7 СУТОК с момента поступления денег на наш счет, в
          случае наличия товара на складе, в противном случае отталкиваемся от сроков производства. Предоставляем полный
          пакет документов: договор, счет, сертификаты, накладные.
        </li>
      </ul>
    </div>

    <div class="title title_large">Способы оплаты для физических лиц</div>
    <div class="block-text">
      <ul class="block-text__list">
        <li class="block-text__point">Перевод на счет организации в «Сбербанк онлайн»</li>
      </ul>
      <div class="block-text__text block-text__text_bold">
        Внимание! Если в приложении Сбербанк не находит организацию поставщика, воспользуйтесь способом ниже.
      </div><br/>
      <div class="block-text__text">
        Если у Вас другой банк, то необходимо выбрать перевод юр.лицу/индивидуальному предпринимателю/организации и
        прочее. И ввести реквизиты нашей компании:
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">Наличный расчет</li>
      </ul>
    </div>

    <div class="title title_large">Другие способы оплаты</div>
    <div class="block-text">
      <ol class="block-text__list">
        <li class="block-text__point">Яндекс Деньги.</li>
        <li class="block-text__point">QIWI Кошелёк.</li>
        <li class="block-text__point">Золотая Корона.</li>
        <li class="block-text__point">Western Union</li>
      </ol>
    </div>

  </div>
@endsection
