{{--
Template Name: Помощь сотрудникам
--}}

@extends('layouts.app')

@section('content')
    @php
        $for_worker = get_field('for_worker');
    @endphp
    @if($for_worker)
        <div class="cards">
            @foreach($for_worker as $card)
                @component('components.card.wrap', [
                            'bgc' => $card['background'],
                            'title' => $card['title'],
                            'href' => $card['link']['url'] ?? '#',
                            'buttonText' => $card['link']['title'] ?? 'Заказать',
                        ])
                    @slot('text')
                        {!! $card['text'] or '' !!}
                    @endslot
                    @slot('img')
                        @if($card['icon'])
                            @include('icon::sotrudnik.' .  $card['icon'])
                        @else
                            @include('icon::sotrudnik.dogovor')
                        @endif
                    @endslot
                @endcomponent
            @endforeach
        </div>
    @endif

    <form class="form form_employee" method="post">
        <div class="form__col_third">
            <div class="title title_large mrgn35">{{ __('Рассчитать стоимость носков или колготок', 'sage') }}</div>
            @component('components.form.elements.form-item', ['title' => __('Данные менеджера', 'sage')])
                @slot('content')
                    <div class="dualrow mrgn15-top">
                        @include('components.form.elements.input',[
                      'positionClass' => 'labelwrap_dual',
                      'name' => 'name',
                      'label' => __('Ваше имя', 'sage') . '*'
                      ])
                        @include('components.form.elements.input',[
                            'positionClass' => 'labelwrap_dual',
                            'name' => 'phone',
                            'label' => __('Ваш телефон', 'sage') . '*'
                            ])
                    </div>
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => __('Данные клиента', 'sage') ])
                @slot('content')
                    <div class="dualrow mrgn15-top">
                        @include('components.form.elements.input',[
                          'positionClass' => 'labelwrap_dual',
                          'name' => 'client-name',
                          'label' => __('Имя лица, принимающего решение', 'sage')
                          ])
                        @include('components.form.elements.input',[
                            'positionClass' => 'labelwrap_dual',
                            'name' => 'client-phone',
                            'label' => __('Телефон лица, принимающего решение', 'sage')
                            ])
                        @include('components.form.elements.input',[
                         'positionClass' => 'labelwrap_single',
                         'name' => 'client-fio',
                         'label' => __('Наименование юр лица или ФИО заказчика', 'sage')
                         ])
                        @include('components.form.elements.input',[
                       'positionClass' => 'labelwrap_single',
                       'name' => 'client-inn',
                       'label' => __('ИНН юр лица или физ лица заказчика', 'sage')
                       ])
                    </div>
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => __('Заказываем', 'sage') ])
                @slot('content')
                    @include('components.form.elements.sku', [
                        'positionClass' => 'mrgn15-top sku__element',
                       'name' => 'productSKU[]',
                       'label' => __('Артикул', 'sage')
                        ])
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => __('Дополнительная информация', 'sage') ])
                @slot('content')
                    @include('components.form.elements.textarea',[
                        'positionClass' => 'mrgn15-top',
                        'name' => 'description',
                        'label' => __('Расскажите о себе', 'sage')
                        ])

                @endslot
            @endcomponent
            @include('components.form.elements.privacy')
        </div>
    </form>
@endsection
