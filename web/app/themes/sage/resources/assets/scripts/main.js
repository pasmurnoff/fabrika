// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'
import './common/transition-fix'
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
import './components/mini-cart'
import './components/mini-cart-close'
import './components/wishlist'
import './components/menu'
import './components/main-sidebar'
import './forms/cdek'
import './components/manager-sku'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import cdek from './routes/cdek';
import maket from './routes/maket';

/** Populate Router instance with DOM routes */
const routes = new Router({
    // All pages
    common,
    // Home page
    home,
    // About Us page, note the change from about-us to aboutUs.
    aboutUs,

    cdek,

    maket,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
