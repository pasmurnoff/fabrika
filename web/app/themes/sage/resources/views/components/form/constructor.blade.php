@php
    $page_id = get_the_ID();
    $constructor = [];
    // Количество моделей
    $constructor['model-quantity'] = [
        'title' => get_field('constructor_model_quantity_title', $page_id),
        'text'  => get_field('constructor_model_quantity_text', $page_id),
    ];
    // Тираж на одну модель
    $constructor['one-model-quantity'] = [
        'title' => get_field('constructor_one_model_quantity_title', $page_id),
        'text'  => get_field('constructor_one_model_quantity_text', $page_id),
    ];
    // Тип будущих изделий checkboxes
    $constructor['type'] = [
        'title' => get_field('constructor_type_title', $page_id),
        'text'  => get_field('constructor_type_text', $page_id),
        'checkboxes' => get_field('constructor_type_checkboxes', $page_id),
    ];
    // Плотность изделия
    $constructor['density'] = [
        'title' => get_field('constructor_density_title', $page_id),
        'text'  => get_field('constructor_density_text', $page_id),
        'checkboxes' => get_field('constructor_density_checkboxes', $page_id),
    ];
    // Выберите размеры
    $constructor['size'] = [
        'title' => get_field('constructor_size_title', $page_id),
        'text'  => get_field('constructor_size_text', $page_id),
        'checkboxes' => get_field('constructor_size_checkboxes', $page_id),
    ];
    // Носки в паре
    $constructor['pairs'] = [
        'title' => get_field('constructor_pairs_title', $page_id),
        'text'  => get_field('constructor_pairs_text', $page_id),
        'checkboxes' => get_field('constructor_pairs_checkboxes', $page_id),
    ];
    // Основной цвет носка
    $constructor['colors'] = [
        'title' => get_field('constructor_colors_title', $page_id),
        'text'  => get_field('constructor_colors_text', $page_id),
        'checkboxes' => get_field('constructor_colors_checkboxes', $page_id),
    ];
    // Количество цветов в изделии
    $constructor['count-colors'] = [
        'title' => get_field('constructor_count_colors_title', $page_id),
        'text'  => get_field('constructor_count_colors_text', $page_id),
    ];
    // Упаковка изделий
    $constructor['packaging'] = [
        'title' => get_field('constructor_packaging_title', $page_id),
        'text'  => get_field('constructor_packaging_text', $page_id),
        'checkboxes' => get_field('constructor_packaging_checkboxes', $page_id),
    ];
    // К какой дате нужен тираж
    $constructor['delivery-date'] = [
        'title' => get_field('constructor_delivery_date_title', $page_id),
        'text'  => get_field('constructor_delivery_date_text', $page_id),
    ];
    // Город доставки
    $constructor['delivery-city'] = [
        'title' => get_field('constructor_delivery_city_title', $page_id),
        'text'  => get_field('constructor_delivery_city_text', $page_id),
        'name'  => get_field('constructor_delivery_city_name', $page_id),
    ];
    // Общий объем тиража
    $constructor['quantity-result'] = [
        'title' => get_field('constructor_quantity_result_title', $page_id),
        'text'  => get_field('constructor_quantity_result_text', $page_id),
    ];
@endphp

