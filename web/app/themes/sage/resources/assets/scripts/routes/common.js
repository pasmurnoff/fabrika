import transitionFix from '../common/transition-fix';

export default {
    init() {
        transitionFix();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
