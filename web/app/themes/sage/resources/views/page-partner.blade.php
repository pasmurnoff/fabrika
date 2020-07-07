{{--Template Name: Подключиться к партнерской программе
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap" itemscope itemtype="http://schema.org/ImageObject">
      <img class="defaultpage__image" itemprop="contentUrl" src="@asset('images/defaultpages/fabrikanoskov_partnerskaja-programma.jpg')"
           alt="Подключиться к партнерской программе фабрики носков">
    </div>
    <div class="block-text">
      <div class="title title_large">Партнерская программа</div>

      <div class="block-text__text block-text__text_padding-away">
        Фабрика носков всегда в поиске региональных представителей.
        <br/>
        Если ваша организация готова представлять интересы «Fabrikanoskov.ru» в вашем регионе, просим вас написать
        запрос нам на электронную почту mail@fabrikanoskov.ru и адресовать его директору по развитию регионов.
      </div>

      <div class="block-text__text block-text__text_bold">
        Представитель/дилер для получения уникальных условий сотрудничества, должен соответствовать следующим условиям:
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">Наличии юридического лица, существующее не менее трех лет на дату запроса</li>
        <li class="block-text__point">Юридическое лицо должно быть зарегистрировано в регионе обращения</li>
        <li class="block-text__point">Иметь опыт продаж в сфере «Одежда и аксессуары»</li>
        <li class="block-text__point">Штат не менее 5 человек</li>
        <li class="block-text__point">Наличие офисного помещения, стационарного телефона и склада не менее 50 квадратных
          метров
        </li>
      </ul>

      <div class="block-text__text block-text__text_bold">
        Представитель/дилер получает по партнерской программе:
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">Возможность размещения на сайте уникальных товаров с привязкой к регионy</li>
        <li class="block-text__point">Указание регионального представителя/дилера на сайте</li>
        <li class="block-text__point">Передача всех поступающих заказов в разрезе региона соответствующему представителю/дилеру</li>
        <li class="block-text__point">Пошив носочно-чулочной продукции на эксклюзивных условиях</li>
        <li class="block-text__point">Изготовление уникальной этикетки и упаковки на эксклюзивных условиях</li>
        <li class="block-text__point">Предоставление всех необходимых имиджевых материалов</li>
        <li class="block-text__point">Предоставление результатов маркетинговых исследований и аналитики продаж в разрезе дизайнов и размеров</li>
      </ul>
    </div>
  </div>
@endsection
