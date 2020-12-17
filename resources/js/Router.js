import vueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(vueRouter);

import Index from "./views/Index"
import Dev from "./views/Dev"

const routes = [
    {
        path: "/",
        component: Index
    },
    {
        path: "/dev",
        component: Dev
    }
];

export default new vueRouter({
    mode: "history",
    // можно и просто routes
    routes: routes
})