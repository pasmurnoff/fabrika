// import external dependencies
import 'jquery';
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
import './components/product-tools'
import './forms/ajax-search'
import './components/maket/comparison'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import pageCdek from './routes/pageCdek';
import singleProduct from './routes/singleProduct';

/** Populate Router instance with DOM routes */
const routes = new Router({
    // All pages
    common,

    pageCdek,

    singleProduct,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
