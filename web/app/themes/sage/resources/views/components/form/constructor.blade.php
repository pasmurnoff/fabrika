<div class="title title_large mrgn35-top">Рассчитать стоимость носков или колготок</div>
<form class="form mrgn35" enctype="multipart/form-data" method="post">

    {{--Количество моделей--}}
    @component('components.form.elements.form-item', ['title' => 'Количество моделей','text' =>'Сколько моделей носков с индивидуальным дизайном входит в тираж?'])
        @slot('content')
            @include('components.form.elements.input-number', ['value' => '5', 'name' => 'model-quantity'])
        @endslot
    @endcomponent

    {{--Тираж на одну модель--}}
    @component('components.form.elements.form-item', ['title' => 'Тираж на одну модель','text' =>'Если вы хотите сделать сигнальный образец, то поставьте 1'])
        @slot('content')
{{--            @include('components.form.elements.input-number', ['value' => '1000', 'step' => '100','min' => '1000','max' => '', 'name'=>'Количество одной модели' ])--}}
            @include('components.form.elements.input-number', ['value' => '1000', 'step' => '100','min' => '1000','max' => '', 'name'=>'one-model-quantity' ])
        @endslot
    @endcomponent

    {{-- Тип будущих изделий --}}
    @component('components.form.elements.form-item', ['title' => 'Тип будущих изделий','text' =>'Сделаем типовую или индивидуальную высоту паголенка','class' => 'checkbox singlerow'])
        @slot('content')
            @include('components.form.elements.checkbox', ['name' => 'Тип', 'value' => 'Следы', 'attr' => 'checked="checked"'])
            @include('components.form.elements.checkbox', ['name' => 'Тип', 'value' => 'Короткие гладкие'])
            @include('components.form.elements.checkbox', ['name' => 'Тип', 'value' => 'Короткие спорт (высокая резинка)'])
            @include('components.form.elements.checkbox', ['name' => 'Тип', 'value' => 'Короткие спорт (высокая резинка) с плюшевым следом'])
            @include('components.form.elements.checkbox', ['name' => 'Тип', 'value' => 'Стандарт гладкие'])
            @include('components.form.elements.checkbox', ['name' => 'Тип', 'value' => 'Стандарт спорт (высокая резинка)'])
            @include('components.form.elements.checkbox', ['name' => 'Тип', 'value' => 'Стандарт спорт (высокая резинка) с плюшевым следом'])
            @include('components.form.elements.checkbox', ['name' => 'Тип', 'value' => 'Получулки или гольфы'])
        @endslot
    @endcomponent

    {{-- Плотность изделия--}}
    @component('components.form.elements.form-item', ['title' => 'Плотность изделия','text' =>'Состав 80% хлопок 20% синтетика','class' => 'checkbox singlerow'])
        @slot('content')
            @include('components.form.elements.checkbox', ['name' => 'Плотность', 'value' => 'Связываем в одну нить (тонкие, легкие)', 'attr' => 'checked="checked"'])
            @include('components.form.elements.checkbox', ['name' => 'Плотность', 'value' => 'Связываем в две нити (уплотненные, премиум)'])

        @endslot
    @endcomponent

    {{--Выберите размеры--}}
    @component('components.form.elements.form-item', ['title' => 'Выберите размеры','text' =>'Размеры, которые нужно охватить','class' => 'checkbox'])
        @slot('content')
            @include('components.form.elements.checkbox', ['name' => 'Размеры', 'value' => '16-23'])
            @include('components.form.elements.checkbox', ['name' => 'Размеры', 'value' => '24-32'])
            @include('components.form.elements.checkbox', ['name' => 'Размеры', 'value' => '32-35'])
            @include('components.form.elements.checkbox', ['name' => 'Размеры', 'value' => '36-37'])
            @include('components.form.elements.checkbox', ['name' => 'Размеры', 'value' => '38-40', 'attr' => 'checked="checked"'])
            @include('components.form.elements.checkbox', ['name' => 'Размеры', 'value' => '41-43'])
            @include('components.form.elements.checkbox', ['name' => 'Размеры', 'value' => '44-46'])
            @include('components.form.elements.checkbox', ['name' => 'Размеры', 'value' => '47-50'])

        @endslot
    @endcomponent

    {{--Носки в паре --}}
    @component('components.form.elements.form-item', ['title' => 'Носки в паре','text' =>'Если в носках есть хотя бы одно отличие, то выбирайте второй вариант','class' => 'checkbox singlerow'])
        @slot('content')
            @include('components.form.elements.checkbox', ['name' => 'Пары', 'value' => 'Одинаковые', 'attr' => 'checked="checked"'])
            @include('components.form.elements.checkbox', ['name' => 'Пары', 'value' => 'Разные'])
        @endslot
    @endcomponent

    {{--Основной цвет носка --}}
    @component('components.form.elements.form-item', ['title' => 'Основной цвет носка','text' =>'Если носки других или разных цветов, то выбираем последний вариант','class' => 'radio singlerow'])
        @slot('content')
            @include('components.form.elements.radio', ['name' => 'Цвета', 'value' => 'Белый', 'attr' => 'checked="checked"'])
            @include('components.form.elements.radio', ['name' => 'Цвета', 'value' => 'Черный'])
            @include('components.form.elements.radio', ['name' => 'Цвета', 'value' => 'Серый'])
            @include('components.form.elements.radio', ['name' => 'Цвета', 'value' => 'Красный'])
            @include('components.form.elements.radio', ['name' => 'Цвета', 'value' => 'Другой цвет'])
        @endslot
    @endcomponent

    {{--Количество цветов в изделии (с основным)--}}
    @component('components.form.elements.form-item', ['title' => 'Количество цветов в изделии (с основным)','text' =>'Оптимальный максимум цветов в изделии - 7 оттенков'])
        @slot('content')
            @include('components.form.elements.input-number', ['value' => '3','max' => '7', 'name' =>'Количество цветов' ])
        @endslot
    @endcomponent

    {{--Упаковка изделий --}}
    @component('components.form.elements.form-item', ['title' => 'Упаковка изделий','text' =>'Упаковываем в свои пакеты или работаем с вашей упаковкой','class' => 'radio singlerow'])
        @slot('content')
            @include('components.form.elements.radio', ['name' => 'Упаковка', 'value' => 'Бесплатная упаковка от предприятия', 'attr' => 'checked="checked"'])
            @include('components.form.elements.radio', ['name' => 'Упаковка', 'value' => 'Понадобятся дополнительные услуги по упаковке'])
        @endslot
    @endcomponent

    <div class="form__col_third">

        {{--К какой дате нужен тираж--}}
        @component('components.form.elements.form-item', ['title' => 'К какой дате нужен тираж','text' =>'Средний срок производства мелкотиражных партий 10-15 рабочих дней'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'Дата доставки',
                            'label' => '01-01-2020' ])
            @endslot
        @endcomponent

        {{--Город доставки--}}
        @component('components.form.elements.form-item', ['title' => 'Город доставки','text' =>'Доставляем заказы до пунктов выдачи носков'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'Город доставки',
                            'label' => 'Москва' ])
            @endslot
        @endcomponent


        {{--Общий объем тиража--}}
        @component('components.form.elements.form-item', ['title' => 'Общий объем тиража','class' => 'child__mrgn'])
            @slot('content')
                <div class="text text_large">
                    Количество изделий: <span class="quantity_result text text_large text_bold"></span>

                </div>
            @endslot
        @endcomponent

        {{-- Форма связи --}}
        @component('components.form.elements.form-item', ['title' => 'Ваше имя','class' => 'singlerow child__mrgn'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name'  => 'name',
                            'label' => 'Иван Иванов',
                            'attr'  => 'required'])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => 'Ваш email','class' => 'singlerow child__mrgn'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'email_r',
                            'type' => 'email',
                            'label' => 'primer@mail.ru',
                             'attr' => 'required'])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => 'Ваш телефон','class' => 'singlerow child__mrgn'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'Телефон',
                            'type' => 'tel',
                            'label' => '+7 (999) 999-99-99',
                             'attr' => 'required'])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => 'Файл или архив файлов, с которыми нужно поработать','class' => 'singlerow child__mrgn'])
            @slot('content')
                @include('components.form.elements.file', ['name'=>'Attached', 'id' => '1'])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => 'Комментарий','text' => 'Любая дополнительная информация'])
            @slot('content')
                @include('components.form.elements.textarea', ['name' => 'information', 'label' => 'Ссылка на скачивание файлов (логотип, шрифты, макеты), реквизиты организации'])
            @endslot
        @endcomponent
        @include('components.form.elements.privacy', ['submit' => 'Рассчитать стоимость'])
    </div>
    <div id="result_form"></div>
</form>