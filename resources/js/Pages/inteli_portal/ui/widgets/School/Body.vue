<template>
  <div class="container-fluid py-4">
      <Profile></Profile>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../../../Theme/widgets/Footer.vue'

    import Profile from './Profile'

    export default defineComponent({
        components: {
            Footer,
            Profile
        },

        mounted() {

        },
    })
</script>
