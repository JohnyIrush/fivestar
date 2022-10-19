<template>
  <!-- start radio input-->
  <div  id="radio-input-component"  class="input-group d-flex flex-column">
    <div class="form-check" v-for="option in inputOptions" :key="option[valueKey]">
     <input class="form-check-input" type="radio" :valueKey="option[valueKey]" id="" @change="selectOption(option)" :name="nameKey">
     <label class="form-check-label" :for="option[nameKey]">{{option[nameKey]}}</label>
    </div>
  </div>
  <!-- end radio input-->
</template>

<script>

import { defineComponent } from 'vue'

import {store} from "../../../../../store/store.js"

export default defineComponent({
  name:'CheckBox',
  props: {
    inputOptions: Array,
    nameKey: String,
    valueKeyKey: String,
    variable: String
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
    selectOption(option)
    {
      this.$emit("radioInput",
        {
          'option': option,
          'variable': this.variable
        }
        )
    }
   },
   mounted()
   {
    
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