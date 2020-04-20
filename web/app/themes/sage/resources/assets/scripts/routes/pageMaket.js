import BeforeAfter from '../components/maket/comparison';

export default {
    init() {
        new BeforeAfter({
            id: '#comparison-slider-1',
        });
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
