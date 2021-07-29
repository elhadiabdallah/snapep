import Vue from 'vue'
import App from './layouts/App'
import VueMeta from 'vue-meta'
import axios from 'axios';
import VueSweetalert2 from 'vue-sweetalert2';
import router from './router'
import store from './store';

import 'sweetalert2/dist/sweetalert2.min.css';

axios.defaults.withCredentials = true
axios.defaults.baseURL = 'http://127.0.0.1:8000/api'


Vue.use(VueMeta, {
    refreshOnceOnNavigation: true
  })
Vue.use(VueSweetalert2);
const app = new Vue({
    el: '#app',
    router,
    store,
    metaInfo: {
        titleTemplate: 'Snapep | %s'
    },
    template: '<app></app>',
    components: { App },
});
