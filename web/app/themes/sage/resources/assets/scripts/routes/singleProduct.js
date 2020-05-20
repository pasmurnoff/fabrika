/* Sticky cart for product */
import miniCart from './../components/mini-cart'
import sticky from '../components/sticky-cart';

export default {
    init() {
        miniCart();
        sticky();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
