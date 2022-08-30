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
            modalSize: String,
            componentType: String,
            dataPath: String
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
            getFormFields(url)
            {
              axios.get(url)
              .then((response)=>{
                 this.fields = response.data[0]
                 this.options = response.data[1]
                 this.hidden = response.data[2]
                 this.crud = response.data[3]

                 store.state.form.fields = response.data
              })
            },
            passCardData(url)
            {
              axios.get(url)
              .then((response)=>{
                store.state.Card.data = response.data
              })

               console.log(store.state.Card.data.entries)
            },
            passTableData(url)
            {
              axios.get(url)
              .then((response)=>{
                 store.state.Table.data = response.data
              })
            },
            passComponentDetails()
            {
               store.state.Modal.title = this.title 
               store.state.Modal.modalSize = this.modalSize 
               store.state.Modal.componentType = this.componentType 

               if(this.componentType == 'table')
               {
                this.passTableData(this.dataPath)
               }
               else if(this.componentType == 'card')
               {
                this.passCardData(this.dataPath)
               }
               else if(this.componentType == 'form')
               {
                this.getFormFields(this.dataPath)
               }

               this.$emit("showmodal")

            }
        },
        mounted() {

        },
    })
</script>

<style scoped>

</style>
