function dynamicAnimate(elem) {
    elem.animate({opacity: 'toggle'}).delay(2000).animate({opacity: 'toggle'});
}

$(document).ready(function () {
    $('form.form').submit(
        function (e) {
            console.log($(this));
            let $form = $(this);
            e.preventDefault();
            $.ajax({
                url: '/app/themes/sage/resources/functions/ajax.php', //url страницы (action_ajax_form.php)
                type: 'POST', //метод отправки
                data: $form.serialize(),  // Сеарилизуем объект
                success: function () { //Данные отправлены успешно
                    let $resultForm = $('<div class="result-message text text_success">Ваши данные успешно отправлены</div>').hide();
                    $('body').append($resultForm);
                    dynamicAnimate($resultForm);
                },
                error: function () { // Данные не отправлены
                    let $resultForm = $('<div class="result-message text text_dangerous">К сожалению что-то пошло не так</div>').hide();
                    $('body').append($resultForm);
                    $resultForm.show('normal').delay(1000).animate({opacity: 'toggle'});
                },
            });
            return false;
        }
    )
    ;
});

