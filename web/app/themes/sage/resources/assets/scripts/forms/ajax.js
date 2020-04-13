$(document).ready(function () {
    $('.submit').submit(
        function () {
            sendAjaxForm('action_ajax_form.php');
            return false;
        }
    );
});

function sendAjaxForm(url) {
    $.ajax({
        url: url, //url страницы (action_ajax_form.php)
        type: 'POST', //метод отправки
        dataType: 'html', //формат данных
        data: $('.form').serialize(),  // Сеарилизуем объект
        success: function () { //Данные отправлены успешно
            let $resultForm = $('<div class="result-message hidden text text_success">Ваши данные успешно отправлены</div>').hide();
            $('body').append($resultForm);
            $resultForm.show('normal');
        },
        error: function () { // Данные не отправлены
            let $resultForm = $('<div class="result-message hidden text text_dangerous">К сожалению что-то пошло не так</div>').hide();
            $('body').append($resultForm);
            $resultForm.show('normal');
        },
    });
}