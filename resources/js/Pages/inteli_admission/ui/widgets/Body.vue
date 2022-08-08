<template>
  <div class="container-fluid py-4">
      <Admission></Admission>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'


    import Admission from './Admission'

    export default defineComponent({
        components: {
            Admission
        },

        mounted() {

        },
    })
</script>
