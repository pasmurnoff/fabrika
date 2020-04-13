function dynamicAnimate(elem) {
    elem.animate({opacity: 'toggle'}).delay(2000).animate({opacity: 'toggle'});
}

$(document).ready(function () {
    $('form.form').submit(
        function (e) {

            let $form = $(this),
                formData = new FormData($form.get(0));
            e.preventDefault();

            $.ajax({
                contentType: false, // важно - убираем форматирование данных по умолчанию
                processData: false, // важно - убираем преобразование строк по умолчанию
                url: '/app/themes/sage/resources/functions/ajax.php', //url страницы (action_ajax_form.php)
                type: 'POST', //метод отправки
                data: formData,  // Сеарилизуем объект
                success: function () { //Данные отправлены успешно
                    let $resultForm = $('<div class="result-message text text_success">Ваши данные успешно отправлены</div>').hide();
                    $('body').append($resultForm);
                    dynamicAnimate($resultForm);
                },
                error: function () { // Данные не отправлены
                    let $resultForm = $('<div class="result-message text text_dangerous">Что-то пошло не так, попробуйте в другой раз</div>').hide();
                    $('body').append($resultForm);
                    $resultForm.show('normal').delay(1000).animate({opacity: 'toggle'});
                },
            });

            return false;
        }
    )
    ;
});

