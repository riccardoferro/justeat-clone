import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Qui andranno tutte le rotte import delle pages
import HomeComponent from './pages/HomeComponent'
import SingleRestaurantComponent from './pages/HomeComponent'


// Inseriamo le rotte disponibili
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home-booleat',
            component: HomeComponent
        },
        {
            path: '/restaurant/:slug',
            name: 'single-restaurant',
            component: SingleRestaurantComponent
        }
    ]
})

export default router;
