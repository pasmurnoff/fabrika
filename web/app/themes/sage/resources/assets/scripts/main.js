// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick.min'
import './forms/visual'
import './forms/input-file'
import './forms/ajax'
import './forms/input-number'
import './cookie/cookie-init'
import './cookie/cookie-check'
import './cookie/top-baner'
import './components/orderby'
import './overlay/overlay'
import './sidebar/sidebar'
import './popup/popup'
import './components/cat-dropdown'
import './components/wishlist'
import './components/menu'
import './components/main-sidebar'
import './components/manager-sku'
import './forms/ajax-search'
import './components/stories/init'
import './components/callback/init'
import './components/support-modal/init'
import './components/consultation-modal/init'
import wishlist from './components/wishlist/init';
/*import './components/maket/comparison'*/

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import pageCdek from './routes/pageCdek';
import singleProduct from './routes/singleProduct';
import pageMaket from './routes/pageMaket';
import singlePost from './routes/singlePost';
import pageNaZakaz from './routes/pageNaZakaz';
import zakazTovara from './routes/zakazTovara';
import wooProductCatalog from './routes/wooProductCatalog';

/** Populate Router instance with DOM routes */
const routes = new Router({
    // All pages
    common,

    pageCdek,

    pageMaket,

    singleProduct,

    singlePost,

    pageNaZakaz,

    zakazTovara,

    wooProductCatalog,
});

// Load Events
document.addEventListener('DOMContentLoaded', () => {
    routes.loadEvents();

    wishlist();
})
