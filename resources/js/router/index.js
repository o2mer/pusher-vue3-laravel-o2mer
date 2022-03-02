import { createRouter, createWebHistory } from "vue-router";

import Leaderboard from "../components/Leaderboard.vue"

const routes = [
    {
        path: '/',
        name: 'leaderboard',
        component: Leaderboard
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
});
