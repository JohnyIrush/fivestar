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

    import NavBar from "../../../Theme/widgets/NavBar.vue";
    import Sidebar from '../../../Theme/widgets/Sidebar.vue'
    import Body from '../widgets/User-Manager/Task/Body'
    import settings from '../../../Theme/plugins/settings.vue'

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
main
{
    background: linear-gradient(purple, pink);
    background-size: cover;
}

</style>
