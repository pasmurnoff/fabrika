<div class="title title_huge">Напишите нам</div>
<div class="pdng15-top pdng35-bottom">
    <div class="text">
        Если у вас есть вопрос, предложение или замечание относительно нашей работы, вы можете воспользоваться формой
        для
        связи с нами.
    </div>
</div>
<form class="form" method="POST">

    <div class="dualrow">
        @include('components.form.elements.input', [
                    'positionClass' => 'labelwrap_dual',
                    'type' => 'text',
                    'name' => 'name',
                    'label' => 'Фамилия Имя Отчество*'
                 ])
        @include('components.form.elements.input', [
                    'positionClass' => 'labelwrap_dual',
                    'type' => 'text',
                    'name' => 'email',
                    'label' => 'Email'
                  ])

        @include('components.form.elements.input', [
              'positionClass' => 'labelwrap_single',
              'type' => 'text',
              'name' => 'theme',
              'label' => 'Тема (необязательно)'
          ])

        @include('components.form.elements.textarea', [
              'positionClass' => 'labelwrap_single',
              'name' => 'additional',
              'label' => 'Задайте ваш вопрос'
          ])
    </div>

    <div class="singlerow_privacy">
        <input type="submit" class="submit" value="Отправить">
        <div class="form__privacy form__privacy_left">
            Отправляя форму я соглашаюсь<br/> с <a class="form__privacy_link" href="/uslovija-peredachi-informacii">условиями
                передачи информации</a>
        </div>
    </div>
</form>
