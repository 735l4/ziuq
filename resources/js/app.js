/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// import store from './store';

window.Vue = require('vue');
require('./progressbar')
import { BootstrapVue } from 'bootstrap-vue'

Vue.use(BootstrapVue)

import 'bootstrap-vue/dist/bootstrap-vue.css'

import App from './App.vue'
import Login from './components/pages/auth/LoginComponent'

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
  function isLoggedIn(){
    return store.state.auth.authenticated;
  }
  router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)){
      if(!isLoggedIn()){
        next({
          path: '/login',
          query: { redirect: to.fullPath }
        })
      }
      else{
        next()
      }
    } else if (to.matched.some(record => record.meta.requiresVisitor)){
      if(isLoggedIn()){
        next({
          name: 'home',
          query: { redirect: to.fullPath }
        })
      }
      else{
        next()
      }
    } else {
      next();
    }
  })
Vue.component('App',App);
Vue.component('Login',Login);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// store.dispatch('auth/me').then(() => {
  const app = new Vue({
      el: '#app',
      // store,
      router
  });
// })