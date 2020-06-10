{{--
Template Name: Помощь сотрудникам
--}}

@extends('layouts.app')

@section('content')
    <div class="cards">
        @component('components.card.wrap', ['bgc' => '#F82F2F','title' => 'Готовые изделия', 'href' => '#', 'buttonText' => 'Разместить заказ'])
            @slot('text')
                Разместить заказ на продажу оптом готовых изделий
            @endslot
            @slot('img')
                @include('icon::sotrudnik.sales')
            @endslot
        @endcomponent

        @component('components.card.wrap', ['bgc' => '#7F25FC', 'title' => 'Продукция на заказ', 'href' => '/forma-zakaza-produkcii', 'buttonText' => 'Разместить заказ'])
            @slot('text')
                Разместить заказ на производство носков или колготок "Под заказ"
            @endslot
            @slot('img')
                @include('icon::sotrudnik.nazakaz')
            @endslot
        @endcomponent

        @component('components.card.wrap', ['bgc' => '#31D665', 'title' => 'Выставить счет на оплату', 'href' => '#', 'buttonText' => 'Выставить счет'])
            @slot('text')
                Если вы знаете сумму заказа, вы можете выставить счет на оплату
            @endslot
            @slot('img')
                @include('icon::sotrudnik.naoplatu')
            @endslot
        @endcomponent

        @component('components.card.wrap', ['bgc' => '#FFA523','title' => 'Договор на поставку', 'href' => '#', 'buttonText' => 'Получить договор'])
            @slot('text')
                Оформить договор на поставку продукции оптом
            @endslot
            @slot('img')
                @include('icon::sotrudnik.dogovor')
            @endslot
        @endcomponent

        @component('components.card.wrap', ['bgc' => '#1771e6','title' => 'Договор на изготовление под заказ', 'href' => '#', 'buttonText' => 'Получить договор'])
            @slot('text')
                Оформить договор на изготовление по собственному дизайну заказчика
            @endslot
            @slot('img')
                @include('icon::sotrudnik.dogovor')
            @endslot
        @endcomponent
    </div>

    <form class="form form_employee" method="post">
        <div class="form__col_third">
            <div class="title title_large mrgn35">Рассчитать стоимость носков или колготок</div>
            @component('components.form.elements.form-item', ['title' => 'Данные менеджера'])
                @slot('content')
                    <div class="dualrow mrgn15-top">
                        @include('components.form.elements.input',[
                      'positionClass' => 'labelwrap_dual',
                      'name' => 'name',
                      'label' => 'Ваше имя*'
                      ])
                        @include('components.form.elements.input',[
                            'positionClass' => 'labelwrap_dual',
                            'name' => 'phone',
                            'label' => 'Ваш телефон*'
                            ])
                    </div>
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => 'Данные клиента'])
                @slot('content')
                    <div class="dualrow mrgn15-top">
                        @include('components.form.elements.input',[
                          'positionClass' => 'labelwrap_dual',
                          'name' => 'client-name',
                          'label' => 'Имя лица, принимающего решение'
                          ])
                        @include('components.form.elements.input',[
                            'positionClass' => 'labelwrap_dual',
                            'name' => 'client-phone',
                            'label' => 'Телефон лица, принимающего решение'
                            ])
                        @include('components.form.elements.input',[
                         'positionClass' => 'labelwrap_single',
                         'name' => 'client-fio',
                         'label' => 'Наименование юр лица или ФИО заказчика'
                         ])
                        @include('components.form.elements.input',[
                       'positionClass' => 'labelwrap_single',
                       'name' => 'client-inn',
                       'label' => 'ИНН юр лица или физ лица заказчика'
                       ])
                    </div>
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => 'Заказываем'])
                @slot('content')
                    @include('components.form.elements.sku', [
                        'positionClass' => 'mrgn15-top sku__element',
                       'name' => 'productSKU[]',
                       'label' => 'Артикул'
                        ])
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => 'Дополнительная информация'])
                @slot('content')
                    @include('components.form.elements.textarea',[
                        'positionClass' => 'mrgn15-top',
                        'name' => 'description',
                        'label' => 'Расскажите о себе'
                        ])

                @endslot
            @endcomponent
            @include('components.form.elements.privacy')
        </div>
    </form>
@endsection
