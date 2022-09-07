<template>
 <div class="row">
   <div class="col-12" >
    <div class="card glass-content">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold"> {{details.label}} </p>
              <p class="font-weight-bolder" v-for="field in details.visible" :key="field">
                {{details.details[0][field]}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"  v-if="details.icon != ''" v-html="details.icon">
            </div>
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md" v-for="column in details.columns" :key="column"  v-if="columnHasType(column) && details.types[column] == 'image'" >
              <img :src="details.details[0][column]">
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
 </div>
</template>


<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'


export default defineComponent({
  name: 'DetailCardData',
  props: {
    details: Array,
    datapath: String
  },
  //mixins: [fieldHasType],
  components:{
    
  },
  setup ()
  {
  },
  computed:{
    fields()
    {
      return this.types || []
    }
  },
  data (){
    return {
      details: [],
      fields: []
   }
 },
   methods:{
    columnHasType(column)
    {
      // console.log(this.details.types)
      // var keys = Object.keys(this.details.types)
      // return keys.includes(column)

      return false;
    },
    getData(url)
    {
      axios.post(url, {"conditions" : {id: 1}})
      .then((response)=>{
      this.details = response.data
      this.types = response.data.types
      })
    }
   },
   mounted()
   {
    this.getData(this.datapath)
   }
});
</script>


<style scoped>

/*modal*/
.glass-container
{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
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
