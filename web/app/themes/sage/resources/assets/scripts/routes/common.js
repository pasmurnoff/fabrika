import transitionFix from '../common/transition-fix'
import miniCart from './../components/mini-cart'
import dropdownSizes from '../components/swatches/init'
import dropdownSizesForQuickView from '../components/swatches/for-quick'

export default {
    init() {
        transitionFix();
        miniCart();
        dropdownSizes();
        dropdownSizesForQuickView();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
