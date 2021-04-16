import 'jquery-validation/dist/jquery.validate';

function dynamicAnimate(elem) {
    elem.animate({opacity: 'toggle'}).delay(2000).animate({opacity: 'toggle'});
}

$(document).ready(function () {
    $('form.form').validate({
        errorClass: 'form-error',
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

        submitHandler: function (form) {
            let formData = new FormData(form);
            $.ajax({
                contentType: false, // важно - убираем форматирование данных по умолчанию
                processData: false, // важно - убираем преобразование строк по умолчанию
                url: window.wp_data.ajax_url + '?action=send_mail',
                type: 'POST', //метод отправки
                data: formData,  // Сеарилизуем объект
                success: function () { //Данные отправлены успешно
                    let $resultForm = $('<div class="result-message text text_success">Ваше сообщение было успешно отправлено.\n' +
                        'Mы свяжемся с Вами в ближайшее время.</div>').hide();
                    $('body').append($resultForm);
                    dynamicAnimate($resultForm);
                },
                error: function () { // Данные не отправлены
                    let $resultForm = $('<div class="result-message text text_dangerous">Что-то пошло не так, попробуйте в другой раз</div>').hide();
                    $('body').append($resultForm);
                    dynamicAnimate($resultForm);
                },
            });

            return false;
        },
    });
});