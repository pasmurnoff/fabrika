import sliderFilter from '../components/price-filter/init'
import sliderOrderItems from '../components/na-zakaz/init'

export default {
    init() {
        sliderFilter();
        sliderOrderItems();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
