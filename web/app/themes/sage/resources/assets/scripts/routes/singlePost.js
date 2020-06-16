import articleContent from '../components/single-post/article-content';
import slowScroll from '../components/single-post/scroll';

export default {
    init() {
        articleContent();
        slowScroll();
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
