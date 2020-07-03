/* Sticky cart for product */
import sticky from '../components/sticky-cart';
import toggleShare from '../components/share';
import swatchesSize from '../components/swatches/init'

export default {
    init() {
        sticky();
        toggleShare();
        swatchesSize();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
