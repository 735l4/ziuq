/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
require('./progressbar')
import { BootstrapVue } from 'bootstrap-vue'

Vue.use(BootstrapVue)

import 'bootstrap-vue/dist/bootstrap-vue.css'

import App from './App.vue'

import VueRouter from 'vue-router';
Vue.use(VueRouter);
import Swal from 'sweetalert2';

window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  showConfirmButton: false,
  position: 'top-end',
  timer: 3000,
  timerProgressBar: true,
  onOpen : (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.Toast = Toast;

import { routes } from './router'


const router = new VueRouter(
 { 
   routes,
   mode: 'history'

  })
Vue.component('App',App);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
  const app = new Vue({
      el: '#app',
      router
  });