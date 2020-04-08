<div class="title title_huge">{{ $title or '' }}</div>
<form class="form mrgn35" method="POST">
    <div class="form_single">
        <div class="form__col form__col_double">
            <div class="singlerow singlerow_mrgn15">
                @include('components.form.elements.input', [
               'positionClass' => 'labelwrap_single',
               'type' => 'text',
               'name' => 'name',
               'label' => 'Фамилия Имя Отчество*'
             ])
            </div>

            <div class="dualrow">
                <div class="dualrow">
                    @include('components.form.elements.input', [
                          'positionClass' => 'labelwrap_dual',
                          'type' => 'tel',
                          'name' => 'phone',
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
                 'name' => 'birthday',
                 'label' => 'Дата рождения*'
               ])
                </div>
            </div>
        </div>
        <div class="form__col form__col_double">
            @include('components.form.elements.textarea', [
      'textareaClass' => 'textarea_large',
      'positionClass' => 'labelwrap_single textarea_large',
      'name' => 'additional',
      'label' => 'Любая дополнительная информация'
  ])
        </div>

    </div>

    @include('components.form.elements.privacy')

</form>
