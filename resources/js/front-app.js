console.log("Ok Js:)");
require("./bootstrap");
// require("./braintree");

window.axios = require("axios");
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require("vue");

import AppComponent from "./app/AppComponent";
import router from './routes'
import Vue from 'vue';
import vueBraintree from 'vue-braintree';

new Vue({
    el: "#app",
    render: (h) => h(AppComponent),
    router
});

Vue.use(vueBraintree)
