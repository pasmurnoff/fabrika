{{--
Template Name: Макет носков
--}}

@extends('layouts.app')
@section('content')
  @component('blocks.banner.banner', ['href' => '/konstruktor-zakaza-noskov'])
    @slot('title')
      Заказать дизайн-концепцию<br/>
      и получить бесплатный образец
    @endslot
    @slot('text')
      Отправьте эскиз носков, которые хотите изготовить или опишите ваш творческий замысел.
    @endslot
    @slot('buttonText')
      Конструктор заказа носков
    @endslot
  @endcomponent

  <div class="block-text pdng35">
    <div class="title title_large">Технические требования к макетам</div>
    <div class="block-text__text block-text__text_padding-away">
      Заявка на производство носков с приложенным макетом обрабатывается быстрее. Для того, чтобы сделать качественные
      носки, необходимо сделать правильный макет, который учитывает технические требования производства носков.
    </div>

    <div class="block-text__text block-text__text_bold">Технические требования</div>
    <div class="block-text__text block-text__text_padding-away">Данные требования являются общими</div>
  </div>

  <div class="listnum__wrapper">
    <ul class="listnum">
      <li class="listnum__point">
        <span class="listnum__number">1</span>
        На пятке, мыске и резинке изображение не вывязывается.
      </li>
      <li class="listnum__point">
        <span class="listnum__number">2</span>
        Пятка и мысок одного цвета, резинка может быть отличного от них цвета.
      </li>
      <li class="listnum__point">
        <span class="listnum__number">3</span>
        Градиент вывязать нереально.
      </li>
      <li class="listnum__point">
        <span class="listnum__number">4</span>
        Узоры с большим числом мелких деталей увеличиваем или упрощаем.
      </li>
      <li class="listnum__point">
        <span class="listnum__number">5</span>
        Максимум цветов, которые используются при отвязке — 4-7.
      </li>
    </ul>
  </div>

  <div class="title title_huge">Опишите ваш запрос</div>

  <form enctype="multipart/form-data" method="POST" class="form">

    <div class="form__wrap">
      <div class="title title_middle form__title">В каком формате нужен макет?</div>
      <div class="form__text">
        Для схематической иллюстрации вашего замысла подойдут макеты в PSD или в JPG. Для точной — BMP.
      </div>
      <div class="singlerow">
        <label for="format[]" class="label_checkbox">
          <input type="checkbox" name="format[]" class="input_checkbox">
          <span class="checkbox__text">PSD</span>
        </label>
      </div>
      <div class="singlerow">
        <label for="format[]" class="label_checkbox">
          <input type="checkbox" name="format[]" class="input_checkbox">
          <span class="checkbox__text">JPG</span>
        </label>
      </div>
      <div class="singlerow">
        <label for="format[]" class="label_checkbox">
          <input type="checkbox" name="format[]" class="input_checkbox">
          <span class="checkbox__text">BMP</span>
        </label>
      </div>
      <div class="singlerow">
        <label for="format[]" class="label_checkbox">
          <input type="checkbox" name="format[]" class="input_checkbox">
          <span class="checkbox__text">Макет есть, мне нужна консультация</span>
        </label>
      </div>
    </div>

    <div class="form__wrap">
      <div class="title title_middle form__title">Ваша электронная почта</div>
      <div class="singlerow">
        <div class="labelwrap labelwrap_single">
          <input type="email" class="input" name="email">
          <label class="label">primer@mail.ru</label>
        </div>
      </div>
    </div>

    <div class="form__wrap">
      <div class="title title_middle form__title">Оставьте комментарий (если считаете нужным)</div>
      <div class="form__text">
        Любая дополнительная информация
      </div>
      <div class="singlerow">
        <div class="labelwrap labelwrap_single">
          <textarea name="additional" class="textarea"></textarea>
          <label class="label">Ссылка на скачивание файлов (логотип, шрифты, макеты), реквизиты организации</label>
        </div>
      </div>
    </div>

    <div class="singlerow_privacy singlerow_privacy_toleft singlerow_privacy_managers">
      <input type="submit" class="submit" value="Отправить">
      <div class="form__privacy form__privacy_left">
        Отправляя форму я соглашаюсь<br/> с <a class="form__privacy_link" href="/uslovija-peredachi-informacii">условиями
          передачи информации</a>
      </div>
    </div>

  </form>

  <div class="block-text pdng35">
    <div class="block-text__text">
      Мы не расстроимся если вы воспользуетесь полученными знаниями или макетами для размещения заказа на другом
      производстве. Важно, чтобы техническое воплощение вашего творческого замысла устроило вас и аудиторию, которой
      предназначаются изделия с вашим дизайном.
    </div>
    <div class="block-text__text block-text__text_padding-away">
      Если у вас уже готовы макеты, и вам нужно качественно, с вниманием ко всем деталям, адаптировать макеты носков для
      производства носков на другом предприятии, мы также готовы выполнить эту задачу. Пример адаптации иллюстрации для
      производства носков смотрите ниже.
    </div>
  </div>

  <div class="maket__drag">
    <div class="akcii__touch">
      <figure class="cd-image-container is-visible">
        <img src="@asset('images/blocks/maket/fabrikanoskov_after.jpg')" alt="Фабрика носков макет">
        <span class="cd-image-label" data-type="original">Адаптация в BMP</span>

        <div class="cd-resize-img" style="width: 50.625%;">
          <img src="@asset('images/blocks/maket/fabrikanoskov_before.jpg')" alt="Фабрика носков макет">
          <span class="cd-image-label" data-type="modified">Оригинал в JPG</span>
        </div>

        <span class="cd-handle" style="left: 50.625%;"></span>
      </figure>
    </div>
  </div>

  <div class="block-text">
    <div class="block-text__text block-text__text_padding-away">
      При возникновении вопросов к нашим макетам или адаптации макетов на стороннем производстве вы можете просто
      соединить нас с технологом. Мы совместно решим возникшие вопросы, доведем макеты до результата, который устроит
      всех.
    </div>
  </div>
