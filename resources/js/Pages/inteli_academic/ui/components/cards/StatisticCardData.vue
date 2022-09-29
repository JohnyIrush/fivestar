<template>
 <div class="row">
   <div class="col-12 col-xl-4" v-for="data in statistics" :key="data">
    <div class="card glass-content">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold"> {{data.label}} </p>
              <h5 class="font-weight-bolder mb-0">
                {{data.total}}
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" :title="data.description">more</button>
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md" v-html="data.icon">
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
  name: 'StatisticCardData',
  props: {
    dataPath:String
  },
  components:{
    
  },
  setup ()
  {
  },
  computed:{

  },
  data (){
    return {
      statistics: []
   }
 },
   methods:{
      getStatistics(url)
      {
          axios.get(url)
          .then((response)=>{
             this.statistics = response.data
          })
      },
   },
   mounted()
   {
    this.getStatistics(this.dataPath)
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
