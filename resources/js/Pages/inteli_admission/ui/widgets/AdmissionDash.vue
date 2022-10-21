<template>

</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../store/store.js"

export default defineComponent({
        components: {

        },
        data() {
            return {
                statistics: [],
                datapaths: ['admission/applicant/response/create','communication/create'],
                formFields: []
            }
        },

        methods: {
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getFields()
            {
              for (var i = 0; i < this.datapaths.length; i++)
              {
               if (this.datapaths[0] != '')
               {
                 axios.get(this.datapaths[0])
                 .then((response)=>{
                    this.formFields.push(response.data)
                    console.log("Form Data", response.data)
                    console.log()
                 })
                 }
               }
            }
        },
        mounted()
        {
            
        },
    })
</script>


<style scoped>


.glass-container
{
   /*
    position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);
    */
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}


.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    padding: 5px;
}

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}

.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

.avatar-size
{
    height: 150px !important;
    width: 150px !important;
}

.fs-8
{
  font-size: 10px !important;
}


.tab-content {
  width: 100% !important; 
}
</style>
