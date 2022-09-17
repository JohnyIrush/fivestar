<template>
  <button :class="'btn ' + button_classes" 
          type="button" data-bs-toggle="collapse" 
          :data-bs-target="'#' + collapseId" 
          aria-expanded="false" 
          :aria-controls="collapseId"
          @click="passComponentDetails">
          <span> <i :class="icon_classes"></i> {{buttonName}} </span>
  </button>
</template>

<script>

import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

export default defineComponent({
        props: {
            collapseId: String,
            buttonName: String,
            icon_classes: String,
            button_classes: String,
            portId: String,
            componentId: String,
            componentName: String
        },
        components: {
        },
        data() {
            return {
            }
        },
        methods: {
            passComponentDetails()
            {
                store.state.Collapse.portId = this.portId
                store.state.Collapse.collapseId = this.collapseId
                store.state.Collapse.componentId = this.componentId
                store.state.Collapse.componentName = this.componentName
            },
        },
        mounted()
        {
            
        },
    })
</script>


<style scoped>


</style>
