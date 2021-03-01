$('.tab-call').on('click', function() {
    $( '.support-modal__main' ).addClass( 'tab-hide');
    $( '.support-modal__call' ).addClass( 'tab-show');
})

$('.support-modal__back-btn').on('click', function() {
    $( '.support-modal__main' ).removeClass( 'tab-hide');
    $( '.support-modal__call' ).removeClass( 'tab-show');
    $( '.support-modal__message' ).removeClass( 'tab-show');
})

$('.tab-message').on('click', function() {
    $( '.support-modal__main' ).addClass( 'tab-hide');
    $( '.support-modal__message' ).addClass( 'tab-show');
})