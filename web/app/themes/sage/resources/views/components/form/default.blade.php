<div class="title title_huge form__want">{{ $title or '' }}</div>
<form class="form mrgn35" method="POST">

    <div class="form__col form__col_double">
        <div class="singlerow singlerow_mrgn15">
            @include('components.form.elements.input', [
           'placeClass' => 'labelwrap_single',
           'type' => 'text',
           'name' => 'name',
           'label' => 'Фамилия Имя Отчество*'
         ])
        </div>

        <div class="dualrow dualrow_mrgn15">
            @include('components.form.elements.input', [
                  'placeClass' => 'labelwrap_dual',
                  'type' => 'tel',
                  'name' => 'phone',
                  'label' => 'Мобильный телефон*'
                ])

            @include('components.form.elements.input', [
            'placeClass' => 'labelwrap_dual',
            'type' => 'email',
            'name' => 'email',
            'label' => 'Электронная почта'
          ])
        </div>

        <div class="singlerow">
            @include('components.form.elements.input', [
         'placeClass' => 'labelwrap_single',
         'type' => 'text',
         'name' => 'birthday',
         'label' => 'Дата рождения*'
       ])
        </div>
    </div>

    <div class="form__col form__col_double">
        <div class="singlerow">
            @include('components.form.elements.textarea', [
               'placeClass' => 'labelwrap_single',
               'name' => 'additional',
               'label' => 'Расскажите о себе'
           ])
        </div>
    </div>

    <div class="singlerow_privacy singlerow_privacy_toright singlerow_privacy_managers">
        <div class="form__privacy form__privacy_right">
            Отправляя форму я соглашаюсь<br/> с <a class="form__privacy_link" href="/uslovija-peredachi-informacii">условиями
                передачи информации</a>
        </div>
        <input type="submit" class="submit" value="{{ $submit }}">
    </div>

</form>
