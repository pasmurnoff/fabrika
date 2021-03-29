/* Sticky cart for product */
import sticky from '../components/sticky-cart';
import toggleShare from '../components/share';
import generateProductPdf from '../components/generate-product-pdf/init';

export default {
    init() {
        sticky();
        toggleShare();
        generateProductPdf();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
