<template>
  <table class="table table:border secondary-5:border">
    <thead>
      <tr>
        <th  v-for="th in tableHeader" :key="th">
          <div class="between:flex center:items">
            <span>{{th}}</span>
            <span>
             <i class="fas fa-filter"></i>
            </span>
          </div>
        </th>
      </tr>
      </thead>
      <tbody>
        <tr v-for="td in tableData" :key="td">
          <td v-for="column in tableHeader" :key="column">
          <span v-if="!hasMore(column)">
             <span v-if="!hasType(column)">{{td[column]}}</span>
             <span v-else-if="types[column] == 'image'">
               <image :info="td"></image> 
             </span>
          </span>
          <span v-else-if="checkDisplay(column) == 'item'">
             <span v-if="!hasType()">
             {{td[this.more[column]["name"]][this.more[column]["value"]]}}
             </span>
             <span v-else-if="types[column] == 'image'">
               <image :info="td"></image> 
             </span>
          </span>
          <span v-else-if="checkDisplay(column) == 'list'">
            {{"list"}}
          </span>
          </td>
        </tr>
      </tbody>
    </table>
    <!--<list></list>-->
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

import list from "../../inteli_library/ui/components/lists/list.vue"

import image from "../../inteli_library/ui/components/images/image.vue"

//import 'alga-css/dist/alga.min.css'
//import 'alga-css/dist/alga-animate.min.css'

export default {
  components:{
    list,
    image
  },
  name: 'TableData',
  props: {
    columns: Array,
    entries: Array,
    more: Object,
    types: Object
  },
  setup ()
  {
  },
  computed:{
    tableHeader()
    {
      return this.columns || []
    },
    tableData()
    {
      return this.entries || []
    }
  },
  data (){
    return {

   }
 },
   methods:{
    hasType(column)
    {
      var keys = Object.keys(this.types);
      return keys.includes(column)
    },
    checkDisplay(column)
    {
      if(this.hasMore(column))
      {
        return this.more[column]["display"]
      }
      
    },
    hasMore(column)
    {
      var keys = Object.keys(this.more);
      return keys.includes(column)
    }
   },
   mounted()
   {
    console.log("tableHeader: ")
    console.log(this.tableHeader)
   }
}
</script>

<style scoped>

</style>