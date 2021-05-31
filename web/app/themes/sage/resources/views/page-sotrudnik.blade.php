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
            <div class="title title_large mrgn35">{{ pll__('Рассчитать стоимость носков или колготок') }}</div>
            @component('components.form.elements.form-item', ['title' => pll__('Данные менеджера')])
                @slot('content')
                    <div class="dualrow mrgn15-top">
                        @include('components.form.elements.input',[
                      'positionClass' => 'labelwrap_dual',
                      'name' => 'name',
                      'label' => pll__('Ваше имя') . '*'
                      ])
                        @include('components.form.elements.input',[
                            'positionClass' => 'labelwrap_dual',
                            'name' => 'phone',
                            'label' => pll__('Ваш телефон') . '*'
                            ])
                    </div>
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => pll__('Данные клиента')])
                @slot('content')
                    <div class="dualrow mrgn15-top">
                        @include('components.form.elements.input',[
                          'positionClass' => 'labelwrap_dual',
                          'name' => 'client-name',
                          'label' => pll__('Имя лица, принимающего решение')
                          ])
                        @include('components.form.elements.input',[
                            'positionClass' => 'labelwrap_dual',
                            'name' => 'client-phone',
                            'label' => pll__('Телефон лица, принимающего решение')
                            ])
                        @include('components.form.elements.input',[
                         'positionClass' => 'labelwrap_single',
                         'name' => 'client-fio',
                         'label' => pll__('Наименование юр лица или ФИО заказчика')
                         ])
                        @include('components.form.elements.input',[
                       'positionClass' => 'labelwrap_single',
                       'name' => 'client-inn',
                       'label' => pll__('ИНН юр лица или физ лица заказчика')
                       ])
                    </div>
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => pll__('Заказываем')])
                @slot('content')
                    @include('components.form.elements.sku', [
                        'positionClass' => 'mrgn15-top sku__element',
                       'name' => 'productSKU[]',
                       'label' => pll__('Артикул')
                        ])
                @endslot
            @endcomponent
            @component('components.form.elements.form-item', ['title' => pll__('Дополнительная информация')])
                @slot('content')
                    @include('components.form.elements.textarea',[
                        'positionClass' => 'mrgn15-top',
                        'name' => 'description',
                        'label' => pll__('Расскажите о себе')
                        ])

                @endslot
            @endcomponent
            @include('components.form.elements.privacy')
        </div>
    </form>
@endsection
