/* Sticky cart for product */
import sticky from '../components/sticky-cart';
import toggleShare from '../components/share';

export default {
    init() {
        sticky();
        toggleShare();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
