<template>
  <Sidebar></Sidebar>
  <main class="main-content position-relative mt-1 border-radius-lg ">
      <NavBar></NavBar>
      <Body></Body>
      <settings></settings>
  </main>
</template>

<script>
    import { defineComponent } from 'vue'

    import NavBar from '../widgets/NavBar.vue'
    import Sidebar from '../widgets/Sidebar'
    import Body from '../widgets/File-Manager/Body'
    import settings from '../plugins/settings.vue'

    export default defineComponent({
        components:
        {
          NavBar,
          Sidebar,
          Body,
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

</style>
