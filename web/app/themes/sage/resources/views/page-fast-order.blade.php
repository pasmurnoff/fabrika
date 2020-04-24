{{--
    Template Name: Быстрая заявка
--}}

@extends('layouts.app')
@section('content')
    <div class="title title_huge">Оставьте заявку для связи</div>
    <div class="pdng15-top">
        <div class="text">
            Перезвоним вам в ближайшее время и оформим доставку вашего товара
        </div>
    </div>
    <form action="" method="post" class="form mrgn35">
        <div class="form__col form__col_double">
            <div class="dualrow">
                @include('components.form.elements.input', [
                      'positionClass' => 'labelwrap_dual',
                      'type' => 'text',
                      'name' => 'Имя',
                      'label' => 'Ваше имя*',
                      'attr' => 'required'
                    ])

                @include('components.form.elements.input', [
                      'positionClass' => 'labelwrap_dual',
                      'type' => 'tel',
                      'name' => 'Телефон',
                      'label' => 'Мобильный телефон*',
                      'attr' => 'required'
                    ])
            </div>
            <div class="singlerow">
                @include('components.form.elements.input', [
                  'positionClass' => 'labelwrap_single',
                  'type' => 'email',
                  'name' => 'Email',
                  'label' => 'Электронная почта',

                ])
            </div>
        </div>
        <div class="form__col form__col_double">
            @include('components.form.elements.textarea', [
      'textareaClass' => 'textarea_large',
      'positionClass' => 'labelwrap_single textarea_large',
      'name' => 'Дополнительно',
      'label' => 'Опишите коротко, что именно вас интересует'
  ])
        </div>
        @include('components.form.elements.privacy')
    </form>

@endsection