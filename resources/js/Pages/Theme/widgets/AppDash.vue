<template>
 <div class="container-scroller">  
  <NavBar v-if="display.navbar"></NavBar>
  <div :class="'container-fluid page-body-wrapper '">
     <Sidebar v-if="display.sidebar"></Sidebar>
      <settings ></settings>
      <div class="main-panel">
        <div :class="'content-wrapper ' + Theme.key + '-container '">
         <slot></slot>
       </div>
       <Footer v-if="display.footer"></Footer>
      </div>
  </div>
</div>
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
