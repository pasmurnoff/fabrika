<form class="form mrgn35" enctype="multipart/form-data" method="post">

    @component('components.form.elements.form-item', ['title' => 'Выберите тип консультации','class' => 'radio singlerow'])
        @slot('content')
            @include('components.form.elements.radio', ['name' => 'Тип-связи', 'value' => 'Видеоконсультация из магазина Фабрика Носков'])
            @include('components.form.elements.radio', ['name' => 'Тип-связи', 'value' => 'Аудиозвонок специалиста Фабрика Носков', 'attr' => 'checked="checked"'])
        @endslot
    @endcomponent

    @component('components.form.elements.form-item', ['title' => 'Выберите приложение','class' => 'radio singlerow'])
        @slot('content')
            @include('components.form.elements.radio', ['name' => 'Приложение', 'value' => 'FaceTime'])
            @include('components.form.elements.radio', ['name' => 'Приложение', 'value' => 'WhatsApp', 'attr' => 'checked="checked"'])
        @endslot
    @endcomponent

    @component('components.form.elements.form-item2', ['title' => 'Ваше имя','class' => 'singlerow child__mrgn'])
        @slot('content')
            @include('components.form.elements.input', [
                        'positionClass' => 'labelwrap_single',
                        'name' => 'Имя',
                        'label' => 'Иван Иванов',
                         'attr' => 'required'])
                <input type="hidden" name="Артикул" value="{!! $product->get_sku() !!}">
        @endslot
    @endcomponent

    @component('components.form.elements.form-item2', ['title' => 'Ваш email','class' => 'singlerow child__mrgn'])
        @slot('content')
            @include('components.form.elements.input', [
                        'positionClass' => 'labelwrap_single',
                        'name' => 'email',
                        'type' => 'email',
                        'label' => 'primer@mail.ru',
                         'attr' => 'required'])
        @endslot
    @endcomponent

    @component('components.form.elements.form-item2', ['title' => 'Ваш телефон','class' => 'singlerow child__mrgn'])
        @slot('content')
            @include('components.form.elements.input', [
                        'positionClass' => 'labelwrap_single',
                        'name' => 'Телефон',
                        'type' => 'tel',
                        'label' => '+7 (999) 999-99-99',
                         'attr' => 'required'])
        @endslot
    @endcomponent

    @include('components.form.elements.privacy', ['submit' => 'Отправить заявку'])
    <div id="result_form"></div>
</form>