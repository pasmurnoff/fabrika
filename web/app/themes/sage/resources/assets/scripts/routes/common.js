import lozad from 'lozad';
import transitionFix from '../common/transition-fix'
import miniCart from './../components/mini-cart'
import dropdownSizes from '../components/swatches/init'
import dropdownSizesForQuickView from '../components/swatches/for-quick'
import Inputmask from 'inputmask';

export default {
    init() {
        document.querySelectorAll('input[type="tel"]').forEach(item => {
            Inputmask({
                'mask': '+7(999) 999 9999',
                showMaskOnHover: false,
            }).mask(item);
        });

        const observer = lozad();
        observer.observe();

        transitionFix();
        miniCart();
        dropdownSizes();
        dropdownSizesForQuickView();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
