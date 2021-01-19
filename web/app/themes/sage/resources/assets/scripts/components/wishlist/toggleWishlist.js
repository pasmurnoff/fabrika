import {setCookie} from './cookie/set';
import {getCookie} from './cookie/get';

export default function toggleWishlist(productId) {
    if(!productId) {
        return
    }

    let wishlist = getCookie('wishlist');
    let resp = '';

    if(!wishlist || wishlist == '') {
        wishlist = [];
    }

    if(typeof(wishlist) == 'string') {
        wishlist = wishlist.split(',');
    }

    let index = wishlist.indexOf(productId.toString());

    if(index == -1) {
        wishlist.push(productId);
        resp = {
            'message': 'Товар добавлен в список желаний',
            'status': 'added',
        };
    } else {
        wishlist.splice(index, 1);
        resp = {
            'message': 'Товар удален из списка желаний',
            'status': 'deleted',
        };
    }

    setCookie('wishlist', wishlist.join(','), {expires: 365})
    resp.wishlist = wishlist;
    resp.count = wishlist.length;
    return resp;
}
