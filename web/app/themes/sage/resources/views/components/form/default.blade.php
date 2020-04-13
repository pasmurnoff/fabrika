<div class="title title_huge" id="{{$id or ''}}">{{ $title or '' }}</div>
@isset($text)
    <div class="pdng15-top">
        <div class="text">
            {{ $text }}
        </div>
    </div>
@endisset
<form class="form mrgn35" method="POST" action="<?php echo admin_url('admin-ajax.php?action=send_mail') ?>">
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
