<div class="title title_large mrgn35-top">{!! $title or '' !!}</div>
<form class="form mrgn35" enctype="multipart/form-data" method="post">

    <div class="dualrow">
        @include('components.form.elements.input', [
            'positionClass' => 'labelwrap_dual',
            'type' => 'text',
            'name' => 'review_author',
            'label' => pll__('Ваше имя'),
            'attr'  => 'required',
        ])

        @include('components.form.elements.input', [
            'positionClass' => 'labelwrap_dual',
            'type' => 'text',
            'name' => 'review_rating',
            'label' => 'Ваша оценка',
      ])
    </div>



    @component('components.form.elements.form-item', ['title' => 'Сюда нужно прикрепить фото изделия, которое мы для Вас связали', 'class' => 'singlerow child__mrgn'])
        @slot('content')
            @include('components.form.elements.file', ['name'=>'review_image', 'id' => 'review_image'])
        @endslot
    @endcomponent

    @component('components.form.elements.form-item', ['title' => 'Ваш отзыв:', 'titleClass' => 'title_middle title_thin pdng15-bottom'])
        @slot('content')
            @include('components.form.elements.textarea', ['name' => 'review_body'])
        @endslot
    @endcomponent

    @include('components.form.elements.privacy', ['submit' => 'Отправить'])
</form>
