import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Qui andranno tutte le rotte import delle pages
import HomeComponent from './pages/HomeComponent'
import SingleRestaurant from './pages/SingleRestaurant'
import CategoryRestaurantsFilter from './pages/CategoryRestaurantsFilter'



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
            path: '/:slug',
            name: 'single-restaurant',
            component: SingleRestaurant
        },
        {
            path: '/:slug',
            name: 'category-restaurants-filter',
            component: CategoryRestaurantsFilter
        }
    ]
})

export default router;
