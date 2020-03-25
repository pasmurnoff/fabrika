<div class="title title_large">Рассчитать стоимость носков или колготок</div>
<form class="form mrgn35">
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
</form>