<template>
  <Sidebar></Sidebar>
  <main class="main-content position-relative mt-1 border-radius-lg ">
      <!--<NavBar></NavBar>-->
      <screen-shot></screen-shot>
      <settings></settings>
  </main>
</template>

<script>
    import { defineComponent } from 'vue'

    //import NavBar from '../widgets/NavBar.vue'
    import Sidebar from '../widgets/Sidebar'
    import ScreenShot from '../widgets/images/ScreenShot.vue'
    import settings from '../plugins/settings.vue'

    export default defineComponent({
        components:
        {
          //NavBar,
          Sidebar,
          ScreenShot,
          settings
        },
        methods:
        {

        }
        ,
        mounted()
        {

        }
    })
</script>

<style scoped>
main
{
    background: linear-gradient(purple, pink) !important;
    background-size: cover !important;
}

</style>
