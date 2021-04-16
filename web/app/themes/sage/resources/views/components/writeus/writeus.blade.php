<div class="title title_huge">{{ __('Написать на Фабрику Носков', 'sage') }}</div>
<div class="pdng15-top pdng35-bottom">
    <div class="text">
        {{ __('Если у вас есть вопрос, предложение или замечание относительно нашей работы, вы можете воспользоваться формой для связи с нами.', 'sage') }}
    </div>
</div>
<form class="form" method="POST">

    <div class="dualrow">
        @include('components.form.elements.input', [
                    'positionClass' => 'labelwrap_dual',
                    'type' => 'text',
                    'name' => 'name',
                    'label' => __('Фамилия Имя Отчество', 'sage') . '*'
                 ])
        @include('components.form.elements.input', [
                    'positionClass' => 'labelwrap_dual',
                    'type' => 'text',
                    'name' => 'email',
                    'label' => __('Электронная почта', 'sage')
                  ])

        @include('components.form.elements.input', [
              'positionClass' => 'labelwrap_single',
              'type' => 'text',
              'name' => 'theme',
              'label' => __('Тема (необязательно)', 'sage')
          ])

        @include('components.form.elements.textarea', [
              'positionClass' => 'labelwrap_single',
              'name' => 'additional',
              'label' => __('Задайте ваш вопрос', 'sage')
          ])
    </div>

    @include('components.form.elements.privacy')
</form>
