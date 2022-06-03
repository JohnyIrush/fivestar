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

    import NavBar from "../../../../../../packages/inteliresource/src/resources/js/Pages/inteli_resource/widgets/NavBar.vue";
    import Sidebar from '../widgets/Sidebar'
    import Body from '../widgets/User-Manager/Body'
    import settings from '../../../../../../packages/inteliresource/src/resources/js/Pages/inteli_resource/plugins/settings.vue'

    export default defineComponent({
        components:
        {
          NavBar,
          Sidebar,
          Body,
          settings
        },
    })
</script>

<style scoped>

</style>
