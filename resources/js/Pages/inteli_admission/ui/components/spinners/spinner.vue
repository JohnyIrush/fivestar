<template>
  <div class="d-flex justify-content-center">
    <div :class="'spinner-border ' + color + ' ' + size" role="status">
      <span class="sr-only">{{message}}</span>
    </div>
  </div>
</template>


<script>

/*Vuex Store*/
import { store } from '../../../../../store/store.js'

/*Toast messages*/
import {Toaster,ToasterPosition,ToasterTimer,ToasterType,} from "bs-toaster";

import { defineComponent } from 'vue'

export default defineComponent({
    props: {
        color: String,
        message: String,
        size: String
    },
    components:
        {
            
        },
    data() {
        return {

        }
    },
    watch:
        {

        },
        computed: {

        },
    methods:
        {

        },
    mounted()
    {

    }
})
</script>


<style scoped>


</style>

