<template>
  <!-- start checkbox input-->
  <div id="check-input" class="input-group mb-3 ml-2">
   <div  class="form-check ml-2" v-for="option in options" :key="option.id" >
     <input class="form-check-input" type="checkbox"  :value="option[value]" :name="name" id="">
     <label class="form-check-label" :for="name">
      <span>{{option[name]}}</span>
      <span v-html="option.icon"></span>
     </label>
   </div>
  </div>
  <!-- end checkbox input-->
</template>

<script>

  import { defineComponent } from 'vue'

import {store} from "../../../../../store/store.js"

export default defineComponent({
  name:'CheckBox',
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
      options: [],
      name: '',
      value: '',
      variable: '',
      field: '',
   }
 },
   methods:{
    getData(url)
    {
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