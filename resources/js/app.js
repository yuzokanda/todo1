
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';







window.Vue = require('vue');



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app', require('./components/App.vue').default);
Vue.component('entry-list-component', require('./components/EntryListComponent.vue').default);
Vue.component('entry-show-component', require('./components/EntryShowComponent.vue').default);
Vue.component('entry-create-component', require('./components/EntryCreateComponent.vue').default);
Vue.component('entry-edit-component', require('./components/EntryEditComponent.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//  var vm = new Vue({
//     data: {
//       // declare message with an empty value
//       message: ''
//     },
//     template: '<div>{{ message }}</div>'
//   })
//   // set `message` later
//   vm.message = 'Hello!'

const app = new Vue({
    el: '#app',

});

