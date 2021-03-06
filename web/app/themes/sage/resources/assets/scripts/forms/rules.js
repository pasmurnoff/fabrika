export const formRules = {
    rules: {
        'name': {
            required: true,
        },
        'one-model-quantity': {
            max: false,
        },
        'Имя': {
            required: true,
        },
        'ФИО': {
            required: true,
        },
        'phone': {
            required: true,
            minlength: 16,
        },
        'Телефон': {
            required: true,
            minlength: 16,
        },
        'email_r': {
            required: true,
        },
        'additional': {
            required: true,
        },
        'Дополнительно': {
            required: true,
        },
        'Описание': {
            required: true,
        },
        'review_author': {
            required: true,
        },
        'review_rating': {
            required: true,
        },
        'review_body': {
            required: true,
        },
        'review_images[]': {
            required: true,
            //filesize: 5242880, // 5 MB
            //extension: 'xls|csv',
        },
    },
    messages: {
        'name': {
            required: 'Введите своё имя',
        },
        'Имя': {
            required: 'Введите своё имя',
        },
        'ФИО': {
            required: 'Введите своё имя',
        },
        'phone': {
            required: 'Введите свой телефон',
            minlength: 'Введи корректный номер телефона',
        },
        'Телефон': {
            required: 'Введите свой телефон',
            minlength: 'Введи корректный номер телефона',
        },
        'email_r': {
            required: 'Введите ваш e-mail',
        },
        'additional': {
            required: 'Заполните это поле',
        },
        'Дополнительно': {
            required: 'Заполните это поле',
        },
        'Описание': {
            required: 'Заполните это поле',
        },
        'review_author': {
            required: 'Введите своё имя',
        },
        'review_rating': {
            required: 'Поставьте оценку',
        },
        'review_body': {
            required: 'Введите свой отзыв',
        },
        'review_images[]': {
            required: 'Добавьте изображение',
        },
    },
    errorPlacement: function (error, element) {
        if ( element.is(':radio') ) {
            error.insertAfter(element.parents('.radioInputValidate'));
        } else { // для всех остальных оставляем прежние правила
            error.insertAfter(element);
        }
    },
}
