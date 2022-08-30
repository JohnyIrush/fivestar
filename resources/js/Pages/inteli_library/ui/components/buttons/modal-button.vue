<template>
    <button @click="passComponentDetails" type="button" class="btn btn-primary" ><i v-if="icon_classes" :class="icon_classes"></i><span class="ml-2" v-if="name">{{name}}</span></button>
</template>

<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

    export default defineComponent({
        props:{
            name: String,
            icon_classes: String,
            title: String,
            modalSize: String
        },
        components: {

        },
        data() {
            return {
  
            }
        },
        computed: {
          profile ()
          {
            return store.state.profile
          }
        },
        methods: {
            passComponentDetails()
            {
                this.$emit("showmodal")

               store.state.Modal.title = this.title 
               store.state.Modal.modalSize = this.modalSize 
            }
        },
        mounted() {

        },
    })
</script>

<style scoped>

</style>
