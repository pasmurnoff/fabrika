export const formRules = {
    rules: {
        'Имя': {
            required: true,
        },
        'ФИО': {
            required: true,
        },
        'Телефон': {
            required: true,
            minlength: 16,
        },
        'Описание': {
            required: true,
        },
        'email': {
            required: true,
        },
        'День Рождения': {
            required: true,
        },
        'Дополнительно': {
            required: true,
        },
    },
    messages: {
        'ФИО': {
            required: 'Введи своё имя',
        },
        'Телефон': {
            required: 'Введи свой телефон',
            minlength: 'Введи корректный номер телефона',
        },
        'email': {
            required: 'Введите ваш e-mail',
        },
        'День Рождения': {
            required: 'Введите дату',
        },
        'Дополнительно': {
            required: 'Заполните это поле',
        },
    },
}
