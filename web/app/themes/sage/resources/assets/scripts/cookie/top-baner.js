import {setCookie} from './cookie-init';

$('.topbanner__cross').on('click', function () {
    $(this).parent().parent().animate({height: 'toggle'}, 300);
    setCookie('topbanner', 'close', {expires: 4});
});