<template>
  <Sidebar v-if="display.sidebar"></Sidebar>
  <main class="main-content position-relative mt-1 border-radius-lg position-relative">
      <div :class="Theme.key + '-container'">
         <NavBar v-if="display.navbar"></NavBar>
         <slot></slot>

         <Footer v-if="display.footer"></Footer>
      </div>
      <settings ></settings>
  </main>
</template>


<script>
    import { defineComponent, provide, inject, ref, reactive } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import NavBar from './NavBar.vue'
    import Sidebar from './Sidebar.vue'
    import settings from '../plugins/settings.vue'
    import Footer from '../widgets/Footer.vue'


    export default defineComponent({
        props: {
          display: {
            type: Object, // String, Number, Boolean, Function, Object, Array
            default: {
              navbar : true,
              sidebar : true,
              footer : true
            }
          }
        },
        setup(props,context)
        {    
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }  
        },
        components: {
            Link,
            NavBar,
            Sidebar,
            Footer,
            settings
        },
    })
</script>

<style scoped>
</style>
