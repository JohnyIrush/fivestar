<template>
    <button @click="passComponentDetails" type="button" class="" ><i v-if="icon_classes" :class="icon_classes"></i><span class="ml-2" v-if="name">{{name}}</span></button>
</template>

<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

    export default defineComponent({
        props:{
            name: String,
            icon_classes: String,
            title: String,
            componentType: String,
            componentName: String,
            dataPath: String,
            //Modal
            modalSize: String,
            modalWidth: String,
            modalClasses: String,
            modalDialogClasses: String,
            modalContentClasses: String,
            backDrop: Boolean,
            //List Data
            listData: Array,
            fieldName: String,
            iconName: String,
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
                 console.log(store.state.form.fields)
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
                 console.log(store.state.Table.data)
              })
            },
            passComponentDetails()
            {
               //modal
               store.state.Modal.componentType = this.componentType
               store.state.Modal.componentName = this.componentName 
               store.state.Modal.modalClasses = this.modalClasses
               store.state.Modal.modalDialogClasses = this.modalDialogClasses 
               store.state.Modal.modalContentClasses = this.modalContentClasses 
               store.state.Modal.title = this.title 
               store.state.Modal.modalSize = this.modalSize
               store.state.Modal.modalWidth = this.modalWidth
               store.state.Modal.backDrop = this.backDrop

               //list
               store.state.List.data = this.listData
               store.state.List.fieldName = this.fieldName 
               store.state.List.iconName = this.iconName 

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
