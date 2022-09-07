//require('./bootstrap');

window.Vue = require('vue');

Vue.component('Dropdown', require('./components/Dropdown.vue').default);

const app = new Vue({
    el: '#app'
});

