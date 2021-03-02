// $('.tab-call').on('click', function() {
//     $( '.support-modal__main' ).addClass( 'tab-hide');
//     $( '.support-modal__call' ).addClass( 'tab-show');
// })
//
// $('.support-modal__back-btn').on('click', function() {
//     $( '.support-modal__main' ).removeClass( 'tab-hide');
//     $( '.support-modal__call' ).removeClass( 'tab-show');
//     $( '.support-modal__message' ).removeClass( 'tab-show');
// })
//
// $('.tab-message').on('click', function() {
//     $( '.support-modal__main' ).addClass( 'tab-hide');
//     $( '.support-modal__message' ).addClass( 'tab-show');
// })

$('.tab-call').on('click', function() {
    $( '.support-modal__main' ).toggleClass( 'tab-hide');
    const block = $(this).data('popup'),
    elem = $('.' + block);
    $(this).toggleClass('active');
    elem.toggleClass('active');
})

$('.support-modal__back-btn').on('click', function() {
    const block = $(this).data('popup'),
        elem = $('.' + block);
    $(this).toggleClass('active');
    elem.toggleClass('active');
    $( '.support-modal__main' ).toggleClass( 'tab-hide');
})

$('.support-modal__close').on('click', function() {
    $('.overlay').removeClass('active');
    $('.support-modal.active').removeClass('active');
})

