require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from "vue";
import router from "./router";
import Leaderboard from "./components/Leaderboard.vue";

createApp({
    components: {
        Leaderboard
    }
})
.use(router)
.mount('#app');
