<template>
  <!--max-height-vh-100 h-100-->
  <main class="main-content position-relative mt-1 ">
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
main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
}

.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    /*display: flex;
    justify-content: space-between;
    align-items: center;*/
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

/*Content*/

.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    padding: 5px;
}
</style>
