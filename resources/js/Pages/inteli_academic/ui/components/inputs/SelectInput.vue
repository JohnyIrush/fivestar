<template>
  <!-- start select input-->
  <div  id="select-input-component"  class="">
    <label :for="(nameKey != '')? nameKey : name">{{(nameKey != '')? nameKey : name}}</label>
    <select :value="option" :name="(nameKey != '')? nameKey : name" :class="'form-select ' + size" :aria-label="nameKey" @change="selectOption">
     <option  v-for="option in (inputOptions.length != 0)? inputOptions : options" :key="option.id" :value="(valueKey != '')? option[valueKey] : option[value]" >{{(nameKey != '')? option[nameKey] : option[name] }}</option>
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
    valueKey: String,
    variable: String,
    field: String,
    datapath: String,
    size: String
  },
  setup ()
  {

  },
 computed:{

 },
  data (){
    return {
      option: 1,
      optionsdata: [],
      options: Array,
      name: String,
      value: String,
      variable: String,
      field: String,
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
      }) 
    },
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
    this.getData(this.datapath)
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