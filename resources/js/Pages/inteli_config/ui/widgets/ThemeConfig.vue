<template>
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card">
                 <div class="card-header pb-0 p-3">
                   <h3 :class="Theme.key + '-text-color'">Theme Settings</h3>
                 </div>
                 <div class="card-body p-3">
                  <radio-input
                   :inputOptions="[]"
                   :nameKey="''"
                   :valueKeyKey="''"
                   :variable="''"
                   :field="''"
                   :options_title_classes="Theme.key + '-text-color'"
                   :options_label_classes="Theme.key + '-text-color m-2'"
                   :isFormSwitch="true"
                   :optionTitleComponent="'h4'"
                   :eventName="'themeConfigSet'"
                   @themeConfigSet="updateThemeSetting"
                   :datapath="'theme/list'">
                  </radio-input>
                 </div>
               </div>
             </div>
           </div>
         </div>
</template>

<script>

import { defineComponent, ref, inject } from 'vue'

import RadioInput from '../../../inteli/ui/widgets/inputs/RadioInput.vue'

import {store} from "../../../../store/store.js"


export default defineComponent({
        components: {
          RadioInput
        },
        setup(props, context)
        {
          var Theme = ref(inject("Theme"));

          return {
            Theme
          }
        },
        data() {
            return {
                statistics: [],
            }
        },

        methods: {
          updateThemeSetting(event)
          {
           store.commit('updateSetting', {
             option: event.option,
             settings:{
               type: 'feature',
               feature: 'Theme'
             }
           })
          },
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getStatistics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.statistics = response.data
                })
            },
        },
        mounted()
        {
            this.getStatistics("academic/statistics")
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


.tab-content {
  width: 100% !important; 
}
</style>
