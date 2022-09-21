<template>
  <div class="container">
      <Dash></Dash>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../../Theme/widgets/Footer.vue'

    import Dash from './Dash'

    export default defineComponent({
        components: {
            Footer,
            Dash
        },

        mounted() {

        },
    })
</script>
