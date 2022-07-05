import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Qui andranno tutte le rotte import delle pages
import HomeComponent from './pages/HomeComponent'
import SingleRestaurant from './pages/SingleRestaurant'
import NotFound from './pages/NotFound'
import CategoryRestaurantsFilter from './pages/CategoryRestaurantsFilter'
import paymentsPage from './pages/paymentsPage'



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
            path: '/category/',
            name: 'category-restaurants-filter',
            component: CategoryRestaurantsFilter
        },
        {
            path: '/payments/',
            name: 'payments-page',
            component: paymentsPage
        },
         {
            path: '/',
            name: 'notFound',
            component: NotFound
        },
    ]
})

export default router;
