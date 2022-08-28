<template>
    <button @click="passComponentDetails" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#main-modal"><span v-if="name">{{name}}</span><i v-if="icon_classes" :class="icon_classes"></i></button>
</template>

<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

    export default defineComponent({
        props:{
            name: String,
            icon_classes: String,
            title: String,
            modalChildComponent: String
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
               store.state.Modal.modalChildComponent = this.modalChildComponent 
               store.state.Modal.title = this.title 
            }
        },
        mounted() {

        },
    })
</script>

<style scoped>

</style>
