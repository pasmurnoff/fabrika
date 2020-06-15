/* Sticky cart for product */
import sticky from '../components/sticky-cart';
import share2 from '../common/share2';

export default {
    init() {
        sticky();
        share2();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
