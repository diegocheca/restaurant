window._ = require('lodash');

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

 import Echo from 'laravel-echo';

 window.Pusher = require('pusher-js');

//voy a probar poniendo directaemnte los valoeres y no ref de las variables, despues lo cambio
 window.Echo = new Echo({
     broadcaster: 'pusher',
     key: 'f56c073705badff36cd3',
     cluster: 'us2',
     //encrypted: false
     forceTLS: false
 });
