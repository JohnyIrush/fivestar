<template>
 <div 
     class="row"
     v-for="(settingOption, index) in SettingOptions" 
 >
   <div :class="settingNameContainerClasses">
     {{settingOption.name}}
   </div>
   <div :class="settingOptionContainerClasses">
     <component
     :is="settingOption.component"

     :inputOptions="''"
     :nameKey="''"
     :valueKeyKey="''"
     :variable="''"
     :field="''"
     :size="'form-select-lg'"
     :datapath="settingOption.datapath"
     
     :settingsConfig="
     {
      package: settingOption.settings.package,
      widget: settingOption.settings.widget,
      component: settingOption.settings.component,
      value: settingOption.settings.value
     }
     "
     @selectInput="configureSetting"
     >
     </component>
   </div>
 </div>
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../../store/store.js"

import SelectInput from "../../../../inteli/ui/widgets/inputs/SelectInput"

export default defineComponent({
  name:'SettingSelect',
  props: {
    SettingOptions:{
      type: Array,
    },
    settingNameContainerClasses:{
      type: String,
      default: 'col-12 col-xl-4'
    },
    settingOptionContainerClasses:{
      type: String,
      default: 'col-12 col-xl-8'
    }
  },
  components:{
    SelectInput
  },
  setup ()
  {

  },
 computed:{

 },
  data (){
    return {

   }
 },
   methods:{
    toJsObject(data)
    {
      var form = {};

      form.title = data.title

      console.log(form)
    },
    configureSetting(event)
    {
      
      store.commit('updateSetting', event)
    },
    getData(url)
    {
      var responseData = [];

      axios.get(url)
        .then((response)=>{
          this.options = response.data.options; 
          this.name = response.data.name; 
          this.value = response.data.value; 
          this.field = response.data.column;
      }) 
    },
   },
   mounted() 
   {
    console.log("state",store.state.Application)
   }
});
</script>

<style scoped>
.main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
}

.glass-container
{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

/*Content*/

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
</style>