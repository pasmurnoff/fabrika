/* Sticky cart for product */
import miniCart from './../components/mini-cart'
import sticky from '../components/sticky-cart';
import stockStatus from './../components/stock-status';

export default {
    init() {
        miniCart();
        sticky();
        stockStatus();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
