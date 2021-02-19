import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';


Vue.use(VueRouter);

// require('./bootstrap');

// window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',


    router: new VueRouter(routes)
});
