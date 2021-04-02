{{--
Template Name: Контакты
--}}

@extends('layouts.app')
@section('content')
    @include('components.writeus.writeus')
    @component('components.form.elements.form-item',
        ['class' => 'mrgn35-top', 'title' => 'Написать директору ООО "Фабрика Носков"', 'titleClass' => 'title_huge', 'textClass' => 'pdng15-top pdng35-bottom'])
        @slot('text')
            Хотите связаться с директором? Отправьте сообщение с подробным описанием по форме ниже.
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
                                  'label' => 'Мобильный телефон*'
                                ])

                            @include('components.form.elements.input', [
                                'positionClass' => 'labelwrap_dual',
                                'type' => 'text',
                                'name' => 'Имя',
                                'attr' => 'required',
                                'label' => 'Ваше имя*'
                              ])
                        </div>
                        <div class="dualrow">
                            @include('components.form.elements.input', [
                           'positionClass' => 'labelwrap_dual',
                           'type' => 'email',
                           'name' => 'Email',
                           'attr' => 'required',
                           'label' => 'Электронная почта*'
                         ])
                            @include('components.form.elements.input', [
                           'positionClass' => 'labelwrap_dual',
                           'type' => 'text',
                           'name' => 'Тема',
                           'label' =>'Тема письма'
                         ])
                        </div>
                    </div>
                    <div class="form__col form__col_double">
                        @include('components.form.elements.textarea', [
                              'textareaClass' => 'textarea_large',
                              'positionClass' => 'labelwrap_single textarea_large',
                              'name' => 'Описание',
                              'label' => 'Описание вашего вопроса'
                          ])
                    </div>
                </div>
                <input type="hidden" name="director">
                @include('components.form.elements.privacy')
            </form>
        @endslot
    @endcomponent

    <div class="title title_large">Горячая линия</div>
    <div class="pdng15 text">
        <span class="text_bold">Телефон:</span> <a class="text_link" href="tel:88004441156">8 800 444 11 56</a><br/>
        <span class="text_bold">Почта:</span> <a class="text_link" href="mailto@mail@fabrikanoskov.ru">mail@fabrikanoskov.ru</a>
    </div>

    @php
        $contacts = get_field('contacts_addresses', get_the_ID());
    @endphp

    <div class="points points_contact mrgn15-top">
        @foreach($contacts AS $contact)
            @php
                $phone = $contact['phone'] ? $contact['phone'] : $contacts[0]['phone'];
                $country = $contact['country'] ? $contact['country'] : $contacts[0]['country'];
            @endphp
            @include('components.contacts-addresses.item', [ 'contact' => $contact, 'phone' => $phone, 'country' => $country ])
        @endforeach
    </div>

    {{-- @php bullshit1() @endphp--}}
    {{--@php bullshit2() @endphp--}}
@endsection
