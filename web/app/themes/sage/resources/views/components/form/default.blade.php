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
               'label' => __('Фамилия Имя Отчество', 'sage') . '*'
             ])
            </div>

            <div class="dualrow">
                <div class="dualrow">
                    @include('components.form.elements.input', [
                          'positionClass' => 'labelwrap_dual',
                          'type' => 'tel',
                          'name' => 'Телефон',
                          'label' => __('Мобильный телефон', 'sage') . '*'
                        ])

                    @include('components.form.elements.input', [
                    'positionClass' => 'labelwrap_dual',
                    'type' => 'email',
                    'name' => 'email',
                    'label' => __('Электронная почта', 'sage')
                  ])
                </div>
                <div class="singlerow">
                    @include('components.form.elements.input', [
                 'positionClass' => 'labelwrap_single',
                 'type' => 'text',
                 'name' => 'День Рождения',
                 'label' => __('Дата рождения', 'sage') . '*'
               ])
                </div>
            </div>
        </div>
        <div class="form__col form__col_double">
            @include('components.form.elements.textarea', [
      'textareaClass' => 'textarea_large',
      'positionClass' => 'labelwrap_single textarea_large',
      'name' => 'Дополнительно',
      'label' => __('Любая дополнительная информация', 'sage')
  ])
        </div>

    </div>

    @include('components.form.elements.privacy')

</form>
