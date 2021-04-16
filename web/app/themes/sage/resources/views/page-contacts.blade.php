{{--
Template Name: Контакты
--}}

@extends('layouts.app')
@section('content')
    @include('components.writeus.writeus')
    @component('components.form.elements.form-item',
        ['class' => 'mrgn35-top', 'title' => __('Написать директору ООО "Фабрика Носков"', 'sage'), 'titleClass' => 'title_huge', 'textClass' => 'pdng15-top pdng35-bottom'])
        @slot('text')
            {{ __('Хотите связаться с директором? Отправьте сообщение с подробным описанием по форме ниже.', 'sage') }}
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
                                  'label' => __('Мобильный телефон', 'sage') . '*'
                                ])

                            @include('components.form.elements.input', [
                                'positionClass' => 'labelwrap_dual',
                                'type' => 'text',
                                'name' => 'Имя',
                                'attr' => 'required',
                                'label' => __('Ваше имя', 'sage') . '*'
                              ])
                        </div>
                        <div class="dualrow">
                            @include('components.form.elements.input', [
                           'positionClass' => 'labelwrap_dual',
                           'type' => 'email',
                           'name' => 'Email',
                           'attr' => 'required',
                           'label' => __('Электронная почта', 'sage') . '*'
                         ])
                            @include('components.form.elements.input', [
                           'positionClass' => 'labelwrap_dual',
                           'type' => 'text',
                           'name' => 'Тема',
                           'label' => __('Тема письма', 'sage')
                         ])
                        </div>
                    </div>
                    <div class="form__col form__col_double">
                        @include('components.form.elements.textarea', [
                              'textareaClass' => 'textarea_large',
                              'positionClass' => 'labelwrap_single textarea_large',
                              'name' => 'Описание',
                              'label' => __('Описание вашего вопроса', 'sage')
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
