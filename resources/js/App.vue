<template>
<div>
  <div id="app">
    <Nav />
    <router-view></router-view>
    <vue-progress-bar></vue-progress-bar>
    <Footer />
  </div>
  </div>
</template>

<script>
import Nav from './components/includes/NavComponent';
import Footer from './components/includes/FooterComponent';

export default {
  components: {
    Nav,
    Footer
  },
  name: 'App',
  mounted() {
    
      this.$Progress.finish();
  },
  created() {
      this.$Progress.start();
  },
}
</script>

<style>
  @import './assets/css/style.css';
</style>