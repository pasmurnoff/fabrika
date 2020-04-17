{{--
Template Name: Макет носков
--}}

@extends('layouts.app')
@section('content')
    @component('components.banner.banner', ['href' => '/konstruktor-zakaza-noskov', 'classes' => 'banner_bg banner_maket'])
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
        @slot('icon')
            <img width="300" height="300" src="@asset('images/components/banners/fabrikanoskov_konstruktor.png')"
                 alt="Конструктор заказа носков">
        @endslot
    @endcomponent

    <div class="text pdng35-top">
        <div class="title title_large">Технические требования к макетам</div>
        <div class="text_middle pdng15">
            Заявка на производство носков с приложенным макетом обрабатывается быстрее. Для того, чтобы сделать
            качественные
            носки, необходимо сделать правильный макет, который учитывает технические требования производства носков.
        </div>

        <div class="text_bold">Технические требования</div>
        <div>Данные требования являются общими</div>
    </div>

    <div class="mrgn35">
        <ul class="listnum">
            <li class="listnum__point">
                <span class="listnum__number">1</span>
                <div class="listnum__text">На пятке, мыске и резинке изображение не вывязывается.</div>
            </li>
            <li class="listnum__point">
                <span class="listnum__number">2</span>
                <div class="listnum__text"> Пятка и мысок одного цвета, резинка может быть отличного от них цвета.</div>
            </li>
            <li class="listnum__point">
                <span class="listnum__number">3</span>
                <div class="listnum__text">Градиент вывязать нереально.</div>
            </li>
            <li class="listnum__point">
                <span class="listnum__number">4</span>
                <div class="listnum__text">Узоры с большим числом мелких деталей увеличиваем или упрощаем.</div>
            </li>
            <li class="listnum__point">
                <span class="listnum__number">5</span>
                <div class="listnum__text">Максимум цветов, которые используются при отвязке — 4-7.</div>
            </li>
        </ul>
    </div>

    <div class="title title_huge">Опишите ваш запрос</div>

    <form enctype="multipart/form-data" method="POST" class="form mrgn35-bottom mrgn15-top">

        @component('components.form.elements.form-item', ['title' => 'В каком формате нужен макет?','class' => 'checkbox singlerow'])
            @slot('content')
                @include('components.form.elements.checkbox', ['name' => 'format', 'value' => 'PSD'])
                @include('components.form.elements.checkbox', ['name' => 'format', 'value' => 'JPG','attr' => 'checked="checked"'])
                @include('components.form.elements.checkbox', ['name' => 'format', 'value' => 'BMP'])
                @include('components.form.elements.checkbox', ['name' => 'format', 'value' => 'Макет есть, мне нужна консультация'])
            @endslot
            @slot('text')
                Для схематической иллюстрации вашего замысла подойдут макеты в PSD или в JPG. Для точной — BMP.
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => 'Ваша электронная почта', 'class' =>'child__mrgn form__col_third'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'email',
                            'label' => 'primer@mail.ru' ])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => 'Оставьте комментарий (если считаете нужным)','text' => 'Любая дополнительная информация', 'class' => 'form__col_third'])
            @slot('content')
                @include('components.form.elements.textarea', ['name' => 'additional', 'label' => 'Ссылка на скачивание файлов (логотип, шрифты, макеты), реквизиты организации'])
            @endslot
        @endcomponent

        @include('components.form.elements.privacy', ['class' => 'form__col_third'])

    </form>

    <div class="text text_middle">
        <div class="pdng15-bottom">
            Мы не расстроимся если вы воспользуетесь полученными знаниями или макетами для размещения заказа на другом
            производстве. Важно, чтобы техническое воплощение вашего творческого замысла устроило вас и аудиторию,
            которой
            предназначаются изделия с вашим дизайном.
        </div>
        <div>
            Если у вас уже готовы макеты, и вам нужно качественно, с вниманием ко всем деталям, адаптировать макеты
            носков для
            производства носков на другом предприятии, мы также готовы выполнить эту задачу. Пример адаптации
            иллюстрации для
            производства носков смотрите ниже.
        </div>
    </div>

    <div class="maket__drag mrgn35">
        <div class="mainSection">
            <div id="comparison-slider-1" class="bal-container">
                <div class="bal-after">
                    <img src="@asset('images/components/maket/fabrikanoskov_after.jpg')" alt="Фабрика носков макет">
                    <div class="bal-afterPosition afterLabel">
                        Адаптация в BMP
                    </div>
                </div>

                <div class="bal-before">
                    <div class="bal-before-inset">
                        <img src="@asset('images/components/maket/fabrikanoskov_before.jpg')"
                             alt="Фабрика носков макет">
                        <div class="bal-beforePosition beforeLabel">
                            Оригинал в JPG
                        </div>
                    </div>
                </div>

                <div class="bal-handle">
                    <span class=" handle-left-arrow"></span>
                    <span class="handle-right-arrow"></span>
                </div>

            </div>
        </div>
    </div>

    <div class="text pdng35-bottom text_middle">
        При возникновении вопросов к нашим макетам или адаптации макетов на стороннем производстве вы можете просто
        соединить нас с технологом. Мы совместно решим возникшие вопросы, доведем макеты до результата, который
        устроит
        всех.
    </div>
@endsection

