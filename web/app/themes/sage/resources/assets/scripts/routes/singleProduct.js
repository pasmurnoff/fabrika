/* Sticky cart for product */
import sticky from '../components/sticky-cart';
import toggleShare from '../components/share';
import galleryPopup from '../gallery-popup/init';
import generateProductPdf from '../components/generate-product-pdf/init';

export default {
    init() {
        sticky();
        toggleShare();
        galleryPopup()
        generateProductPdf();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
