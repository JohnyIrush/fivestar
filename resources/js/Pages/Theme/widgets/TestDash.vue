<template>
  <div class="container-fluid">
      <div class="row mt-6">
        <div :class="'col-12 ' + Theme.key + '-section' ">
          Test Dash
        </div>
      </div>
  </div>
</template>

<script>
    import { defineComponent, ref, inject } from 'vue'

    export default defineComponent({
        components: {

        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
        mounted() {

        },
    })
</script>

<style scoped>



.card, .card-header, .card-body
{
  background: transparent !important;
}
</style>