<div class="title title_large mrgn35-top">{!! get_field('constructor_title', $page_id) !!}</div>
<form class="form mrgn35" enctype="multipart/form-data" method="post">

    {{--Количество моделей--}}
    @component('components.form.elements.form-item', ['title' => $constructor['model-quantity']['title'], 'text' => $constructor['model-quantity']['text']])
        @slot('content')
            @include('components.form.elements.input-number', ['value' => '5', 'name' => 'model-quantity'])
        @endslot
    @endcomponent

    {{--Тираж на одну модель--}}
    @component('components.form.elements.form-item', ['title' => $constructor['one-model-quantity']['title'], 'text' => $constructor['one-model-quantity']['text']])
        @slot('content')
            @include('components.form.elements.input-number', ['value' => '1000', 'step' => '100','min' => '1000','max' => '', 'name'=>'one-model-quantity' ])
        @endslot
    @endcomponent

    {{-- Тип будущих изделий --}}
    @component('components.form.elements.form-item', ['title' => $constructor['type']['title'], 'text' => $constructor['type']['text'],'class' => 'checkbox singlerow'])
        @slot('content')
            @if(!empty($constructor['type']['checkboxes']))
                @include('components.form.elements.checkboxes', ['items' => $constructor['type']['checkboxes'], 'name' => 'type'])
            @endif
        @endslot
    @endcomponent

    {{-- Плотность изделия--}}
    @component('components.form.elements.form-item', ['title' => $constructor['density']['title'], 'text' => $constructor['density']['text'], 'class' => 'checkbox singlerow'])
        @slot('content')
            @if(!empty($constructor['density']['checkboxes']))
                @include('components.form.elements.checkboxes', ['items' => $constructor['density']['checkboxes'], 'name' => 'density'])
            @endif
        @endslot
    @endcomponent

    {{--Выберите размеры--}}
    @component('components.form.elements.form-item', ['title' => $constructor['size']['title'], 'text' => $constructor['size']['text'], 'class' => 'checkbox'])
        @slot('content')
            @if(!empty($constructor['size']['checkboxes']))
                @include('components.form.elements.checkboxes', ['items' => $constructor['size']['checkboxes'], 'name' => 'size'])
            @endif
        @endslot
    @endcomponent

    {{--Носки в паре --}}
    @component('components.form.elements.form-item', ['title' => $constructor['pairs']['title'], 'text' => $constructor['pairs']['text'],'class' => 'checkbox singlerow'])
        @slot('content')
            @if(!empty($constructor['pairs']['checkboxes']))
                @include('components.form.elements.checkboxes', ['items' => $constructor['pairs']['checkboxes'], 'name' => 'pairs'])
            @endif
        @endslot
    @endcomponent

    {{--Основной цвет носка --}}
    @component('components.form.elements.form-item', ['title' => $constructor['colors']['title'], 'text' => $constructor['colors']['text'],'class' => 'radio singlerow'])
        @slot('content')
            @if(!empty($constructor['colors']['checkboxes']))
                @include('components.form.elements.checkboxes', ['items' => $constructor['colors']['checkboxes'], 'name' => 'colors', 'type' => 'radio'])
            @endif
        @endslot
    @endcomponent

    {{--Количество цветов в изделии (с основным)--}}
    @component('components.form.elements.form-item', ['title' => $constructor['count-colors']['title'], 'text' => $constructor['count-colors']['text']])
        @slot('content')
            @include('components.form.elements.input-number', ['value' => '3','max' => '7', 'name' =>'count-colors' ])
        @endslot
    @endcomponent

    {{--Упаковка изделий --}}
    @component('components.form.elements.form-item', ['title' => $constructor['packaging']['title'],'text' =>$constructor['packaging']['text'],'class' => 'radio singlerow'])
        @slot('content')
            @if(!empty($constructor['colors']['checkboxes']))
                @include('components.form.elements.checkboxes', ['items' => $constructor['packaging']['checkboxes'], 'name' => 'packaging', 'type' => 'radio'])
            @endif
        @endslot
    @endcomponent

    <div class="form__col_third">

        {{--К какой дате нужен тираж--}}
        @component('components.form.elements.form-item', ['title' => $constructor['delivery-date']['title'],'text' =>$constructor['delivery-date']['text']])
            @slot('content')
                @include('components.form.elements.input', [
                    'positionClass' => 'labelwrap_single',
                    'name' => 'delivery-date',
                    'label' => '01-01-' . date ( 'Y' ),
                ])
            @endslot
        @endcomponent

        {{--Город доставки--}}
        @component('components.form.elements.form-item', ['title' => $constructor['delivery-city']['title'],'text' =>$constructor['delivery-city']['text'] ])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'delivery-city',
                            'label' => $constructor['delivery-city']['name'] ])
            @endslot
        @endcomponent


        {{--Общий объем тиража--}}
        @component('components.form.elements.form-item', ['title' => $constructor['quantity-result']['title'],'class' => 'child__mrgn'])
            @slot('content')
                <div class="text text_large">
                    {!! $constructor['quantity-result']['text'] !!} <span class="quantity_result text text_large text_bold"></span>
                </div>
            @endslot
        @endcomponent

        {{-- Форма связи --}}
        @component('components.form.elements.form-item', ['title' => pll__('Ваше имя'),'class' => 'singlerow child__mrgn'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name'  => 'name',
                            'label' => pll__('Иван Иванов'),
                            'attr'  => 'required'])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => pll__('Ваш email'),'class' => 'singlerow child__mrgn'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'email_r',
                            'type' => 'email',
                            'label' => 'example@mail.com',
                             'attr' => 'required'])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => pll__('Ваш телефон'),'class' => 'singlerow child__mrgn'])
            @slot('content')
                @include('components.form.elements.input', [
                            'positionClass' => 'labelwrap_single',
                            'name' => 'phone',
                            'type' => 'tel',
                            'label' => '+7 (999) 999-99-99',
                             'attr' => 'required'])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => pll__('Файл или архив файлов, с которыми нужно поработать'),'class' => 'singlerow child__mrgn'])
            @slot('content')
                @include('components.form.elements.file', ['name'=>'Attached', 'id' => '1'])
            @endslot
        @endcomponent

        @component('components.form.elements.form-item', ['title' => pll__('Комментарий'),'text' => pll__('Любая дополнительная информация')])
            @slot('content')
                @include('components.form.elements.textarea', ['name' => 'information', 'label' => pll__('Ссылка на скачивание файлов (логотип, шрифты, макеты), реквизиты организации')])
            @endslot
        @endcomponent
        @include('components.form.elements.privacy', ['submit' => pll__('Рассчитать стоимость')])
    </div>
    <div id="result_form"></div>
</form>
