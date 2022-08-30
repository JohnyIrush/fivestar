<template>
 <div class="container">
  <div class="row">
    <div class="col-11">
      <data_table  :datapath="'libraries'"></data_table>
    </div>
  </div>
  
 </div>
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

import data_table from "../../inteli_library/ui/components/tables/table.vue"


export default {
  components:{
    data_table
  },
  setup ()
  {

  },
  data (){
    return {
      columns: [],
      entries: [],
      more: {},
      types: {},
      showEntries: [5,10,15,25,50,75,100],
      currentEntries: 10,
      filterEntries: []
   }
 },
   methods:{
    getBooks(url)
     {
         axios.get(url)
         .then((response)=>{
            this.columns = response.data.columns
            this.entries = response.data.entries
            this.more = response.data.more
            this.types = response.data.types
         })
     },
     paginateEntries()
     {
       this.filterEntries = $array.paginate(this.entries)(1, this.currentEntries)   
     }
   },
   mounted()
   {
     this.getBooks("books")
   }
}
</script>

<style scoped>

</style>