export default function galleryPopup()
{
    $('.woocommerce-product-gallery__image').append('<div class=\'gallery-popup\'></div>');
    $('body').on('click', '.gallery-popup', function () {
        $('.woocommerce-product-gallery__trigger').click();
    });
}
