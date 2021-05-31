{{--
Template Name: Контакты
--}}

@extends('layouts.app')
@section('content')
    @include('components.writeus.writeus')
    @component('components.form.elements.form-item',
        ['class' => 'mrgn35-top', 'title' => pll__('Написать директору ООО "Фабрика Носков"'), 'titleClass' => 'title_huge', 'textClass' => 'pdng15-top pdng35-bottom'])
        @slot('text')
            {{ pll__('Хотите связаться с директором? Отправьте сообщение с подробным описанием по форме ниже.') }}
        @endslot
        @slot('content')
            <form class="form" method="post">
                <div class="form_single">
                    <div class="form__col form__col_double">
                        <div class="dualrow">
                            @include('components.form.elements.input', [
                                  'positionClass' => 'labelwrap_dual',
                                  'type' => 'tel',
                                  'name' => 'Телефон',
                                  'attr' => 'required',
                                  'label' => pll__('Мобильный телефон') . '*'
                                ])

                            @include('components.form.elements.input', [
                                'positionClass' => 'labelwrap_dual',
                                'type' => 'text',
                                'name' => 'Имя',
                                'attr' => 'required',
                                'label' => pll__('Ваше имя') . '*'
                              ])
                        </div>
                        <div class="dualrow">
                            @include('components.form.elements.input', [
                           'positionClass' => 'labelwrap_dual',
                           'type' => 'email',
                           'name' => 'Email',
                           'attr' => 'required',
                           'label' => pll__('Электронная почта') . '*'
                         ])
                            @include('components.form.elements.input', [
                           'positionClass' => 'labelwrap_dual',
                           'type' => 'text',
                           'name' => 'Тема',
                           'label' => pll__('Тема письма')
                         ])
                        </div>
                    </div>
                    <div class="form__col form__col_double">
                        @include('components.form.elements.textarea', [
                              'textareaClass' => 'textarea_large',
                              'positionClass' => 'labelwrap_single textarea_large',
                              'name' => 'Описание',
                              'label' => pll__('Описание вашего вопроса')
                          ])
                    </div>
                </div>
                <input type="hidden" name="director">
                @include('components.form.elements.privacy')
            </form>
        @endslot
    @endcomponent

    @while(have_posts()) @php the_post() @endphp
        <div class="the-content the-content__none-decoration">
            @php the_content() @endphp
        </div>
    @endwhile

    @php
        $contacts = get_field('contacts_addresses', get_the_ID());
    @endphp

    @if($contacts)
        <div class="points points_contact mrgn15-top">
            @foreach($contacts AS $contact)
                @php
                    $phone = $contact['phone'] ? $contact['phone'] : $contacts[0]['phone'];
                    $country = $contact['country'] ? $contact['country'] : $contacts[0]['country'];
                @endphp
                @include('components.contacts-addresses.item', [ 'contact' => $contact, 'phone' => $phone, 'country' => $country ])
            @endforeach
        </div>
    @endif

    {{-- @php bullshit1() @endphp--}}
    {{--@php bullshit2() @endphp--}}
@endsection