@endsection

<style>
  .teethcleaning {
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .cd-image-container {
    position: relative;
    width: 90%;
    max-width: 444px;
    /*margin: 0em auto;*/
  }

  .cd-image-container img {
    display: block;
  }

  .cd-image-label {
    position: absolute;
    font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    top: 0;
    right: 0;
    color: #ffffff;
    background-color: #222;
    padding: 2px 9px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    opacity: 0;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    -webkit-transition: -webkit-transform 0.3s 0.7s, opacity 0.3s 0.7s;
    -moz-transition: -moz-transform 0.3s 0.7s, opacity 0.3s 0.7s;
    transition: transform 0.3s 0.7s, opacity 0.3s 0.7s;
  }

  .cd-image-label.is-hidden {
    /*visibility: hidden;*/
  }

  .is-visible .cd-image-label {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }

  .cd-resize-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    overflow: hidden;
    border-right: 4px solid #fff;
    /* Force Hardware Acceleration in WebKit */
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }

  .cd-resize-img img {
    position: absolute;
    left: 0;
    top: 0;
    display: block;
    height: 100%;
    width: auto;
    max-width: none;
  }

  .cd-resize-img .cd-image-label {
    /*right: auto;*/
    left: 0;
    width: 132px;
    text-align: center;
  }

  .is-visible .cd-resize-img {
    width: 50%;
    /* bounce in animation of the modified image */
    -webkit-animation: cd-bounce-in 0.7s;
    -moz-animation: cd-bounce-in 0.7s;
    animation: cd-bounce-in 0.7s;
  }

  @-webkit-keyframes cd-bounce-in {
    0% {
      width: 0;
    }
    60% {
      width: 55%;
    }
    100% {
      width: 50%;
    }
  }

  @-moz-keyframes cd-bounce-in {
    0% {
      width: 0;
    }
    60% {
      width: 55%;
    }
    100% {
      width: 50%;
    }
  }

  @keyframes cd-bounce-in {
    0% {
      width: 0;
    }
    60% {
      width: 55%;
    }
    100% {
      width: 50%;
    }
  }

  .cd-handle {
    position: absolute;
    height: 24px;
    width: 24px;
    /* center the element */
    left: 50%;
    top: 50%;
    margin-left: -10px;
    margin-top: -20px;
    border-radius: 50%;
    background: #222 url("@asset('images/blocks/maket/cd-arrows.svg')") no-repeat center center;
    cursor: move;
    box-shadow: 0 0 0 6px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.3);
    opacity: 0;
    -webkit-transform: translate3d(0, 0, 0) scale(0);
    -moz-transform: translate3d(0, 0, 0) scale(0);
    -ms-transform: translate3d(0, 0, 0) scale(0);
    -o-transform: translate3d(0, 0, 0) scale(0);
    transform: translate3d(0, 0, 0) scale(0);
  }

  .cd-handle.draggable {
    /* change background color when element is active */
    background-color: #222;
  }

  .is-visible .cd-handle {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0) scale(1);
    -moz-transform: translate3d(0, 0, 0) scale(1);
    -ms-transform: translate3d(0, 0, 0) scale(1);
    -o-transform: translate3d(0, 0, 0) scale(1);
    transform: translate3d(0, 0, 0) scale(1);
    -webkit-transition: -webkit-transform 0.3s 0.7s, opacity 0s 0.7s;
    -moz-transition: -moz-transform 0.3s 0.7s, opacity 0s 0.7s;
    transition: transform 0.3s 0.7s, opacity 0s 0.7s;
  }

  .cd-image-container img,
  .cd-image-container {
    width: 320px;
    max-width: 320px;
  }

  .profchist > .vc_column-inner > .wpb_wrapper {
    float: right;
  }
</style>
