<div class="title title_large mrgn35-top">{!! $title or '' !!}</div>
<form class="form mrgn35" enctype="multipart/form-data" method="post" data-ajax-action="send_review">

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

        @include('components.form.elements.input', [
            'positionClass' => 'labelwrap_dual',
            'type' => 'text',
            'name' => 'review_position',
            'label' => 'Должность',
        ])

        @include('components.form.elements.input', [
            'positionClass' => 'labelwrap_dual',
            'type' => 'text',
            'name' => 'review_organization',
            'label' => 'Организация',
        ])

        @include('components.form.elements.textarea', [
            'positionClass' => 'labelwrap_single',
            'name' => 'review_body',
            'label' => 'Ваш отзыв',
        ])
    </div>

    @component('components.form.elements.form-item', ['title' => 'Сюда нужно прикрепить фото изделия, которое мы для Вас связали', 'class' => 'singlerow child__mrgn'])
        @slot('content')
            @include('components.form.elements.file', ['name'=>'review_image', 'id' => 'review_image'])
        @endslot
    @endcomponent

    @include('components.form.elements.privacy', ['submit' => 'Отправить'])
</form>