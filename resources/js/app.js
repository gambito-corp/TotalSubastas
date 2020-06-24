require('./bootstrap');
require('./UserNotification');
window.Vue = require('vue');
import Vue from 'vue';
import Vuetify from 'vuetify';
Vue.use(Vuetify);

export default new Vuetify(opts);

Vue.component('maincomponent', require('./components/maincomponent.vue').default);

const app = new Vue({
    el: '#app'
})

