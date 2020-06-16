import articleContent from '../components/single-post/article-content';
import slowScroll from '../components/single-post/scroll';
import rating from '../components/single-post/rating';

export default {
    init() {
        articleContent();
        slowScroll();
        rating();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
