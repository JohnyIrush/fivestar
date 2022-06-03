<template>
  <!--max-height-vh-100 h-100-->
  <main class="main-content position-relative mt-1 border-radius-lg ">
      <NavBar></NavBar>
      <Body></Body>
      <settings></settings>
  </main>
</template>

<script>
    import { defineComponent } from 'vue'

    import NavBar from '../widgets/NavBar.vue'
    import Body from '../widgets/Body.vue'
    import settings from '../plugins/settings.vue'
    

    export default defineComponent({
        components:
        {
         NavBar,
         Body,
         settings
        },
    })
</script>

<style scoped>

</style>
