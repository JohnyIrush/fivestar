<template>
  <!-- start select input-->
  <div  id="select-input-component"  class="">
    <label :for="nameKey">{{nameKey}}</label>
    <select :value="option" :name="nameKey" class="form-select" :aria-label="nameKey" @change="selectOption">
     <option  v-for="option in inputOptions" :key="option.id" :value="option[valueKey]" >{{option[nameKey]}}</option>
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
    valueKeyKey: String,
    variable: String,
    field: String
  },
  setup ()
  {

  },
 computed:{

 },
  data (){
    return {
      option: 1
   }
 },
   methods:{
    selectOption()
    {
      this.$emit("selectInput",
        {
          'option': this.option,
          'field': this.field,
          //'variable': this.variable
        }
        )
    }
   },
   mounted()
   {
    console.log(this.nameKey, this.inputOptions)
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