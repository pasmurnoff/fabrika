<div class="title title_huge">Напишите нам</div>
<div class="block-text">
    <div class="block-text__text block-text__text_padding-away">
        Если у вас есть вопрос, предложение или замечание относительно нашей работы, вы можете воспользоваться формой
        для
        связи с нами.
    </div>
</div>
<form class="form" method="POST">

    <div class="dualrow dualrow_mrgn15">
        @include('components.form.elements.input', [
                    'placeClass' => 'labelwrap_dual',
                    'type' => 'text',
                    'name' => 'name',
                    'label' => 'Фамилия Имя Отчество*'
                 ])
        @include('components.form.elements.input', [
                    'placeClass' => 'labelwrap_dual',
                    'type' => 'text',
                    'name' => 'email',
                    'label' => 'Email'
                  ])
    </div>

    <div class="singlerow singlerow_mrgn15">
        @include('components.form.elements.input', [
                    'placeClass' => 'labelwrap_single',
                    'type' => 'text',
                    'name' => 'theme',
                    'label' => 'Тема (необязательно)'
                ])
    </div>

    <div class="singlerow singlerow_mrgn15">
        @include('components.form.elements.textarea', [
                    'placeClass' => 'labelwrap_single',
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
