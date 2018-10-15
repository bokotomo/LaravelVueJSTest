
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueRouter from 'vue-router';

window.Vue = require('vue');
window.VueRouter = require('vue-router');
Vue.use(VueRouter)

import App from './views/App'
import Test from './views/Test'
import Index from './views/Index'
import Todo from './views/Todo'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'index',
            component: Index
        },
        {
            path: '/test',
            name: 'test',
            component: Test
        },
        {
            path: '/todo',
            name: 'todo',
            component: Todo,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
