<template>
<div class="dropdown">
  <button v-if="triggerType == 'button'" class="btn btn-primary dropdown-toggle" type="button" id="table-options" data-bs-toggle="dropdown" aria-expanded="false">
    <i :class="icon_classes"></i> {{triggerName}}
  </button>
  <span v-if="triggerType == 'icon'" class="dropdown-toggle"  id="table-options" data-bs-toggle="dropdown" aria-expanded="false">
    <i :class="icon_classes"></i> {{triggerName}}
  </span>
  <ul class="dropdown-menu" aria-labelledby="table-options">
    <li><a class="dropdown-item" role="button" @click="edit"><i class="fas fa-edit"></i>Edit</a></li>
    <li><a class="dropdown-item" role="button" @click="destroy"><i class="fas fa-trash-alt"></i>Delete</a></li>
  </ul>
</div>
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

import {store} from "../../../../../store/store.js"

export default {
  name:'TableOptions',
  props: {
    triggerName: String,
    triggerType: String,
    deletePath: String,
    id: Number,
    formData: Array,
  },
  setup ()
  {

  },
  data (){
    return {

    }
 },
   methods:{
    edit()
    {
      store.state.form.formEditData = this.formData
      store.state.form.formType = 'update'

      this.$emit("showModal")
    },
    destroy()
    {
         axios.post(this.deletePath, {'id': this.id})
         .then((response)=>{

         })
    }
   },
   mounted()
   {

   }
}
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