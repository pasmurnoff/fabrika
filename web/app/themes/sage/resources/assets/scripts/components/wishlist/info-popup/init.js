export const infoPopup = (message) => {
    let popup = $('.info-popup');
    let isAppend = false;

    if(!popup.length) {
        popup = $('<div class="info-popup"></div>');
        isAppend = true;
    }

    popup.html(message);

    if(isAppend) {
        $('body').append(popup);
    }

    if(!$('.info-popup').hasClass('active')) {
        $('.info-popup').addClass('active');
        setTimeout(() => $('.info-popup').removeClass('active'), 2500)
    }
};
