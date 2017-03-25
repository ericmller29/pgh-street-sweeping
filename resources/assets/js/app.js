require('./bootstrap');

Vue.component('schedule', require('./components/Schedule.vue'));
Vue.component('hood-search', require('./components/NeighborhoodSearch.vue'));

const app = new Vue({
    el: '#app'
});