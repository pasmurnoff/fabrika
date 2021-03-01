<div class="title title_huge" id="{{$id or ''}}">{{ $title or '' }}</div>
@isset($text)
    <div class="pdng15-top">
        <div class="text">
            {{ $text }}
        </div>
    </div>
@endisset
<form class="form mrgn35" method="POST">
    <div class="form_single">
        <div class="form__col form__col_double">
            <div class="singlerow singlerow_mrgn15">
                @include('components.form.elements.input', [
               'positionClass' => 'labelwrap_single',
               'type' => 'text',
               'name' => 'ФИО',
               'label' => 'Фамилия Имя Отчество*'
             ])
            </div>

            <div class="dualrow">
                <div class="dualrow">
                    @include('components.form.elements.input', [
                          'positionClass' => 'labelwrap_dual',
                          'type' => 'tel',
                          'name' => 'Телефон',
                          'label' => 'Мобильный телефон*'
                        ])

                    @include('components.form.elements.input', [
                    'positionClass' => 'labelwrap_dual',
                    'type' => 'email',
                    'name' => 'email',
                    'label' => 'Электронная почта'
                  ])
                </div>
                <div class="singlerow">
                    @include('components.form.elements.input', [
                 'positionClass' => 'labelwrap_single',
                 'type' => 'text',
                 'name' => 'День Рождения',
                 'label' => 'Дата рождения*'
               ])
                </div>
            </div>
        </div>
        <div class="form__col form__col_double">
            @include('components.form.elements.textarea', [
      'textareaClass' => 'textarea_large',
      'positionClass' => 'labelwrap_single textarea_large',
      'name' => 'Дополнительно',
      'label' => 'Любая дополнительная информация'
  ])
        </div>

    </div>

    @include('components.form.elements.privacy')

</form>
