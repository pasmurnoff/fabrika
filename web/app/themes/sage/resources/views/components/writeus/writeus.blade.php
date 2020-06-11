<div class="title title_huge">Написать на Фабрику Носков</div>
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

    @include('components.form.elements.privacy')
</form>
