window._ = require('lodash');
global.$ = global.jQuery = require('jquery');
import Popper from 'popper.js/dist/umd/popper.js';
window.Popper = Popper;
require('bootstrap')
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
require('./components/newsletter');
require('./components/carousel');
require('./components/event_category_filter');
require('./components/lazyload/lazyload_news');
require('./components/lazyload/lazyload_events');
require('./components/index_event_filter');
require('./components/welcome');
require('./components/switch_language');
require('./components/recaptcha_size');
require('./components/gallery');
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });



/**
* Setup Ajax Header
*/
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});