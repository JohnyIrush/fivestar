<template>
  <!-- start radio input-->
  <component
    :class="options_title_classes"
    :is="optionTitleComponent">
    {{label}}
  </component>
  <div  
      id="radio-input-component"  
      :class="inputContainerClasses + ' ' + orientation">
    <div 
        :class="'form-check '  + ((isFormSwitch)? 'form-switch' : '')" 
        v-for="option in (inputOptions.length != 0)? inputOptions : options" 
        :key="option[valueKey]">
     <input 
          class="form-check-input" 
          type="radio" 
          :value="option" 
          id="" @change="selectOption(option)" 
          :name="(nameKey != '')? nameKey : name">
     <label 
           :class="'form-check-label ' + options_label_classes" 
           :for="(nameKey != '')? option[nameKey] : option[name]">
         {{(nameKey != '')? option[nameKey] : option[name] }}
      </label>
    </div>
  </div>
  <!-- end radio input-->
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../../store/store.js"

export default defineComponent({
  name:'CheckBoxInput',
  props: {
    inputOptions: {
      type: Array,
      default: []
    },
    nameKey: String,
    valueKeyKey: String,
    datapath: {
      type: String,
      default: ''
    },
    variable: String,
    isFormSwitch:{
      type: Boolean,
      default: false
    },
      optionTitleComponent:{
        type: String,
        default: 'h4'
      },
      inputContainerClasses:{
        type: String,
        default: 'input-group'
      },
      orientation:{
        type: String,
        default: 'd-flex flex-row'
      },
      options_title_classes:{
        type: String
      },
      options_label_classes:{
        type: String
      },
      eventName: {
        type: String,
        default: 'radioInput'
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
      label: '' 
   }
 },
   methods:{
    getData(url)
    {
      if (url.length > 0)
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
      }

    },
    selectOption(option)
    {
      this.$emit(this.eventName,
        {
          option: option,
        }
        )
    }
   },
   mounted()
   {
    this.getData(this.datapath)
   }
});
</script>

<style scoped>

</style>