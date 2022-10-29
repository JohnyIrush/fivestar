<template>
  <!-- start select input                  :value="(valueKey.length != 0)? option[valueKey] :
                 (value.length != 0)? option[value]:
                  option"-->
  <div  
     id="select-input-component"  
     :class="inputContainerClasses">
    <label 
         :class="inputLabelClasses"
         :for="(nameKey != '')? nameKey : name">
          {{(labelName.length !== 0)? labelName : label}}
    </label>
    <select 
          v-model="option" 
          :class="'form-select ' + size" 
          :aria-label="nameKey" 
          @change="selectOption"
          :id="'select-input'">
          <option  
                 v-for="option in (inputOptions.length != 0)? inputOptions : options" 
                 :key="option" 
                 :value="option"
                  @click="selectOption(option)"
                  >
                 {{(nameKey != '')? option[nameKey] : option[name] }}
          </option>
    </select>
   </div>
   <!-- end select input-->
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../../store/store.js"

export default defineComponent({
  name:'SelectInput',
  props: {
    inputOptions: Array,
    nameKey: String,
    valueKey: {
      type:String,
      default: ''
    },
    variable: String,
    field: String,
    datapath: String,
    size: {
      type: String,
      default: ''
    },
    inputLabelClasses: String,
    labelName: {
      type: String,
      default: ''
    },
    settingsConfig: {
      type: Object,
      default: false
    },
    eventName: {
      type: String,
      default: 'selectInputEvent'
    },
    inputRequired: {
      type: Boolean,
      default: false
    }
  },
  setup ()
  {

  },
 computed:{

 },
  data (){
    return {
      option: Array,
      optionsdata: [],
      options: Array,
      name: String,
      value: String,
      variable: String,
      field: String,
      inputContainerClasses:{
        type: String,
        default: 'input-group'
      },
      label: '' 
   }
 },
   methods:{
    getData(url)
    {
      var responseData = [];

      axios.get(url)
        .then((response)=>{
          this.options = response.data.options; 
          this.name = response.data.name; 
          this.value = response.data.value; 
          this.field = response.data.column;
          this.label = response.data.label;
      }) 
    },
    selectOption()
    {
      console.log(this.option)
      this.$emit(this.eventName,
        {
          option: this.option,
          field: this.field,
          //Setting Select
           settings: this.settingsConfig
           //{
           // package: (this.settingsConfig)? this.settingsConfig.package : {} ,
           // widget: (this.settingsConfig)? this.settingsConfig.widget : {} ,
           // component: (this.settingsConfig)? this.settingsConfig.component : {} ,
           // value: (this.settingsConfig)? this.settingsConfig.value : {} 
           //}
          //'variable': this.variable
        }
        )
    }
   },
   mounted()
   {
    this.getData(this.datapath)

    if (this.inputRequired)
    {
      document.getElementById(`select-input`).setAttribute('required', 'required')

    }
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