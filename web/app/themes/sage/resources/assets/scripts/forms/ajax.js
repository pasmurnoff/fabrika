import 'jquery-validation/dist/jquery.validate';
import {formRules} from './rules';

function dynamicAnimate(elem) {
    elem.animate({opacity: 'toggle'}).delay(2000).animate({opacity: 'toggle'});
}

$(document).ready(function () {
    $('form.form').validate({
        errorClass: 'form-error',
        ...formRules,
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