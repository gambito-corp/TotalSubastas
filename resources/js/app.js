require('./bootstrap');
require('./UserNotification');
window.Vue = require('vue');
import Vue from 'vue';
import Vuetify from 'vuetify';
Vue.use(Vuetify);

export default new Vuetify(opts);

Vue.component('faqs-component', require('./components/FaqsComponent.vue'));
Vue.component(
    'example-component',
    require('./components/ExampleComponent.vue').default
);
const app = new Vue({
    el: '#app'
})

