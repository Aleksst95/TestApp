import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: () => import('./layouts/Main.vue'),
        children: [
            {
                path: '/',
                component: () => import('./views/Home.vue'),
                name: 'mainPage'
            },

            {
                path: '*',
                name: '404',
                component: () => import('./views/NotFound.vue')
            },
        ]
    }
];

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

export default router;
