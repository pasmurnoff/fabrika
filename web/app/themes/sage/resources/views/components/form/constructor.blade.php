<div class="title title_large mrgn35_top">Рассчитать стоимость носков или колготок</div>
<form class="form mrgn35">

    {{--Количество моделей--}}
    @component('components.form.elements.form-item', [
        'title' => 'Количество моделей',
        'text' =>'Сколько моделей носков с индивидуальным дизайном входит в тираж?',
        ])
        @slot('content')
            @include('components.form.elements.input-number', ['value' => '5', 'name' => 'model-quantity'])
        @endslot
    @endcomponent

    {{--Тираж на одну модель--}}
    @component('components.form.elements.form-item', [
        'title' => 'Тираж на одну модель',
        'text' =>'Если вы хотите сделать сигнальный образец, то поставьте 1',
        ])
        @slot('content')
            @include('components.form.elements.input-number', ['value' => '1000', 'step' => '100','min' => '1000','max' => '', 'name'=>'one-model-quantity' ])
        @endslot
    @endcomponent

    {{-- Тип будущих изделий --}}
    @component('components.form.elements.form-item', [
                'title' => 'Тип будущих изделий',
                'text' =>'Сделаем типовую или индивидуальную высоту паголенка',
                'class' => 'checkbox'
                ])
        @slot('content')
            @include('components.form.elements.checkbox', ['name' => 'type', 'value' => 'Следы', 'attr' => 'checked="checked"'])
            @include('components.form.elements.checkbox', ['name' => 'type', 'value' => 'Короткие гладкие'])
            @include('components.form.elements.checkbox', ['name' => 'type', 'value' => 'Короткие спорт (высокая резинка)'])
            @include('components.form.elements.checkbox', ['name' => 'type', 'value' => 'Короткие спорт (высокая резинка) с плюшевым следом'])
            @include('components.form.elements.checkbox', ['name' => 'type', 'value' => 'Стандарт гладкие'])
            @include('components.form.elements.checkbox', ['name' => 'type', 'value' => 'Стандарт спорт (высокая резинка)'])
            @include('components.form.elements.checkbox', ['name' => 'type', 'value' => 'Стандарт спорт (высокая резинка) с плюшевым следом'])
            @include('components.form.elements.checkbox', ['name' => 'type', 'value' => 'Получулки или гольфы'])
        @endslot
    @endcomponent

    {{-- Плотность изделия--}}
    @component('components.form.elements.form-item', [
                'title' => 'Плотность изделия',
                'text' =>'Состав 80% хлопок 20% синтетика',
                'class' => 'checkbox'
                ])
        @slot('content')
            @include('components.form.elements.checkbox', ['name' => 'density', 'value' => 'Связываем в одну нить (тонкие, легкие)', 'attr' => 'checked="checked"'])
            @include('components.form.elements.checkbox', ['name' => 'density', 'value' => 'Связываем в две нити (уплотненные, премиум)'])

        @endslot
    @endcomponent

    {{--Выберите размеры--}}
    @component('components.form.elements.form-item', [
            'title' => 'Выберите размеры',
            'text' =>'Размеры, которые нужно охватить',
            'class' => 'checkbox'
            ])
        @slot('content')
            @include('components.form.elements.checkbox', ['name' => 'sizes', 'value' => '16-23'])
            @include('components.form.elements.checkbox', ['name' => 'sizes', 'value' => '24-32'])
            @include('components.form.elements.checkbox', ['name' => 'sizes', 'value' => '32-35'])
            @include('components.form.elements.checkbox', ['name' => 'sizes', 'value' => '36-37'])
            @include('components.form.elements.checkbox', ['name' => 'sizes', 'value' => '38-40', 'attr' => 'checked="checked"'])
            @include('components.form.elements.checkbox', ['name' => 'sizes', 'value' => '41-43'])
            @include('components.form.elements.checkbox', ['name' => 'sizes', 'value' => '44-46'])
            @include('components.form.elements.checkbox', ['name' => 'sizes', 'value' => '47-50'])

        @endslot
    @endcomponent

    {{--Носки в паре --}}
    @component('components.form.elements.form-item', [
        'title' => 'Носки в паре',
        'text' =>'Если в носках есть хотя бы одно отличие, то выбирайте второй вариант',
        'class' => 'checkbox'
        ])
        @slot('content')
            @include('components.form.elements.checkbox', ['name' => 'pairs', 'value' => 'Одинаковые', 'attr' => 'checked="checked"'])
            @include('components.form.elements.checkbox', ['name' => 'pairs', 'value' => 'Разные'])
        @endslot
    @endcomponent

    {{--Основной цвет носка --}}
    @component('components.form.elements.form-item', [
        'title' => 'Основной цвет носка',
        'text' =>'Если носки других или разных цветов, то выбираем последний вариант',
        'class' => 'radio'
        ])
        @slot('content')
            @include('components.form.elements.radio', ['name' => 'colors', 'value' => 'Белый', 'attr' => 'checked="checked"'])
            @include('components.form.elements.radio', ['name' => 'colors', 'value' => 'Черный'])
            @include('components.form.elements.radio', ['name' => 'colors', 'value' => 'Серый'])
            @include('components.form.elements.radio', ['name' => 'colors', 'value' => 'Красный'])
            @include('components.form.elements.radio', ['name' => 'colors', 'value' => 'Другой цвет'])
        @endslot
    @endcomponent

    {{--Количество цветов в изделии (с основным)--}}
    @component('components.form.elements.form-item', [
        'title' => 'Количество цветов в изделии (с основным)',
        'text' =>'Оптимальный максимум цветов в изделии - 7 оттенков',
        ])
        @slot('content')
            @include('components.form.elements.input-number', ['value' => '3','max' => '7', 'name' =>'color-quantity' ])
        @endslot
    @endcomponent

    {{--Упаковка изделий --}}
    @component('components.form.elements.form-item', [
        'title' => 'Упаковка изделий',
        'text' =>'Упаковываем в свои пакеты или работаем с вашей упаковкой',
        'class' => 'radio'
        ])
        @slot('content')
            @include('components.form.elements.radio', ['name' => 'package', 'value' => 'Бесплатная упаковка от предприятия', 'attr' => 'checked="checked"'])
            @include('components.form.elements.radio', ['name' => 'package', 'value' => 'Понадобятся дополнительные услуги по упаковке'])
        @endslot
    @endcomponent

</form>