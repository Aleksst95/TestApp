import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import App from './App.vue';

import router from './router.js';

Vue.use(ElementUI);

const app = new Vue({
    el: '#app',

    router: router,
    render: h => h(App)
});
