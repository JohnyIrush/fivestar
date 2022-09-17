<template>
  <!-- start checkbox input-->
  <div id="check-input" class="input-group mb-3">
   <label :for="name">{{name}}</label>
   <div  class="form-check" v-for="option in options" :key="option.id" >
     <input class="form-check-input" type="checkbox"  :value="option[value]" :name="name" id="">
     <label class="form-check-label" :for="name">{{option[name]}}</label>
   </div>
  </div>
  <!-- end checkbox input-->
</template>

<script>

import {store} from "../../../../../store/store.js"

export default defineComponent({
  name:'CheckBox',
  props: {
    options: Array,
    name: String,
    value: String
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

   },
   mounted()
   {
     //this.getFields(this.formPath)
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