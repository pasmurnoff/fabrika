<form class="form mrgn35" method="POST">

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

    @include('components.form.elements.privacy')
</form>
