import transitionFix from '../common/transition-fix';
import miniCart from './../components/mini-cart'

export default {
    init() {
        transitionFix();
        miniCart();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
